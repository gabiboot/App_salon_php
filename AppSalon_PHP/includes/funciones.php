<?php

function obtenerservivios(){
try {
    //importar las credenciales
require 'database.php';


    //Consulta SQL

    $sql = "SELECT * FROM servicios;";

    //Realizar la consulta
   $consulta = mysqli_query($db, $sql);

    //Acceder a los resultados
echo "<pre>";
var_dump(mysqli_fetch_assoc($consulta));
echo "</pre>";

    //Cerrar la conexion
} catch (\Throwable $th) {
    var_dump($th);
}

}

obtenerservivios();