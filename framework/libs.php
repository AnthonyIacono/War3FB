<?php

Lib::Import('application_config');
Lib::Import('database_config');

class Lib {
    private static $Libraries = array();
    
    private function __construct() {
        // *** Do not touch me *** //
    }
    
    public static function Import($what) {
        if(is_array($what)) {
            foreach($what as $single) {
                self::Import($single);
            }
            return;
        }

        if(!is_string($what)) {
            return;
        }

        if(strstr($what, '../') !== false) {
            return;
        }

        if(!in_array($what, self::$Libraries)) {
            self::$Libraries[] = $what;
        }

        $syspath = dirname(__FILE__) . '/' . $what.'.php';
        $classpath = dirname(__FILE__) . '/../application/' . $what . '.php';

        if(is_file($syspath)) {
            include_once($syspath);
            return;
        }

        if(is_file($classpath)) {
            include_once($classpath);
            return;
        }
    }
}