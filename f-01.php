

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
<?
require_once "registro_f_1.php"

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EDAS APP</title>
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

          /*  body { background: #CCD1D1 !important; }*/
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
        <a class="navbar-brand ps-3" href="index.php">EDAS APP</a>
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
                    <li><a class="dropdown-item" href="#!">Opciones</a></li>
                    <li><a class="dropdown-item" href="#!">Actividades</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Desconectar cuenta</a></li>
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
                                    <a class="nav-link" href="ver_f_01.php">F-01</a>
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
                       
                        <img class="img-fluid shadow-sm bounce animated" src="assets/img/ConstSESVERVeracruzRGB2.png">
          
                        <h1 class="mt-4"> </h1>


                        <div class="container">
  
                <p></p>
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Instructivo F-01</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <img class="img-fluid shadow-sm bounce animated" src="Formato 1.png">
                      <div class="modal-body">
                  
                         <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">CAMPO</th>
                              <th scope="col">DESCRIPCIÓN</th>
                            </tr>
                          </thead>
                          <tbody>
                           
                            <tr>
                              <th scope="row">EVENTO:</th>
                              <td>Identificar el nombre del evento o desastre suscitado 
                                (huracán, sismo, inundación, derrame de sustancias químicas, etcétera) indicando el nombre en su caso</td>
                            </tr>
                            <tr>
                              <th scope="row">TIPO DE EVENTO:</th>
                              <td>Seleccionar la situación en la que se encuentra el evento presentado, como alerta, evento, emergencia.</td>
                            </tr>
                          
                            <tr>
                              <th scope="row">FECHA DE OCURRENCIA:</th>
                              <td>Señalar la fecha en la que se origino el evento.</td>
                            </tr>

                            <tr>
                              <th scope="row">No. DE POBLACION AFECTADA:</th>
                              <td>Número de personas que sufrieron daño directo por el tipo de evento presentado</td>
                            </tr>

                            <tr>
                              <th scope="row">Alerta:</th>
                              <td>Se refiere a situación de búsqueda y/o retiro de productos que generen riesgo sanitario a la población</td>
                            </tr>

                            <tr>
                              <th scope="row">Emergencia:</th>
                              <td>Situación de riesgos sanitarios a la población</td>
                            </tr>

                            <tr>
                              <th scope="row">H:</th>
                              <td>Hospitales</td>
                            </tr>

                            <tr>
                              <th scope="row">DN:</th>
                              <td>Desastres Naturales</td>
                            </tr>

                            <tr>
                              <th scope="row">Brote: </th>
                              <td>Se refiere a enfermedades transmitidas por alimentos y/o agua de importancia en la salud pública.</td>
                            </tr>

                            <tr>
                              <th scope="row">AP: </th>
                                  <td>Acciones preventivas</td>
                                   </tr>


                                   <tr>
                                    <th scope="row">EOA: </th>
                                        <td> Exposición a otros agentes</td>
                                         </tr>
                                         
                                         <tr>
                                          <th scope="row">FECHA DEL REPORTE:</th>
                                              <td>Señalar la fecha en la que se envía la información.</td>
                                               </tr>

                                               <tr>
                                        <th scope="row">NOMBRE DE LOS MUNICIPIOS AFECTADOS Y LA JURISDICCIÓN SANITARIA EN LA QUE SE INCLUYEN :</th>
                                             <td>Registrar el nombre de los municipios que se vieron afectados por el evento 
                                               y la Jurisdicción Sanitaria dentro de la cual se encuentran incluido</td>
                                             </tr>

                                             <tr>
                                              <th scope="row">NUMERO DE HABITANTES POR MUNICIPIO AFECTADO:</th>
                                                  <td>Registrar el número de habitantes en cada uno de los municipios afectados 
                                                    que se registraron en la columna anterior .</td>
                                                   </tr>

                                                   <tr>
                                                    <th scope="row">NOMBRE DE LAS LOCALIDADES AFECTADAS POR MUNICIPIO:</th>
                                                        <td>Registra el nombre de las localidades, comunidades o colonias 
                                                          que se vieron afectadas por municipio .</td>
                                                         </tr>

                                                         <tr>
                                                          <th scope="row">NUMERO DE HABITANTES AFECTADOS POR LOCALIDAD:</th>
                                                              <td>Registrar el número de habitantes que hayan sufrido algún daño en su persona o entorno, 
                                                                que este asociado a un riesgo sanitario que afecte la salud de la población de cada una de 
                                                                las localidades, comunidades o colonias que se registraron en la columna anterior.</td>
                                                               </tr>

                                                               <tr>
                                                                <th scope="row">NOMBRE Y UBICACIÓN DE LOS REFUGIOS TEMPORALES QUE ENTRARON  EN OPERACIÓN: </th>
                                                                    <td>Registrar los nombres y la ubicación de los albergues que hayan entrado en operación, 
                                                                      la ubicación debe incluir la localidad o colonia dentro de la que se encuentra, 
                                                                      el municipio al que pertenecen y la Jurisdicción Sanitaria que regula esa entidad.</td>
                                                                     </tr>

                                                                     <tr>
                                                                      <th scope="row">POBLACIÓN ALOJADA POR REFUGIO INSTALADO:</th>
                                                                          <td>Registrar el nombre de los albergues y la población que cada uno 
                                                                            recibió al inicio de la atención del evento.</td>
                                                                           </tr>
                                
                                                                           <tr>
                                                                            <th scope="row">INFORMACION GENERAL DE GIROS EXISTENTES DE GIROS EXISTENTES POR JURISDICCION Y/O LOCALIDAD AFECTADA:</th>
                                                                                <td>Identificar los establecimientos afectados por giro señalando en que Jurisdicción y/o 
                                                                                  localidades se encuentran, considerando para ello los ejemplos enunciativos enlistados, 
                                                                                  conforme al área de riesgos sanitarios que corresponda. </td>
                                                                                 </tr>  

                                                                                 <tr>
                                                                                  <th scope="row">LOCALIDAD:</th>
                                                                                      <td>Registrar el nombre de la(s) localidad(es) afectada(s) por el evento. </td>
                                                                                       </tr>
                                                                                       <tr>
                                                                                        <th scope="row">PURIFICADORAS DE AGUA:</th>
                                                                                            <td>Registrar el número de plantas purificadoras de agua que se tienen identificadas en el padrón de 
                                                                                              establecimientos de la jurisdicción sanitaria.</td>
                                                                                  
                                                                                            <tr>
                                                                                              <th scope="row">PLANTAS DE HIELO: </th>
                                                                                                  <td>Registrar el número de plantas que elaboran hielo para consumo humano las cuales se tienen identificadas en el 
                                                                                                    padrón de establecimientos de la jurisdicción sanitaria.</td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                    <th scope="row"> CENTRALES DE ABASTO:</th>
                                                                                                        <td>Registrar el número de Centrales de Abasto o Centros de distribución que existen en cada jurisdicción.</td>
                                                                                                         </tr>

                                                                                                         <tr>
                                                                                                          <th scope="row"> MERCADOS PÚBLICOS:</th>
                                                                                                              <td>Registrar el número de Mercados Públicos que existen en cada jurisdicción.</td>
                                                                                                               </tr>

                                                                                                               <tr>
                                                                                                                <th scope="row">TIENDAS DE AUTOSERVICIO: </th>
                                                                                                                    <td>Registra el número de Tiendas de autoservicio que se tienen identificadas en el padrón 
                                                                                                                      de establecimientos de la jurisdicción sanitaria.</td>
                                                                                                                     </tr>

                                                                                                                     <tr>
                                                                                                                      <th scope="row"> RASTROS: </th>
                                                                                                                          <td>Registra el número de Rastros que se tienen identificado en el padrón de establecimientos 
                                                                                                                            de la jurisdicción sanitaria.</td>
                                                                                                                           </tr>

                                                                                                                           <tr>
                                                                                                                            <th scope="row"> OTROS:</th>
                                                                                                                                <td>Registrar el tipo de giro que no se incluye dentro de los anteriores giros señalados, que pudiera generar un riesgo a la salud y requiera de atención por parte del área de Regulación sanitaria, 
                                                                                                                                  por ejemplo disposición de desechos, rellenos sanitarios, etcétera.</td>
                                                                                                                                 </tr>

                                                                                                                                 <tr>
                                                                                                                                  <th scope="row">AFECTACIÓN DE LA RED DE ABASTO DE AGUA :  </th>
                                                                                                                                      <td>Señalar si existen afectaciones a la red de abastecimiento de agua, esta afectación puede deberse a la ruptura de tuberías de agua potable, daño en bombas y 
                                                                                                                                        equipo de distribución. Indicar el municipio y la localidad de afectación.</td>
                                                                                                                                       </tr>

                                                                                                                                       <tr>
                                                                                                                                        <th scope="row"> INUNDACIÓN DE POZOS Y/O FUENTES DE ABASTECIMIENTO DE AGUA (INDICAR CUANTOS): </th>
                                                                                                                                            <td> Señalar si el evento origino la inundación de fuentes de abastecimientos de agua como son pozos, norias, ríos, etcétera y el número de estos. 
                                                                                                                                              Indicar el municipio y la localidad de afectación.</td>
                                                                                                                                             </tr>

                                                                                                                                             <tr>
                                                                                                                                              <th scope="row">AFECTACIÓN AL SUMINISTRO DE ENERGÍA ELÉCTRICA (HORAS) QUE PUDO ORIGINAR LA ALTERACIÓN DE ALIMENTOS PERECEDEROS:  </th>
                                                                                                                                                  <td> Señalar si el evento provocó el corte en suministro eléctrico, así como el tiempo que duro esta interrupción. Señalar las localidades o Municipios afectados. 
                                                                                                                                                    Indicar el municipio y la localidad de afectación.</td>
                                                                                                                                                   </tr>

                                                                                                                                                   <tr>
                                                                                                                                                    <th scope="row">DERRAME DE AGUAS NEGRAS: </th>
                                                                                                                                                        <td>Señalar si el evento causo el derrame de aguas negras provenientes de drenaje municipal o ríos de aguas negras. 
                                                                                                                                                          Indicar el municipio y la localidad de afectación.</td>
                                                                                                                                                         </tr>

                                                                                                                                                         <tr>
                                                                                                                                                          <th scope="row">ANIMALES MUERTOS:  </th>
                                                                                                                                                              <td>Señalar si el evento provocó la muerte de una cantidad considerable de animales.</td>
                                                                                                                                                               </tr>

                                                                                                                                                               <tr>
                                                                                                                                                                <th scope="row">OTROS: </th>
                                                                                                                                                                    <td>Señalar si el evento causo otros daños no especificados y que requiera atención por parte del área de Regulación Sanitaria.</td>
                                                                                                                                                                     </tr>

                                                                                                                                                                     <tr>
                                                                                                                                                                      <th scope="row">MATERIAL Y EQUIPO REQUERIDO:  </th>
                                                                                                                                                                          <td> Se debe señalar en cada uno de los renglones la cantidad de insumos requeridos y utilizados para la atención del evento, en caso de no necesitar alguno cancelar con una línea el espacio.</td>
                                                                                                                                                                           </tr>

                                                                                    <tr>
                                                                                  <th scope="row"> NOMBRE Y CARGO: </th>
                                                                                        <td> Anotar el nombre de quien realiza el llenado del formato.</td>
                                                                                   </tr>
                          </tbody>
                        </table>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Instructivo</a>

                <p></p>

