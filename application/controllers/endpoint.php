<?php

Lib::Import('messaging');

class Endpoint_Controller {
    public function index() {
        if(false == Request::IsPost()) {
            Request::HTTPCode(405);
            return;
        }

        Messaging::Publish('event_recorded', array(
            'data' => Request::PostData()
        ));

        Request::HTTPCode(200);
    }
}