<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    include "clase.php";
    
    $controladorClientes = new Controlador();
    echo $controladorClientes->controladorBuscar($conexion,"clientes",1);

    $controladorProductos = new Controlador();
    echo $controladorProductos->controladorBuscar($conexion,"productos",2);

?>