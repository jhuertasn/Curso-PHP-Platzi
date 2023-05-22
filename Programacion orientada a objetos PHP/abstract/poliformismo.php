<?php

abstract class Base
{
    protected $name;

    private function getClassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "<p>Mi nombre es $this->name desde la clase {$this->getClassName()} <br><p>";
    }
}

class Admin extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class User extends Base {
    public function __construct($name) {
        $this->name = $name;
    }
}

class Guest extends Base {
    protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login();

$admin = new Admin('Helena');
echo $admin->login();

$user = new User('John Moore');
echo $user->login();