<?php

try {
    $pet = readline("Que quieres adoptar?");
    if ($pet != "michi" && $pet != "conejo") {
        throw new Exception("Lo sentimos, no tenemos $pet en el centro de adopcion");
    } else {
        echo "Felicidades por tu nuevo $pet";
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}