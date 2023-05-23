<?php

$outside_variable = "Esto es una variable global";

function my_function()
{
    echo $outside_variable;
}

my_function();


