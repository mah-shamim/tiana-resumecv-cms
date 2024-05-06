<?php

class Std
{
    public $__values = array();

    function __get($name)
    {
        if (isset($this->__values[$name]))
            return $this->__values[$name];
        else
            return null;
    }

    function __set($name, $value)
    {
        $this->__values[$name] = $value;
    }

}