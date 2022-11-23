<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white">LISTADO DE PRODUCTOS</h1>
    </div>
    <div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Cantidad Venta</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require("Config/Conexion.php");

            $sql = $conexion -> query("SELECT * FROM modelo m INNER JOIN marca mc INNER JOIN ventas v ON m.fk_marca = mc.id_marca AND v.fk_modelo = m.id_modelo");
        
            while($resultado = $sql->fetch_assoc()){
                ?>

<tr>
            <th scope="row"><?php echo $resultado['id_modelo']?></th>
            <th scope="row"><?php echo $resultado['nombre_marca']?></th>
            <th scope="row"><?php echo $resultado['nombre_modelo']?></th>
            <th scope="row"><?php echo $resultado['cantidad_venta']?></th>
        </tr>
            <?php    
            }
            ?>
       
        
    </tbody>
    </table>
    <div class="container">
        <a href="formularios/AgregarForm.php" class="btn btn-success">Agregar</a>
    </div>
    </div>
    <div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>