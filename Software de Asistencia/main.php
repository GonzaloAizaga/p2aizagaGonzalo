<?php
    require_once ("conexion.php");
    
    $query = "SELECT * FROM alumnos";
    $STMT = $conex -> prepare($query) ;
    $STMT -> execute();
    $alumnos= $STMT -> fetchAll(); 
    
    print_r($alumnos);
?> 