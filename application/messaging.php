<?php

Lib::Import('amqphp/amqp');
Config::Import('messaging');

class Messaging {
    private function __construct() {

    }
    private static $AMQConnection = false;
    private static $AMQChannel = false;
    private static $Initialized = false;
    public static function Initialize() {
         if(self::$Initialized) {
            return;
        }
        self::$Initialized = true;
        self::$AMQConnection = new amqphp\Connection(Config::$Configs['messaging']);
        self::$AMQConnection->connect();
        self::$AMQChannel = self::$AMQConnection->getChannel();
        self::$AMQConnection->setSelectMode(amqphp\SELECT_INFINITE);
    }
    public static function Publish($message_type, $message_data = array()) {
        if(!is_string($message_type) or strlen($message_type) <= 0) {
            return false;
        }
        if(!is_array($message_data)) {
            return false;
        }
        $exchange = self::$AMQChannel->exchange('declare', array(
            'type' => 'direct',
            'durable' => true,
            'exchange' => $message_type
        ));
        self::$AMQChannel->invoke($exchange);
        $publishParams = array(
            'content-type' => 'text/plain',
            'content-encoding' => 'UTF-8',
            'routing-key' => '',
            'mandatory' => false,
            'immediate' => false,
            'exchange' => $message_type
        );
        $basicP = self::$AMQChannel->basic('publish', $publishParams, json_encode($message_data));
        self::$AMQChannel->setConfirmMode();
        self::$AMQChannel->invoke($basicP);
    }
}

Messaging::Initialize();