<!------------------------------------------------ ESAPACIO DE CARDS  <div class="card-header">Header</div>------------------------------------------------------------------------------------------->
                               <div class="card text-dark bg-light mb-3" style="max-width: 90rem;">
                               <form id="regiration_form" novalidate action="registro_f_01.php" method="POST">   
                                <div class="card-header text-center">Formato 1. INFORMACIÓN GENERAL SOBRE EL EVENTO </div>
                                <p>    </p>
                                    <p>    </p>
                                <!-- 
                                <div class="card-body">
                                  <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               -->
                                                          
                                 <div class="row">
                                <div class="col-md-4">


                                   
                                <p>  Estado</p> 
                                     <p>    </p> <!-- ESAPACIO-->
                                     <p>    </p> <!-- ESAPACIO-->

                                     <input type="text" name="estado" class="form-control" value="" maxlength="50" required="">
                                    </select>
                                  </div>
                                    
                                  <div class="col-md-4">
                                    <p>Evento</p>
                                    <input type="text" name="evento" class="form-control" value="" maxlength="50" required="">
                                </div>
                               
                                <div class="col-md-4">
                                   
                                <!--<p>Tipo de evento</p>
                                    <input type="text" name="tipo_evento" class="form-control" value="" maxlength="50" required="">
                                
      -->
      <p>Tipo de evento</p>
      <select name = "tipo_evento" class="form-control">
            <option value = "0" selected>Seleccione</option>
            <option value = "Brote">Brote</option>
            <option value = "Ap">Ap</option>
            <option value = "EOA">EOA</option>
            <option value = "DN">DN</option>
            <option value = "H">H</option>
         </select>
                                
                                
                                
                                
                                
                                
                                
                                
                                  </div>
                                <div class="col-md-4">
                                    <p>No. Población afectada</p>
                                    <input type="text" name="no_poblacion_afectada" class="form-control" value="" maxlength="50" required="">
                                </div>
                    
                                <div class="col-md-4">
                                    <p>Fecha de ocurrencia</p>
                                    <p>
                                    <input type="date" name="fecha_ocurrencia" class="form-control" value="" maxlength="12" required="">
                                      </p>
                                  
                                </div>
                                <div class="col-md-4">
                                    <p>Fecha de informe</p>
                                    <p>
                                    <input type="date" name="fecha_informe" class="form-control" value="" maxlength="12" required="">
                                      </p>
                                  
                                </div>

                            </div>
                            <div class="row">           
                            <!-- ESAPACIO<span class="placeholder col-12 bg-success"></span>-->
                            <p></p>
                            <div class="col-md-11">
                                <p>Nombre de los Municipios Afectados y la Jurisdicción Sanitaria en la que se incluyen</p>
                                <input type="text" name="municipio_af" class="form-control" value="" maxlength="50" required="">
                            </div>

                            <div class="col-md-5">
                                <p>Número de Habitantes Afectados por Municipio </p>
                                <input type="text" name="no_af_municipio" class="form-control" value="" maxlength="50" required="">
                            </div>

                            <div class="col-md-6">
                                <p>Nombre de las Localidades afectadas por Municipio </p>
                                <input type="text" name="localidades_af" class="form-control" value="" maxlength="50" required="">
                            </div>
                              
                            
  <!---------------------->   <div class="col-md-6">
                                <p>Número de Habitantes Afectados por Localidad </p>
                                <input type="text" name="hab_af_loc" class="form-control" value="" maxlength="50" required="">
                            </div>

  <!---------------------->   <div class="col-md-6">
                                <p>Nombre y ubicación de los Refugios Temporales  que entraron en Operación </p>
                                <input type="text" name="ref_temp" class="form-control" value="" maxlength="50" required="">
                            </div>
