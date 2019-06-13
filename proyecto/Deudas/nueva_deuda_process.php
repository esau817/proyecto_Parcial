<?php
include("../config.php");
include("nueva_deuda.php");
 
 
// Escape user inputs for security
$id_deudor = mysqli_real_escape_string($conn, $_REQUEST['id_deudor']);
$deuda = mysqli_real_escape_string($conn, $_REQUEST['deuda']);
$fecha = mysqli_real_escape_string($conn, $_REQUEST['fecha']);
 
// Attempt insert query execution
$sql = "INSERT INTO deudas (id_deudor, deuda, fecha) VALUES ('$id_deudor', '$deuda', '$fecha')";
$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    header('location: payments.php');
} else{
    echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>