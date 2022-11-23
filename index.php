<?php
$conexion = mysqli_connect('localhost','root','','autos'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Fecha_venta</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Cantidad_venta</td>
            <td>precio_unidad</td>
            <td>Total_venta</td>
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