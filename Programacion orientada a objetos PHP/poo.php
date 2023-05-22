<?php
include 'greet.php';
// require 'greet.php';

// es como requerir pero solo escoje una de las funciones declaradas
// require_once 'greet.php';


/*class User 
{
    public $type;
}

class Admin
{
    public function greet()
    {
        return "Hola Administrador";
    }

}

$user = new User;
$user->type = new Admin;
echo $user->type->greet();

*/

echo greet('Jordan', 'Cómo estas....');