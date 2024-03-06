<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    include "clase.php";
    
    $menu = new Controlador();
    echo $menu->tablas($conexion);

    $contenido = new Controlador();
    if(isset($_GET['id'])){
        $contenido->eliminar($conexion,$_GET['tabla'],$_GET['id']);
    }
    echo $contenido->listar($conexion,$_GET['tabla']);

?>