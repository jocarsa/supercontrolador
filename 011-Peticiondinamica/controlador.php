<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    include "clase.php";
    
    $menu = new Controlador();
    echo $menu->tablas($conexion);

    $contenido = new Controlador();
    echo $contenido->listar($conexion,$_GET['tabla']);

?>