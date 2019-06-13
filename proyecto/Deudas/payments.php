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
  <th>ID Usuario deudor</th> 
  <th>Usuario deudor</th> 
  <th>Deuda</th>
  <th>Fecha Pago</th>
 </tr>

 <?php
include("../config.php");

//Hacemos la consulta a la BD para extraer la información
  
$sql = "SELECT deudas.id, deudas.id_deudor, my_user.username, FORMAT(deudas.deuda, 2), 
deudas.fecha FROM deudas join my_user on deudas.id_deudor = my_user.id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

//Imprimimos la tabla
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["id_deudor"]. "</td><td>" . $row["username"]. "</td><td>"
  . $row["FORMAT(deudas.deuda, 2)"]. "</td><td>" . $row["fecha"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<h1><a href = "nueva_deuda.php">Agregar nueva deuda</a></h1>
<h1><a href = "buscar_pago.php">Buscar pago por fecha</a></h1>
<h1><a href = "cobrar_deuda.php">Agregar pago a deuda</a></h1>
<h2><a href = "../admin_welcome.php">Volver</a></h2>
</table>
</body>
</html>