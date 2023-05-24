<?php

/*
$numbers = [1,2,3,4];

//array map recorre uno por uno 
//luego se multiplica por 2
$numbers_by_2 = array_map(function ($current)
{
   return $current*2;
}, $numbers);

print_r($numbers_by_2);
 */

 //pasando una variable global a ambito local
 $michi = "MICHI";
 $change_michi_game = function() use ($michi){
    echo $michi;
 };
$change_michi_game();


?>