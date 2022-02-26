<?php
// Include database connection file
require_once "connection.php";

    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE actividades set  nombre='" . $_POST['nombre'] . "', descripcion='" . $_POST['descripcion'] . "' ,fecha='" . $_POST['fecha'] . "' WHERE id='" . $_POST['id'] . "'");
     
     header("location: actividades.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM actividades WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php include "head.php"; ?>
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Actualizacion de actividad</h2>
                    </div>
                    <p>Si desea actualizar su información, llene el siguiente formulario.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $row["nombre"]; ?>" maxlength="50" required="">
                            
                        </div>
                        <div class="form-group ">
                            <label>descripcion</label>
                            <input type="text" name="descripcion" class="form-control" value="<?php echo $row["descripcion"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>fecha</label>
                            <input type="text" name="fecha" class="form-control" value="<?php echo $row["fecha"]; ?>" maxlength="12"required="">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="actividades.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>  
        </div>
</body>
</html>