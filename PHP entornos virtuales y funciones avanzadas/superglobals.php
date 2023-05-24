<?php

/*
$micho = "que bonito michi";

echo "<pre>";
var_dump($GLOBALS);
echo "</pre>";
*/

function local_scope(){
    echo $_GET["michi"];
 }

 local_scope();