<!---------------------->   <div class="col-md-6">
                            <p>Población Alojada por Refugio Instalado </p>
                                <input type="text" name="pob_ref" class="form-control" value="" maxlength="50" required="">
                            </div> 


                            <p></p>

                          <!--  <div class="col-md-6">
                                <p>Establecimientos que Manipulan Sustancias Tóxicas o Peligrosas</p>
                                <input type="text" name="establecimientos_sustancias" class="form-control" value="" maxlength="50" required="">
                            </div>

                            <div class="col-md-6">
                                <p>Escuelas</p>
                                <input type="text" name="Escuelas" class="form-control" value="" maxlength="50" required="">
                            </div>
                            <p></p>
                            <div class="col-md-4">
                                <p>Otros giros no considerados en los anteriores</p>
                                <input type="text" name="otros_giros" class="form-control" value="" maxlength="50" required="">
                            </div>-->
                         


                            <p></p>
                            <p></p>
      </div>                                 
     
                                 </div>
                                </div>
                              </div>
                             
                                    
                                  
                                  
                                  
                            



        <!----------------------------------------- ESAPACIO------------------------------------------------------------------------------------->
<!------------------------------------------------ ESAPACIO DE CARDS  <div class="card-header">Header</div>------------------------------------------------------------------------------------------->
                  <h1 class="mt-4"> </h1>
                      
                    <div class="container"> 

                   <div class="card text-dark bg-light mb-3" style="max-width: 90rem;">
                    <div class="card-header text-center">INFORMACIÓN GENERAL DE GIROS EXISTENTES POR JURISDICCIÓN Y/O LOCALIDAD AFECTADA</div>
                      <p>    </p>
                       <p>    </p>




                        <div class="row"> 
                         <div class="col-md-6">
                            <p>Localidad Afectada</p>
                             <input type="text" name="dos_localidad_af" class="form-control" value="" maxlength="50" required="">
                        </div>

                        <div class="col-md-6">
                            <p>Establecimientos de Productos y Servicios                           </p>
                             <input type="text" name="dos_productos_servicios" class="form-control" value="" maxlength="50" required="">
                        </div>

                         <p></p>
                        <div class="col-md-6">
                            <p>Establecimientos de Servicios de Salud y distribucion de insumos para la Salud</p>
                             <input type="text" name="dos_establacimientos_salud" class="form-control" value="" maxlength="50" required="">
                        </div>

                        <div class="col-md-6">
                            <p>Establecimientos que Manipulan Sustancias Tóxicas o Peligrosas</p>
                             <input type="text" name="dos_es_sus_toxic" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <p></p>
                        <div class="col-md-6">
                            <p>Escuelas</p>
                             <input type="text" name="dos_escuelas" class="form-control" value="" maxlength="50" required="">
                        </div>

                        <div class="col-md-6">
                            <p>Otros giros no considerados en los anteriores</p>
                             <input type="text" name="dos_otros_giros" class="form-control" value="" maxlength="50" required="">
                  
                      </div>
                    </div>
                </div>
                
     
           <!----------------------------------------- ESAPACIO------------------------------------------------------------------------------------->
