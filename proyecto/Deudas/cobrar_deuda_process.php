<?php
include("../config.php");
include("cobrar_deuda.php");
 
 
$id_deuda = mysqli_real_escape_string($conn, $_REQUEST['id_deuda']);
$pago = mysqli_real_escape_string($conn, $_REQUEST['pago']);
$fecha = mysqli_real_escape_string($conn, $_REQUEST['fecha']);
 
$sql = "UPDATE deudas SET pago = '$pago', fecha = '$fecha'
WHERE id = '$id_deuda'";
$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    header('location: deuda.php');
} else{
    echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
?>