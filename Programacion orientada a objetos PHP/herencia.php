<?php

Class Usuarios

{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

     public function getName()
    {
        return $this->name;
    }
}

class Administrator extends Usuarios{
    //..
}

$admin = new Administrator('Jordan');
echo $admin->getName();