<?php

class Configuration {
    
    private $instance;
    public $style_config;
    
    public function __construct() {
        $this->instance = &get_instance();
        $this->setting();
        $this->about();
    }
    private function setting() {
        foreach($this->instance->db->get('settings')->result_array() as $item)
        {
            $this->instance->config->set_item($item['key'], $item['value']);
        }
    }
    private function about() {
        foreach($this->instance->db->get('about')->result_array() as $item)
        {
            $this->instance->config->set_item($item['key'], $item['value']);
        }
    }
    
    
    
    
    
}
