



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EDAS APP|Ingreso</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
   <style>body { background: #CCD1D1 !important; }</style> 
        
    </head>
    <!--<body class="bg-primary">-->
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-fluid px-4">
                        <!-- <h1 class="mt-4">Pagina inicial</h1>-->
                         <img class="img-fluid shadow-sm bounce animated" src="assets/img/ConstSESVERVeracruzRGB2.png">
 
 
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ingreso</h3></div>
                                    <div class="card-body">
                                        

                                    <form class="form-horizontal" action="index.php" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="Usuario" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Contraseña" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <p> </p>
            <button type="submit" class="btn btn-dark">Entrar</button>
          </div>
        </div>
      
    
    
    
    
    
    
    </form>

 
                                    </div>
                                    <div class="card-footer text-center py-3">
                                       <!-- <div class="small"><a href="register.html">Need an account? Sign up!</a></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>

   














        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
  session_start();
 
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($email == 'admin' && $password == '1234'){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal_admin.php"); 
  }else{
    if($email == 'cliente' && $password == '1234'){
      // Guardo en la sesión el email del usuario.
      $_SESSION['email'] = $email;
       
      // Redirecciono al usuario a la página principal del sitio.
      header("HTTP/1.1 302 Moved Temporarily"); 
      header("Location: principal_user.php"); 
  } else{
    echo 'El email o password es incorrecto, <a href="admin.php">vuelva a intenarlo</a>.<br/>';
  }
}

?>