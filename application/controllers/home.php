<?php

Lib::Import('facebook/facebook');
Config::Import('facebook');

class Home_Controller {
    /**
     * @var Facebook
     */
    public $fb = false;

    public function __before() {
        $this->fb = new Facebook(Config::$Configs['facebook']);

    }

    public function index() {
    }

    public function set_steamid() {
        if(!Request::IsPost()) {
            Request::HTTPCode(405);
            return;
        }

        if(!$this->fb->getUser()) {
            Request::HTTPCode(403);
            return;
        }

        $this->add_or_update_fb_info($this->fb->getUser(), $this->fb->getAccessToken(), Request::PostData('steamid'));
        Request::HTTPCode(200);
    }

    private function add_or_update_fb_info($fb_user, $access_token, $steamid) {
        $result = Database::BuildAndQuery("SELECT * FROM access_tokens WHERE fb_id = '{{E0}}'", array(
            $fb_user
        ));

        if(Database::NumRows($result) == 0) {
            Database::BuildAndQuery("INSERT INTO access_tokens (steamid, access_token, fb_id) VALUES ('{{E0}}', '{{E1}}', '{{E2}}')", array(
                $steamid,
                $access_token,
                $fb_user
            ));
            return;
        }

        Database::BuildAndQuery("UPDATE access_tokens SET access_token = '{{E0}}', steamid = '{{E1}}' WHERE fb_id = '{{E2}}'", array(
            $access_token,
            $steamid,
            $fb_user
        ));
    }
}