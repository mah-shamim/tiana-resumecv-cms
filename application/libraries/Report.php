<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Report {

    private $instance;

    function __construct() {
        $this->instance = &get_instance();
    }

    function set($msg) {
        
    }

}