<!------------------------------------------------ ESAPACIO DE CARDS  <div class="card-header">Header</div>------------------------------------------------------------------------------------------->
                <p></p>
                <p></p>
               
              <h1 class="mt-5"> </h1>
            
              <div class="container"> 
              
              <div class="card text-dark bg-light mb-3" style="max-width: 100rem;">
              <div class="card-header text-center">DESCRIPCION DE DAÑOS QUE PUEDAN AFECTAR LA SALUD DE LA POBLACIÓN </div>
                <p>    </p>
                 <p>    </p>
            
                 <table class="table table-responsive table-bordered">

                    <tr>
                      <th>Tipo de Afectación</th>
                      <th>Si/No</th>
                      <th>Municipio/Localidad</th>
                      <th>Observaciones</th>
                    </tr>
                  
                    <tr>
                      <td>Afectación de la red de abastecimiento de agua </td>
                      <td> 
                      <select name = "tres_01_sino" class="form-control">
                      <option value = "0" selected>Seleccione</option>
                      <option value = "Si">Si</option>
                      <option value = "No">No</option>
                     
                      </select>
                    
                    </td>
                      <td> <input type="text" name="tres_01_municipio" class="form-control" value="" maxlength="50" required=""></td>
                      <td> <input type="text" name="tres_01_observacion" class="form-control" value="" maxlength="50" required=""></tr>
 
                    <tr>
                      <td>Inundación de pozos y/o fuentes de abastecimiento de agua (indicar cuantos)</td>
                      <td> 
                      <select name = "tres_02_sino" class="form-control">
                      <option value = "0" selected>Seleccione</option>
                      <option value = "Si">Si</option>
                      <option value = "No">No</option>
                     
                      </select>
                    
                    </td>
                      <td> <input type="text" name="tres_02_municipio" class="form-control" value="" maxlength="50" required=""></td>
                      <td> <input type="text" name="tres_02_observacion" class="form-control" value="" maxlength="50" required=""></tr>
                    </tr>

                    <tr>
                      <td>Afectación al suministro de energía eléctrica (horas) que pudo originar 
                          la alteración de alimentos perecederos </td>
                          <td> 
                      <select name = "tres_03_sino" class="form-control">
                      <option value = "0" selected>Seleccione</option>
                      <option value = "Si">Si</option>
                      <option value = "No">No</option>
                     
                      </select>
                    
                    </td>
                      <td> <input type="text" name="tres_03_municipio" class="form-control" value="" maxlength="50" required=""></td>
                      <td> <input type="text" name="tres_03_observacion" class="form-control" value="" maxlength="50" required=""></tr>
                    </tr>
                  
                    <tr>
                      <td>Derrame de aguas negras</td>
                      <td> 
                      <select name = "tres_04_sino" class="form-control">
                      <option value = "0" selected>Seleccione</option>
                      <option value = "Si">Si</option>
                      <option value = "No">No</option>
                     
                      </select>
                    
                    </td>
                      <td> <input type="text" name="tres_04_municipio" class="form-control" value="" maxlength="50" required=""></td>
                      <td> <input type="text" name="tres_04_observacion" class="form-control" value="" maxlength="50" required=""></tr>
                    </tr>

                    <tr>
                        <td>Animales muertos</td>
                        <td> 
                      <select name = "tres_05_sino" class="form-control">
                      <option value = "0" selected>Seleccione</option>
                      <option value = "Si">Si</option>
                      <option value = "No">No</option>
                     
                      </select>
                    
                    </td>
                      <td> <input type="text" name="tres_05_municipio" class="form-control" value="" maxlength="50" required=""></td>
                      <td> <input type="text" name="tres_05_observacion" class="form-control" value="" maxlength="50" required=""></tr>
                      </tr>

                      <tr>
                        <td>Otros: inundaciones, lodos, afectaciones a hospitales y/o escuelas, etc. </td>
                        <td> 
                      <select name = "tres_06_sino" class="form-control">
                      <option value = "0" selected>Seleccione</option>
                      <option value = "Si">Si</option>
                      <option value = "No">No</option>
                     
                      </select>
                    
                    </td>
                      <td> <input type="text" name="tres_06_municipio" class="form-control" value="" maxlength="50" required=""></td>
                      <td> <input type="text" name="tres_06_observacion" class="form-control" value="" maxlength="50" required=""></tr>
                      </tr>
                  </table>

                  
  </div>
     </div>
        </div>
    















        <!----------------------------------------- ESAPACIO------------------------------------------------------------------------------------->
