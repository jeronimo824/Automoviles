<?php

    include("../Config/Conexion.php");
    
    $modelos = $_POST['modelos'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO modelo(nombre_modelo,Stock_modelo,precio_unidad,fk_marca) VALUES('$modelos','$stock','$precio','$marca')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado == 1){
        $sql = "INSERT INTO ventas(cantidad_venta) VALUES('$cantidad')";
        $resultado2 = mysqli_query($conexion, $sql);
        echo "exito";
    }else{
        echo "datos no insertados";
    }

?>