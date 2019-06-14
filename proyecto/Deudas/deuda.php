<!DOCTYPE html>
<html>
<head>
 <title>Deudas</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Id Deuda</th> 
  <th>Deuda</th>
  <th>Fecha Pago</th>
 </tr>

 <?php
session_start();
include("../config.php");

//Hacemos la consulta a la BD para extraer la información
  
$sql = "SELECT id, FORMAT(deuda, 2), fecha  from deudas 
 WHERE id_deudor='{$_SESSION['login_user']}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

//Imprimimos la tabla
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["FORMAT(deudas.deuda, 2)"]. "</td><td>" . $row["fecha"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<h1><a href = "cobrar_deuda.php">Hacer pagos</a></h1>
<h2><a href = "../user_welcome.php">Volver</a></h2>
</table>
</body>
</html>