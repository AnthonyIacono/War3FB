<?php

class Endpoint_Controller {
    public function index() {
        print_r(Request::PostData());
        die("Eh");
    }
}