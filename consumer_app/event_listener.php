<?php

Lib::Import('amqphp/amqp');

class EventListener extends amqphp\SimpleConsumer {
    public $consumer = false;
    public function __construct($consumer, $params) {
        $this->consumer = $consumer;
        parent::__construct($params);
    }
    function handleDelivery(amqphp\wire\Method $meth, amqphp\Channel $chan) {
        $data = json_decode($meth->getContent(), true); // which exchange was this message from?
        $fields = $meth->getFields();
        $exchange = $fields['exchange'];
        foreach(Database::$Databases as $db_index => $database) {
            Database::Ping($db_index);
        }
        if(method_exists($this->consumer, $exchange)) {
            $this->consumer->{$exchange}($data); // calls the callback
        }
        return amqphp\CONSUMER_ACK;
    }
}