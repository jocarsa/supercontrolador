<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    include "clase.php";
    
    $menu = new Controlador();
    echo $menu->tablas($conexion);



?>