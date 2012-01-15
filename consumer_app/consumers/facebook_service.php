<?php

Lib::Import('facebook/facebook');

class Facebook_Service {
    public $fb = false;

    function __construct() {
        Config::Import('facebook');
        $this->fb = new Facebook(Config::$Configs['facebook']);
    }

    function event_recorded($event) {
        foreach($this->access_tokens_of_steamid($event['data']['steamid']) as $token) {
            $token = $token['access_token'];
            $this->post_to_ticker($token, $event['data']['event'], $event['data']);
        }
    }

    protected function post_to_ticker($access_token, $type, $data) {
        $this->fb->setAccessToken($access_token);
        @$this->fb->api('/me/warthreesource:' . $type, 'POST', $data);
    }

    protected function access_tokens_of_steamid($steamid) {
        return Database::BuildAndQueryThenFetchAll("SELECT access_token FROM access_tokens WHERE steamid = '{{E0}}'", array($steamid));
    }
}