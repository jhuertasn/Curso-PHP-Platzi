<?php
declare(strict_types=1);
//tipos de datos escalares
function calcular_area_triangulo(int $base, int $altura, string $nombre)
{
    return "Hola $nombre, el área de tu triángulo es : " . ($base*$altura) / 2 . "!";
}

echo calcular_area_triangulo(10,20,"Jordan");
