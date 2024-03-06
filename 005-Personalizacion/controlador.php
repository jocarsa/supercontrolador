<?php

    $conexion = mysqli_connect("localhost", "supercontrolador", "supercontrolador", "supercontrolador");

    function controlador($conexion,$tabla,$id){
        // Quiero averiguar el modelo de datos concreto de una tabla cualquiera
        $cadena = "<table>";
        /////////////////////////////////////////////// TITULOS DE LA TABLA
        $peticion = "SHOW COLUMNS FROM ".$tabla.";";
        $resultado = mysqli_query($conexion,$peticion);
        $cadena .= "<tr>";
        while($fila = mysqli_fetch_assoc($resultado)){
            $cadena .= "<th>".$fila['Field']."</th>";
        }
        $cadena .= "</tr>";
        ////////////////////////////////////////////// CONTENIDO DE LA TABLA
        $peticion = "SELECT * FROM ".$tabla." WHERE Identificador = ".$id.";";
        $resultado = mysqli_query($conexion,$peticion);    
        while($fila = mysqli_fetch_assoc($resultado)){
            $cadena .= "<tr>";
            foreach($fila as $clave=>$valor){
                $cadena .= "<td>".$valor."</td>";
            }
            $cadena .= "</tr>";
        }
        $cadena .= "</table>";   
        return $cadena;
    }

    echo controlador($conexion,"clientes",2);

?>