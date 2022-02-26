<?php


require 'Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
	require 'conexionformatos.php'; //Agregamos la conexión
	
	//Variable con el nombre del archivo
	$nombreArchivo = './documentosexcel/COS-DEPE-P-02-F-01 2022.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();


    $result = mysqli_query($conn,"SELECT * FROM f_01_info_gral WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);

    $objPHPExcel->getActiveSheet()->setCellValue('B5', $row['estado']);
    $objPHPExcel->getActiveSheet()->setCellValue('G5', $row['evento']);
    

    $var1 = $row['tipo_evento'];
    $var2 = "Brote";
    $var3 = "AP";
    $var4 = "EOA";
    $var5 = "DN";
    $var6 = "H";

    if (strcmp($var1, $var2) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('C6', "X");
    }

    if (strcmp($var1, $var3) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('F6', "X");
    }
    if (strcmp($var1, $var4) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('J6', "X");
    }
    if (strcmp($var1, $var5) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('C7', "X");
    }

    if (strcmp($var1, $var6) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('F7', "X");
    }

    $objPHPExcel->getActiveSheet()->setCellValue('P6', $row['no_poblacion_afectada']);
    $objPHPExcel->getActiveSheet()->setCellValue('R5', $row['fecha_ocurrencia']);
    $objPHPExcel->getActiveSheet()->setCellValue('P7', $row['fecha_informe']);
    $objPHPExcel->getActiveSheet()->setCellValue('A10', $row['municipio_af']);
    $objPHPExcel->getActiveSheet()->setCellValue('C10', $row['no_af_municipio']);
    $objPHPExcel->getActiveSheet()->setCellValue('H10', $row['localidades_af']);
    $objPHPExcel->getActiveSheet()->setCellValue('L10', $row['hab_af_loc']);
    $objPHPExcel->getActiveSheet()->setCellValue('O10', $row['ref_temp']);
    $objPHPExcel->getActiveSheet()->setCellValue('Q10', $row['pob_ref']);
    $objPHPExcel->getActiveSheet()->setCellValue('A15', $row['dos_localidad_af']);
    $objPHPExcel->getActiveSheet()->setCellValue('C15', $row['dos_productos_servicios']);
    $objPHPExcel->getActiveSheet()->setCellValue('H15', $row['dos_establacimientos_salud']);
    $objPHPExcel->getActiveSheet()->setCellValue('M15', $row['dos_es_sus_toxic']);
    $objPHPExcel->getActiveSheet()->setCellValue('P15', $row['dos_escuelas']);
    $objPHPExcel->getActiveSheet()->setCellValue('R15', $row['dos_otros_giros']);

    $sino1 = $row['tres_01_sino'];
    $sino2 = $row['tres_02_sino'];
    $sino3 = $row['tres_03_sino'];
    $sino4 = $row['tres_04_sino'];
    $sino5 = $row['tres_05_sino'];
    $sino6 = $row['tres_06_sino'];
    $si = "Si";
    $no = "No";
   
    if (strcmp($sino1, $si) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('L21', "X");
    }else{
        $objPHPExcel->getActiveSheet()->setCellValue('M21', "X");
    }

    
   
   
    if (strcmp($sino2, $si) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('L22', "X");
    }
    else
    {
        $objPHPExcel->getActiveSheet()->setCellValue('M22', "X");
    }

    if (strcmp($sino3, $si) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('L23', "X");
    }else{
        $objPHPExcel->getActiveSheet()->setCellValue('M23', "X");
    }

    if (strcmp($sino4, $si) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('L24', "X");
    }else{
        $objPHPExcel->getActiveSheet()->setCellValue('M24', "X");
    }

    if (strcmp($sino5, $si) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('L25', "X");
    }else{

        $objPHPExcel->getActiveSheet()->setCellValue('M25', "X");
    }

    if (strcmp($sino6, $si) === 0){
        $objPHPExcel->getActiveSheet()->setCellValue('L26', "X");
    }else{
        $objPHPExcel->getActiveSheet()->setCellValue('M26', "X");
    }



    $objPHPExcel->getActiveSheet()->setCellValue('N21', $row['tres_01_municipio']);
    $objPHPExcel->getActiveSheet()->setCellValue('N22', $row['tres_02_municipio']);
    $objPHPExcel->getActiveSheet()->setCellValue('N23', $row['tres_03_municipio']);
    $objPHPExcel->getActiveSheet()->setCellValue('N24', $row['tres_04_municipio']);
    $objPHPExcel->getActiveSheet()->setCellValue('N25', $row['tres_05_municipio']);
    $objPHPExcel->getActiveSheet()->setCellValue('N26', $row['tres_06_municipio']);

    $objPHPExcel->getActiveSheet()->setCellValue('P21', $row['tres_01_observacion']);
    $objPHPExcel->getActiveSheet()->setCellValue('P22', $row['tres_02_observacion']);
    $objPHPExcel->getActiveSheet()->setCellValue('P23', $row['tres_03_observacion']);
    $objPHPExcel->getActiveSheet()->setCellValue('P24', $row['tres_04_observacion']);
    $objPHPExcel->getActiveSheet()->setCellValue('P25', $row['tres_05_observacion']);
    $objPHPExcel->getActiveSheet()->setCellValue('P26', $row['tres_06_observacion']);


   
    $objPHPExcel->getActiveSheet()->setCellValue('D32', $row['cuatro_01_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('D33', $row['cuatro_02_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('D34', $row['cuatro_03_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('D35', $row['cuatro_04_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('D36', $row['cuatro_05_req']);

    $objPHPExcel->getActiveSheet()->setCellValue('M32', $row['cuatro_06_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('M33', $row['cuatro_07_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('M34', $row['cuatro_08_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('M35', $row['cuatro_09_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('M36', $row['cuatro_10_req']);

    $objPHPExcel->getActiveSheet()->setCellValue('R32', $row['cuatro_11_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('R33', $row['cuatro_12_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('R34', $row['cuatro_13_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('R35', $row['cuatro_14_req']);
    $objPHPExcel->getActiveSheet()->setCellValue('R36', $row['cuatro_15_req']);

    $objPHPExcel->getActiveSheet()->setCellValue('F32', $row['cuatro_01_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('F33', $row['cuatro_02_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('F34', $row['cuatro_03_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('F35', $row['cuatro_04_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('F36', $row['cuatro_05_uti']);

    $objPHPExcel->getActiveSheet()->setCellValue('N32', $row['cuatro_06_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('N33', $row['cuatro_07_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('N34', $row['cuatro_08_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('N35', $row['cuatro_09_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('N36', $row['cuatro_10_uti']);

    $objPHPExcel->getActiveSheet()->setCellValue('S32', $row['cuatro_11_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('S33', $row['cuatro_12_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('S34', $row['cuatro_13_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('S35', $row['cuatro_14_uti']);
    $objPHPExcel->getActiveSheet()->setCellValue('S36', $row['cuatro_15_uti']);


    $objPHPExcel->getActiveSheet()->setCellValue('C38', $row['nombre_cargo']);













    //Aqui se guarda el excel AAAAAAAAAA---------------------------------

    $name="F-011-";
    $fecha= date("Y-m-d H:i:s");
    $extencion=".xlsx";
 
    $nombre_archivo=$name."".$fecha."".$extencion;
    $filename = $nombre_archivo;

    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Content-Type: application/force-download');
    header('Content-Type: application/octet-stream');
    header('Content-Type: application/download');
    header("Content-Disposition: attachment;filename={$filename}");
    header('Content-Transfer-Encoding: binary');
    
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter->setOffice2003Compatibility(true);
    ob_end_clean();
    $objWriter->save('php://output');
  
	
?>