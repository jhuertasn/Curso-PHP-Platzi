<?php
function get_person_name($name, $age, $country)
{
    echo "Tengo la información de $name, tiene $age años y vive en $country";
}

$res_edad = 18;
$res_country = "Prusia";

get_person_name(
    age: $res_edad,
    country: $res_country,
    name: "Edgar Brotjovick",
);

echo "\n";