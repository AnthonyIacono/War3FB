<?php

// take the first argument, and match with a consumer
require '../framework/application.php';
require 'event_listener.php';

if(count($argv)<2) {
    die("Requires a parameter. Eg: php consume.php main_feed");
}

Config::Import('messaging');

if(function_exists('pcntl_signal_dispatch') == false) {
function pcntl_signal_dispatch() {}
}

$amq = new amqphp\Connection(Config::$Configs['messaging']);
$amq->connect();
$channel = $amq->getChannel();

$consumer_name = $argv[1];
include_once('consumers/'.$consumer_name.'.php');

$consumer_obj = new $consumer_name;
$methods = get_class_methods($consumer_obj);

// each method is an event listener
$event_listener = array();
$queue = $channel->queue('declare', array(
    'queue' => $consumer_name
));
$channel->invoke($queue);
foreach($methods as $method) {
    $exchange = $channel->exchange('declare', array(
        'type' => 'direct',
        'durable' => true,
        'exchange' => $method
    ));
    $channel->invoke($exchange);
    $binding = $channel->queue('bind', array(
        'queue' => $consumer_name,
        'routing-key' => '',
        'exchange' => $method,
        'durable' => true
    ));
    $channel->invoke($binding);
}

$event_listener = new EventListener($consumer_obj, array(
    'queue' => $consumer_name,
    'no-local' => true,
    'no-ack' => false,
    'exclusive' => false,
    'no-wait' => false
));
$channel->addConsumer($event_listener);

while(1) {
    $loop = new amqphp\EventLoop();
    $loop->addConnection($amq);
    $loop->select();
    usleep(100);
}
