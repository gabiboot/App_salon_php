<?php

//conexion bbdd
$db = mysqli_connect('localhost', 'root', 'hola', 'contacto');

if (!$db){
    echo"Hubo un error";
    exit;
}