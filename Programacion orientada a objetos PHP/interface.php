<?php

class Taxi
{
    public $matricula;

    public function __construct($matricula)
    {
        $this->matricula = $matricula;
    }
    
    public function viajar($inicio, $destino)
    {
        return "Se ha trasladado desde $inicio hasta $destino";
    }

}


class Person 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function solicitarTraslado(Taxi $taxi, $lugarInicio, $lugarDestino)    
    {
        echo "$this->name ha solicitado servicio de traslado del vehículo $taxi->matricula</br>";
        echo $taxi->viajar($lugarInicio, $lugarDestino);
    }
}

$taxi = new Taxi("ABC123");
$persona = new Person("José");
$persona->solicitarTraslado($taxi,"Av Fuerzas Armadas", "Av Baralt");