<?php

class Dummy
{
    public $un_valor = "Cualquier cosa";
}

function suma(Dummy $dummy): string
{
    return $dummy->un_valor;
}

echo suma(new Dummy) . PHP_EOL;