<!------------------------------------------------ ESAPACIO DE CARDS  <div class="card-header">Header</div>------------------------------------------------------------------------------------------->
<div class="container-fluid px-4">

    <h1 class="mt-4"> </h1>
  
    <div class="container">
        <div class="card text-dark bg-light mb-3" style="max-width: 90rem;">

            <div class="card-header text-center">MATERIAL Y EQUIPO REQUERIDO</div>
            <p>    </p>
                <p>    </p>

                <table class="table">

                    <tr>
                      <th>Material y Equipo</th>
                      <th>Cantidad</th>
                    </tr>
                  </table>


                    <table class="table table-responsive table-bordered">

                        <tr>
                          <th>  </th>
                          <th>Requerido</th>
                          <th>Utilizado</th>
                        </tr>
                      
                        <tr>
                          <td>Hipoclorito de calcio</td>
                          <td><input type="text" name="cuatro_01_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_01_uti" class="form-control" value="" maxlength="50" required=""></td>
                          
                        </tr>
                      
                        <tr>
                          <td>Plata coloidal</td>
                          <td><input type="text" name="cuatro_02_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_02_uti" class="form-control" value="" maxlength="50" required=""></td>
                        </tr>
    
                        <tr>
                          <td>Colilert</td>
                          <td><input type="text" name="cuatro_03_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_03_uti" class="form-control" value="" maxlength="50" required=""></td>
                        </tr>
                      
                        <tr>
                          <td>Cal</td>
                          <td><input type="text" name="cuatro_04_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_04_uti" class="form-control" value="" maxlength="50" required=""></td>
                        </tr>
    
                        <tr>
                          <td>Kit para determinar cloro</td>
                          <td><input type="text" name="cuatro_05_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_05_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>
    
                          <tr>
                            <td>Lámpara U.V.</td>
                          <td><input type="text" name="cuatro_06_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_06_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Incubadora bacteriológica</td>
                          <td><input type="text" name="cuatro_07_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_07_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Bombas para desalojo de lodos y agua</td>
                          <td><input type="text" name="cuatro_08_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_08_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Vehículos (indicar de que tipo y número)</td>
                          <td><input type="text" name="cuatro_09_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_09_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Equipos para cloración </td>
                          <td><input type="text" name="cuatro_10_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_10_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Generador de electricidad</td>
                          <td><input type="text" name="cuatro_11_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_11_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Cámara </td>
                          <td><input type="text" name="cuatro_12_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_12_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Teléfonos/ Radio de comunicación</td>
                          <td><input type="text" name="cuatro_13_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_13_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Plantas potabilizadoras de agua</td>
                          <td><input type="text" name="cuatro_14_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_14_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                          <tr>
                            <td>Otro equipo (especifique)</td>
                          <td><input type="text" name="cuatro_15_req" class="form-control" value="" maxlength="50" required=""></td>
                          <td><input type="text" name="cuatro_15_uti" class="form-control" value="" maxlength="50" required=""></td>
                          </tr>

                      </table>
                 



  <!--  En pantallas pequeñas aparecerá una columna que ocupará todo el ancho
y otra que ocupará la mitad de la pantalla <div class="row">
<div class="col-12 col-md-6">Material y equipo</div>
<div class="col-3 col-md-3">Cantidad</div>
</div>-->


  <!-- En pantallas medianas se indica que cada columna ocupe la mitad
del ancho disponible --->

   
 <!-- Como no se indica el tamaño para pantallas grandes las columnas
siempre ocuparán el 50% -->

    
</div>

<div class="col-md-12">
    <p>Nombre y Cargo</p>
    <input type="text" name="nombre_cargo" class="form-control" value="" maxlength="50" required="">
</div>
</div>
     
<p></p>
<p></p>
<div class="d-grid gap-2">
<input type="submit" class="btn btn-success" name="save" value="Guardar"> 
 </form>   

</div>




                
              
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                        
                  
                       
                </main>

                <p></p>
                <p></p>

                

               
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
