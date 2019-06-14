<?php
include("../config.php");
include("nueva_deuda.php");
 
 
$id_deudor = mysqli_real_escape_string($conn, $_REQUEST['id_deudor']);
$deuda = mysqli_real_escape_string($conn, $_REQUEST['deuda']);
 
$sql = "INSERT INTO deudas (id_deudor, deuda) VALUES ('$id_deudor', '$deuda')";
$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    header('location: payments.php');
} else{
    echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
?>