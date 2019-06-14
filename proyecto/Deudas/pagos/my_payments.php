<!DOCTYPE html>
<html>
<head>
<center>
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
  <th>Id Pago</th> 
  <th>ID Deuda</th> 
  <th>Deuda inicial</th>
  <th>Pago</th> 
  <th>Deuda actual</th>
  <th>Fecha de pago</th>
 </tr>

 <?php
//include("./../config.php");
include __DIR__ . '/../../config.php';

//Hacemos la consulta a la BD para extraer la información
  
$sql = "SELECT pagos.id, pagos.id_deuda, deudas.deuda as actual, FORMAT(pagos.pago, 2),
(deudas.deuda-pagos.pago) as estado, pagos.fecha 
FROM pagos join deudas on pagos.id_deuda = deudas.id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

//Imprimimos la tabla
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["id_deuda"]. "</td><td>" . $row["actual"]. "</td><td>" 
    . $row["FORMAT(pagos.pago, 2)"]. "</td><td>". $row["estado"]. "</td><td>" . $row["fecha"]. "</td></tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<h1><a href = "buscar_pago_hecho.php">Buscar pago por fecha</a></h1>
<h1><a href = "../../admin_welcome.php">Volver</a></h1>

<style> 
   h1{
      text-align: center;
      vertical-align: middle;
      line-height: 90px;  
   }
   h1 {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
}
h1:active {
	position:relative;
	top:1px;
}
    </style> 
</table>
<center>
</body>
</html>