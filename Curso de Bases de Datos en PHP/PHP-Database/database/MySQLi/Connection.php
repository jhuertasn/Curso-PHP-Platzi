<?php

namespace Database\MySQLi;

class Connection
{
    private static $instance;

    private $connection;

    private function __construct(){
        $this->make_connection();
    }

    public static function getInstance(){
        if (!self::$instance instanceof self)
            self::$instance = new self();
        return self::$instance;
    }

    public function get_database_instance(){
        return $this->connection;
    }

    private function make_connection()
    {
        $server ="localhost";
        $database ="finanzas_personales";
        $username="root";
        $password="";

        $mysqli = new \mysqli($server,$username,$password,$database);
        if ($mysqli->connect_errno) {
            die("Fallo la conexión: {$mysqli->connect_error}");
        }

        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();


        $this->connection = $mysqli;
    }
}


/*

$server ="localhost";
$database ="finanzas_personales";
$username="root";
$password="";

//Forma procedural
//$msqli = mysqli_connect($server,$username,$password, $database);

//forma orientada a objetos

$mysqli = new \mysqli($server,$username,$password,$database);

//comprobar conexión de manera procedural
/*
if (!$msqli) {
    die("Fallo la conexión: ".mysqli_connect_error());
}*/

//comprobar conexión de manera orientada a objetos

/*

if ($mysqli->connect_errno) {
    die("Fallo la conexión: {$mysqli->connect_error}");
}

//esto nos ayuda a poder usar cualquier caracter en nuestras consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);

*/



