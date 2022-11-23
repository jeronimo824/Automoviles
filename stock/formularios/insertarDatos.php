<?php

    include("../Config/Conexion.php");
    
    
    $precio = $_POST['precio'];

    $sql = "INSERT INTO modelo(precio_unidad) VALUES('$precio')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado === TRUE){
        header("location:../index.php");
    }else{
        echo "datos no insertados";
    }

?>