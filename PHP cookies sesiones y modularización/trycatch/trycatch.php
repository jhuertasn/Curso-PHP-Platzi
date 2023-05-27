<?php

try{
    $resultado = 20/0;
    echo $resultado;

}catch(Throwable $e){

    //echo $e->getMessage();

    echo "!Ups¡ algo salio mal con tu división";

}

echo "<br>";

echo "esto pasa sí o sí";