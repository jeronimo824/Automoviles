<?php 

    $conexion = mysqli_connect('localhost','root','','autos');

    $v1 = $_POST['v1'];
    

    $sqlTabla1 = "INSERT INTO marca (nombre_marca) VALUES('$v1')";

    $ejecutado = mysqli_query($conexion,$sqlTabla1);

    if($ejecutado == 1){
        echo "datos insertados";
    }else{
        echo "datos incorrectos";
    }
?>