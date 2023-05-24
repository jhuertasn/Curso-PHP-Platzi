<?php

/*
$cajero = 10;

$add_cajero = fn($add)=>$cajero +$add;

echo $add_cajero(20);

 */

$edades = [5,21,50,9,18];

//array_filter recorre el arreglo y compara con una funcion
/*
$mayores_de_edad = array_filter($edades,function($current){
    return $current >=18;
});
*/

$mayores_de_edad = array_filter($edades,fn($current)=> $current >=18);
;

print_r($mayores_de_edad);


// Yes
$where_am_i = "México";
$change_where_am_i = fn(&$where_am_i) => $where_am_i = "Colombia";
$change_where_am_i($where_am_i);

echo $where_am_i . PHP_EOL;   // Colombia
