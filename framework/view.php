<?php

class View {
    private function __construct() {
        // *** Do not touch me *** //
    }
    private static $Values = array();
    public static $Layout = 'default';
    private static $DrawLocked = false;
    public static $ContentForLayout = '';
    public static $OBLockCount = 0;
    public static function Set($key, $value) {
        self::$Values[$key] = $value;
    }
    public static function Get($key) {
        if(!isset(self::$Values[$key])) {
            return false;
        }
        return self::$Values[$key];
    }
    public static function Draw($view) {
        if(self::$DrawLocked) {
            return;
        }

        if(strpos($view, '../') !== false or strpos(self::$Layout, '../') !== false) {
            return;
        }

        self::$DrawLocked = true;
        $view_path = Config::$Configs['application']['paths']['application'] . 'views/' . $view . '.php';

        if($view != '' and !is_file($view_path)) {
            Request::HTTPCode(404);
            return;
        }

        $layout_path = Config::$Configs['application']['paths']['application'] . 'views/layouts/' . self::$Layout . '.php';
        if(self::$Layout != '' and !is_file($layout_path)) {
            Request::HTTPCode(404);
            return;
        }

        $content_for_layout = ($view == '') ? '' : self::_PrepareRender($view_path, self::$Values);
        $everything = (self::$Layout == '') ? $content_for_layout : self::_PrepareRender($layout_path, array('content_for_layout' => $content_for_layout));

        echo($everything);
    }
    private static function _PrepareRender($path, $values) {
        if(strpos($path, '../') !== false) {
            return false;
        }
        extract($values, EXTR_SKIP);
        $locked = false;
        if(self::$OBLockCount > 0) {
            $content_before = ob_get_contents();
            ob_end_clean();
        }
        ob_start();
        self::$OBLockCount++;
        include($path);
        $result = ob_get_contents();
        ob_end_clean();
        if(self::$OBLockCount > 1) {
            ob_start();
            echo $content_before;
        }
        self::$OBLockCount--;
        return $result;
    }
    public static function Element($element, $data = array()) {
        if(strpos($element, '../') !== false) {
            return;
        }
        $element_path = Config::$Configs['application']['paths']['application'] . 'views/elements/' . $element . '.php';
        if(!is_file($element_path)) {
            return;
        }
        $result = self::_PrepareRender($element_path, $data);
        return $result;
    }
}