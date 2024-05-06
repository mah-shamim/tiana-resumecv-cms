<?php
/**
 * Management application styles and interfaces
 * @package Maro CMS
 * @version 1.0
 * @property object $instance Codeigniter instance
 * @property string $interface User Interface name
 * @property string $styleName Style name
 * @property string $styleAssets Style assets path
 * @property string $stylePath Style path
 * @property string $styleUri Style URI
 * @property string $styleDirection Style Direction
 * 
 */
class Style {
    private $instance;
    private $interface;
    private $styleName;
    public $stylePath;
    private $styleUri;

    public function __construct() {
        $this->instance = & get_instance();
        $this->initialize();
    }
    
    private function initialize() {
        if(preg_match("/admin/", current_url()))
            $this->interface = 'admin';
        
        else
            $this->interface = 'site';

        $this->styleName = 'default';
//        $this->stylePath = FCPATH . 'styles/' . $this->interface . '/' . $this->styleName;
        $this->stylePath = 'styles/' . $this->interface . '/' . $this->styleName;
        $this->styleUri = base_url() . 'styles/' . $this->interface . '/' . $this->styleName.'/';

        $this->createStyleConstants();
    }

    
    private function createStyleConstants() {
        define('STYLE_IMAGES', $this->styleUri . 'assets/images');
        define('STYLE_JS',  $this->styleUri . 'assets/js');
        define('STYLE_CSS',  $this->styleUri . 'assets/css');
        define('STYLE_BASE',  $this->styleUri);
    }
    
}