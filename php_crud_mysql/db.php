<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

/* Comprobar la conexion
if(isset($conn)){
    echo "DB is connected";
}
*/
?>