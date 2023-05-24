<?php

function get_country_name_switch($country)
{
    $name = "";

    switch ($country) {
        case 'MX':
            $name = "México";
            break;

        case 'COL':
            $name = "Colombia";
            break;
        case 'EUA':
            $name = "Estados unidos de America";
            break;

        default:
            $name = "lo siento no conosco ese país";
            break;
    }

    return $name;
}

//estructura Macth
function get_country_name_match($country)
{
    return match($country){
        "MX"=>"México",
        "COL"=>"Colombia",
        "EUA"=>"Estados Unidos Americanos",
        default=>"Lo siento, no conozco ese país"
    };
}

echo get_country_name_match("MX");
