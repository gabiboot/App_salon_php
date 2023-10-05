<?php

//conexion bbdd
$db = mysqli_connect('localhost', 'root', 'hola', 'salon');

if (!$db){
    echo"Hubo un error";
    exit;
}