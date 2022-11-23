<?php
$conexion = mysqli_connect('localhost','root','','autos'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="text-center" style="background-color: black; color:white">LISTADO DE AUTOS</h1>
    </div>
    <div class="container">
    <table class="table">
        <tr>
            <td scope="col">Fecha_venta</td>
            <td scope="col">Marca</td>
            <td scope="col">Modelo</td>
            <td scope="col">Total_venta</td>
            <td scope="col">precio_unidad</td>
            <td scope="col">Cantidad venta</td>
        </tr>
        <?php
        $sql = "SELECT * FROM modelo m INNER JOIN marca mc INNER JOIN ventas v ON m.fk_marca = mc.id_marca AND v.fk_modelo = m.id_modelo";
        $result = mysqli_query($conexion,$sql);

        while($mostrar = mysqli_fetch_array($result)){
            
        
        ?>
        <tr>
            <td><?php echo $mostrar['fecha_venta']?></td>
            <td><?php echo $mostrar['nombre_marca']?></td>
            <td><?php echo $mostrar['nombre_modelo']?></td>
            <td><?php echo $mostrar['precio_unidad']?></td>
            <td><?php echo $mostrar['total_venta']?></td>
            <td><?php echo $mostrar['cantidad_venta']?></td>
        </tr>

        <?php 
        }
        ?>
    </table>
</body>
</html>