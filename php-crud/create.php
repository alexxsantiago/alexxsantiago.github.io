<?php
require_once "connection.php";

if(isset($_POST['save']))
{    

     $nombre = $_POST['nombre'];
     $descripcion = $_POST['descripcion'];
     $fecha = $_POST['fecha'];
     $sql = "INSERT INTO actividades (nombre,descripcion,fecha)
     VALUES ('$nombre','$descripcion','$fecha')";
     if (mysqli_query($conn, $sql)) {
        header("location: actividades.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <?php include "head.php"; ?>
</head>
<body>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Creacion de actividad</h2>
                    </div>
                    <p>Para registrar una actividad, debes contestar el siguiente formulario</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="nombre" name="nombre" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <div class="form-group ">
                            <label>descripcion</label>
                            <input type="descripcion" name="descripcion" class="form-control" value="" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="text" name="fecha" class="form-control" value="" maxlength="12" required="">
                        </div>

                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="actividades.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>

            </div> 
               
        </div>

</body>
</html>
