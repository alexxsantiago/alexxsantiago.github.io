<?php

require_once "conexionformatos.php";

$db_name="formatos";
$db_table_name="f_01_info_gral";


if(isset($_POST['save']))
{    
$estado = $_POST['estado'];
$evento = $_POST['evento'];
$tipo_evento = $_POST['tipo_evento'];
$no_poblacion_afectada = $_POST['no_poblacion_afectada'];
$fecha_ocurrencia =$_POST['fecha_ocurrencia'];
$fecha_informe=$_POST['fecha_informe'];
$municipio_af=$_POST['municipio_af'];
$no_af_municipio=$_POST['no_af_municipio'];
$localidades_af=$_POST['localidades_af'];
$hab_af_loc=$_POST['hab_af_loc'];
$ref_temp=$_POST['ref_temp'];
$pob_ref=$_POST['pob_ref'];



$establecimientos_sustancias=$_POST['establecimientos_sustancias'];
$escuelas=$_POST['escuelas'];
$otros_giros=$_POST['otros_giros'];


$dos_localidad_af=$_POST['dos_localidad_af'];
$dos_productos_servicios=$_POST['dos_productos_servicios'];
$dos_establacimientos_salud=$_POST['dos_establacimientos_salud'];
$dos_es_sus_toxic=$_POST['dos_es_sus_toxic'];
$dos_escuelas=$_POST['dos_escuelas'];
$dos_otros_giros=$_POST['dos_otros_giros'];

$tres_01_sino=$_POST['tres_01_sino']; 
$tres_01_municipio=$_POST['tres_01_municipio']; 
$tres_01_observacion=$_POST['tres_01_observacion']; 
$tres_02_sino=$_POST['tres_02_sino']; 
$tres_02_municipio=$_POST['tres_02_municipio']; 
$tres_02_observacion=$_POST['tres_02_observacion']; 
$tres_03_sino=$_POST['tres_03_sino']; 
$tres_03_municipio=$_POST['tres_03_municipio']; 
$tres_03_observacion=$_POST['tres_03_observacion']; 
$tres_04_sino=$_POST['tres_04_sino']; 
$tres_04_municipio=$_POST['tres_04_municipio']; 
$tres_04_observacion=$_POST['tres_04_observacion']; 
$tres_05_sino=$_POST['tres_05_sino']; 
$tres_05_municipio=$_POST['tres_05_municipio']; 
$tres_05_observacion=$_POST['tres_05_observacion']; 
$tres_06_sino=$_POST['tres_06_sino']; 
$tres_06_municipio=$_POST['tres_06_municipio']; 
$tres_06_observacion=$_POST['tres_06_observacion'];

$cuatro_01_req=$_POST['cuatro_01_req'];
$cuatro_01_uti=$_POST['cuatro_01_uti'];
$cuatro_02_req=$_POST['cuatro_02_req'];
$cuatro_02_uti=$_POST['cuatro_02_uti'];
$cuatro_03_req=$_POST['cuatro_03_req'];
$cuatro_03_uti=$_POST['cuatro_03_uti'];
$cuatro_04_req=$_POST['cuatro_04_req'];
$cuatro_04_uti=$_POST['cuatro_04_uti'];
$cuatro_05_req=$_POST['cuatro_05_req'];
$cuatro_05_uti=$_POST['cuatro_05_uti'];
$cuatro_06_req=$_POST['cuatro_06_req'];
$cuatro_06_uti=$_POST['cuatro_06_uti'];
$cuatro_07_req=$_POST['cuatro_07_req'];
$cuatro_07_uti=$_POST['cuatro_07_uti'];
$cuatro_08_req=$_POST['cuatro_08_req'];
$cuatro_08_uti=$_POST['cuatro_08_uti'];
$cuatro_09_req=$_POST['cuatro_09_req'];
$cuatro_09_uti=$_POST['cuatro_09_uti'];
$cuatro_10_req=$_POST['cuatro_10_req'];
$cuatro_10_uti=$_POST['cuatro_10_uti'];
$cuatro_11_req=$_POST['cuatro_11_req'];
$cuatro_11_uti=$_POST['cuatro_11_uti'];
$cuatro_12_req=$_POST['cuatro_12_req'];
$cuatro_12_uti=$_POST['cuatro_12_uti'];
$cuatro_13_req=$_POST['cuatro_13_req'];
$cuatro_13_uti=$_POST['cuatro_13_uti'];
$cuatro_14_req=$_POST['cuatro_14_req'];
$cuatro_14_uti=$_POST['cuatro_14_uti'];
$cuatro_15_req=$_POST['cuatro_15_req'];
$cuatro_15_uti=$_POST['cuatro_15_uti'];

$nombre_cargo=$_POST['nombre_cargo'];



$sql = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`estado` , `evento` , `tipo_evento` ,
 `no_poblacion_afectada`, `fecha_ocurrencia`, `fecha_informe`, `municipio_af`, `no_af_municipio`,
 `localidades_af`, `hab_af_loc`, `ref_temp`, `pob_ref`,`establecimientos_sustancias`, `escuelas`, `otros_giros`, `dos_localidad_af`, 
 `dos_productos_servicios`, `dos_establacimientos_salud`, `dos_es_sus_toxic`, `dos_escuelas`, 
 `dos_otros_giros`, `tres_01_sino`, `tres_01_municipio`, `tres_01_observacion`, `tres_02_sino`, 
 `tres_02_municipio`, `tres_02_observacion`, `tres_03_sino`, `tres_03_municipio`, `tres_03_observacion`, 
 `tres_04_sino`, `tres_04_municipio`, `tres_04_observacion`, `tres_05_sino`, `tres_05_municipio`, 
 `tres_05_observacion`, `tres_06_sino`, `tres_06_municipio`, `tres_06_observacion`, `cuatro_01_req`, 
 `cuatro_01_uti`, `cuatro_02_req`, `cuatro_02_uti`, `cuatro_03_req`, `cuatro_03_uti`, `cuatro_04_req`,
  `cuatro_04_uti`, `cuatro_05_req`, `cuatro_05_uti`, `cuatro_06_req`, `cuatro_06_uti`, `cuatro_07_req`, 
  `cuatro_07_uti`, `cuatro_08_req`, `cuatro_08_uti`, `cuatro_09_req`, `cuatro_09_uti`, `cuatro_10_req`, 
  `cuatro_10_uti`, `cuatro_11_req`, `cuatro_11_uti`, `cuatro_12_req`, `cuatro_12_uti`, `cuatro_13_req`, 
  `cuatro_13_uti`, `cuatro_14_req`, `cuatro_14_uti`, `cuatro_15_req`, `cuatro_15_uti`, `nombre_cargo` )
  VALUES ("' . $estado . '", "' . $evento . '", "' . $tipo_evento . '", "' . $no_poblacion_afectada . '", "' . $fecha_ocurrencia . '",
   "' . $fecha_informe . '", "' . $municipio_af. '", "' . $no_af_municipio . '", "' . $localidades_af. '", "' . $hab_af_loc. '", "' . $ref_temp. '", "' . $pob_ref. '", "' . $establecimientos_sustancias . '",
    "' . $escuelas . '", "' . $otros_giros. '", "' . $dos_localidad_af. '", "' . $dos_productos_servicios. '", "' . $dos_establacimientos_salud. '",
     "' . $dos_es_sus_toxic. '", "' . $dos_escuelas. '", "' . $dos_otros_giros. '", "' . $tres_01_sino. '", "' . $tres_01_municipio. '", 
     "' . $tres_01_observacion. '", "' . $tres_02_sino. '", "' . $tres_02_municipio. '", "' . $tres_02_observacion. '" , "' . $tres_03_sino. '", 
     "' . $tres_03_municipio. '", "' . $tres_03_observacion. '", "' . $tres_04_sino. '", "' . $tres_04_municipio. '", "' . $tres_04_observacion. '",
      "' . $tres_05_sino. '", "' . $tres_05_municipio. '", "' . $tres_05_observacion. '", "' . $tres_06_sino. '", "' . $tres_06_municipio. '",
       "' . $tres_06_observacion. '"
       , "' . $cuatro_01_req. '", "' . $cuatro_01_uti. '", "' . $cuatro_02_req. '", "' . $cuatro_02_uti. '", "' . $cuatro_03_req. '"
       , "' . $cuatro_03_uti. '", "' . $cuatro_04_req. '", "' . $cuatro_04_uti. '", "' . $cuatro_05_req. '", "' . $cuatro_05_uti. '"
       , "' . $cuatro_06_req. '", "' . $cuatro_06_uti. '", "' . $cuatro_07_req. '", "' . $cuatro_07_uti. '", "' . $cuatro_08_req. '"
       , "' . $cuatro_08_uti. '", "' . $cuatro_09_req. '", "' . $cuatro_09_uti. '", "' . $cuatro_10_req. '", "' . $cuatro_10_uti. '"
       , "' . $cuatro_11_req. '", "' . $cuatro_11_uti. '", "' . $cuatro_12_req. '", "' . $cuatro_12_uti. '", "' . $cuatro_13_req. '"
       , "' . $cuatro_13_uti. '", "' . $cuatro_14_req. '", "' . $cuatro_14_uti. '", "' . $cuatro_15_req. '", "' . $cuatro_15_uti. '", "' . $nombre_cargo. '")';
 












if (mysqli_query($conn, $sql)) {
    header("location: ver_f_01.php");
    exit();
 } else {
    echo "Error: " . $sql . "
    " . mysqli_error($conn);
         }
         mysqli_close($conn);
    }




 
?>