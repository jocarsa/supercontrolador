<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    include "clase.php";
    
    $uncliente = new Controlador();
    echo $uncliente->buscar($conexion,"clientes",1);
    
    $muchosclientes = new Controlador();
    echo $muchosclientes->listar($conexion,"clientes");

    $unproducto = new Controlador();
    echo $unproducto->buscar($conexion,"productos",2);
    
    $muchosproductos = new Controlador();
    echo $muchosproductos->listar($conexion,"productos");

?>