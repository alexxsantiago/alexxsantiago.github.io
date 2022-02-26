<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
    // Le doy la bienvenida al usuario.
    echo 'Bienvenido <strong>' . $_SESSION['email'] . '</strong>, <a href="cerrar-sesion.php">cerrar sesión</a>';
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: index.php"); 
  }
?>







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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EDAS APP|Crear Actividad</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
   
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
        <style>
            html, body {
                height: 100%;
                margin: 0;
            }
            .leaflet-container {
                height: 400px;
                width: 600px;
                max-width: 100%;
                max-height: 100%;
            }

            body { background: #CCD1D1 !important; }
        </style>
        
        <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

    
</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="principal_admin.php">EDAS APP</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Busqueda" aria-label="Busqueda" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       <!--  <a class="dropdown-item" href="#!">Opciones</a></li>
                        <li><a class="dropdown-item" href="#!">Actividades</a></li>
                        <li><hr class="dropdown-divider" /></li>--> <li>
                         
                        <li><a class="dropdown-item" href="cerrar-sesion.php">Desconectar cuenta</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="  sb-sidenav accordion sb-sidenav-dark bg-gradient bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="principal_admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cat"></i></div>
                                Pagina inicial
                            </a>
                            <div class="sb-sidenav-menu-heading">Herramientas</div>
                            <a class="nav-link" href="actividades.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                                Registro de Actividades
                            </a>
                            <a class="nav-link" href="Recursos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-download"></i></div>
                                Descargas
                            </a>



                            <div class="sb-sidenav-menu-heading">Formatos</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Llenado de formatos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="f-01.php">F-01</a>
                                <a class="nav-link" href="401.html">F-02</a>
                                <a class="nav-link" href="401.html">F-03</a>
                                <a class="nav-link" href="401.html">F-04</a>
                                <a class="nav-link" href="401.html">F-05</a>
                                <a class="nav-link" href="401.html">F-06</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Consulta de datos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
   
                                       
                                        
                                    </a>
                                    <a class="nav-link" href="401.html">F-01</a>
                                <a class="nav-link" href="401.html">F-02</a>
                                <a class="nav-link" href="401.html">F-03</a>
                                <a class="nav-link" href="401.html">F-04</a>
                                <a class="nav-link" href="401.html">F-05</a>
                                <a class="nav-link" href="401.html">F-06</a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        
                  
                                        </nav>
                                    </div>
                                   
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Loggeado como:</div>
                        Admin
                    </div>
                </nav>
            </div>


<!--aqui termina las opciones de la slidebar-->
<div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                       <!-- <h1 class="mt-4">Pagina inicial</h1>-->
                        <img class="img-fluid shadow-sm bounce animated" src="assets/img/ConstSESVERVeracruzRGB2.png">


<div class="container">




<div class="row"style="width: auto; margin: auto auto;">
                <div class="col-lg-10" style="width: auto; margin: auto auto;">
                    <div class="card mb-6" style="width: auto; margin: auto auto;">
                        <div class="card-header" style="width: auto; margin: auto auto;">
                            Registro de actividades
                        </div>
                        <div class="card-body">


<p>Para registrar una actividad, debes contestar el siguiente formulario</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>Nombre</label>
        <input type="nombre" name="nombre" class="form-control" value="" maxlength="50" required="">
    </div>
    <div class="form-group ">
        <label>descripcion</label>
        <input type="descripcion" name="descripcion" class="form-control" value="" maxlength="150" required="">
    </div>
    <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="fecha" class="form-control" value="" maxlength="12" required="">
    </div>
<p> </p>
    <input type="submit" class="btn btn-success" name="save" value="Guardar">
    <a href="actividades.php" class="btn btn-danger">Cancelar</a>
</form>

    </div>












        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>








