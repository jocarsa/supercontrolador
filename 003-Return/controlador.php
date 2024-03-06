<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    function controlador($conexion,$tabla){
        // Quiero averiguar el modelo de datos concreto de una tabla cualquiera
        $peticion = "SHOW COLUMNS FROM ".$tabla.";";
        $resultado = mysqli_query($conexion,$peticion);
        $cadena = "<table><tr>";
        while($fila = mysqli_fetch_assoc($resultado)){
            $cadena .= "<th>".$fila['Field']."</th>";
        }
        $cadena .= "</tr>";
        $cadena .= "</table>";
        return $cadena;
    }

    echo controlador($conexion,"pedidos");

?>