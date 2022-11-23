<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-blank p-2 text-white text-center">Agregar producto</h1>
    <div class="container">
    <form action="insertarDatos.php" method="POST">
        
    <label  class="form-label">Modelo</label>
        <select class="form-select mb-3" name="marca">
        <option selected dissabled>Seleccionar modelo</option>
        <?php
            include("../Config/Conexion.php");

            $sql = $conexion->query("SELECT * FROM marca");
            while ($resultado = $sql->fetch_assoc()){
                echo "<option value='".$resultado['id_marca']."'>".$resultado['nombre_marca']."</option>";
            }
        ?>
        </select>
        <label>Marcas</label>
        <label  class="form-label">Modelo</label>
        <select class="form-select mb-3" name="modelos">
        <option selected dissabled>Seleccionar modelo</option>
        <?php
            include("../Config/Conexion.php");

            $sql = $conexion->query("SELECT * FROM modelo");
            while ($resultado = $sql->fetch_assoc()){
                echo "<option value='".$resultado['nombre_modelo']."'>".$resultado['nombre_modelo']."</option>";
            }
        ?>
        </select>
    <div class="mb-3">
        <label  class="form-label">Stock modelo</label>
        <input type="text" class="form-control" name="stock">
    </div>    
    <div class="mb-3">
        <label  class="form-label">Precio</label>
        <input type="text" class="form-control" name="precio">
    </div>
    <div class="mb-3">
        <label  class="form-label">Cantidad</label>
        <input type="text" class="form-control" name="cantidad">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger">Enviar</button>
        <a href="../index.php" class="btn btn-dark">Regresar</a>
    </div>
    
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>