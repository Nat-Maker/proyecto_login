<?php

    $conexion = new mysqli ("localhost","root","","universidad"); 
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion"; 
    }
?>