<?php

/*
$variable = "nombre";
$$variable = "Mr. Michi";

echo $nombre;

echo "\n";
 */

 /*
 $nombre = "Carlitos";
 $edad = 11;
 $comida_favorita = "Lasaña con berenjena";

 $variable = readline("Escribe que variable quieres conocer : ");

 echo $$variable;
*/

$dog = "woof!";
$cat = "meow!";

$horse = "Ijiji soy un caballo  soy un caballo!";

$option = 2;

switch($option){
    case 1:
        $var = "dog";
        break;
    case 2:
        $var = "horse";
        break;
}

echo $$var;
echo "\n";