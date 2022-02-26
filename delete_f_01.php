<?php
include_once 'conexionformatos.php';
$sql = "DELETE FROM f_01_info_gral WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: ver_f_01.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>