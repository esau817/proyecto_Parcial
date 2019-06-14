<?php
include __DIR__ . '/../../config.php';
$count = 0;


if(isset($_POST['buscar_Pago']))
{
    $fechaInicio=$_POST['fechaInicio'];
    $fechaFin=$_POST['fechaFin'];
    $query=mysqli_query($conn,"SELECT pagos.id, pagos.id_deuda, FORMAT(pagos.pago, 2), (deudas.deuda-pagos.pago) as estado, 
    pagos.fecha FROM pagos join deudas on pagos.id_deuda = deudas.id
    WHERE pagos.fecha BETWEEN '$fechaInicio' AND '$fechaFin' ORDER BY id");
    $count=mysqli_num_rows($query);

}
?>
<!DOCTYPE html>
<html>
<head>
<center>
<h1>Búsqueda de pagos por fecha</h1>
</head>
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
<form method = "post">
<a> De </a>
<input type="date" name="fechaInicio">
<a> A </a>
<input type="date" name="fechaFin">
<p>
<input type="submit" name="buscar_Pago" value="Buscar Deuda">
</p>
<table>
<tr>
  <th>Id Deuda</th> 
  <th>ID Usuario deudor</th> 
  <th>Usuario deudor</th> 
  <th>Deuda</th>
  <th>Fecha Pago</th>
 </tr>
<?php
if($count == "0")
{
    echo '<h2>¡No se ha encontrado pago o deuda en esa fecha aún!</h2>';
}
else
{
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["id_deuda"]. "</td><td>" 
    . $row["FORMAT(pagos.pago, 2)"]. "</td><td>". $row["estado"]. "</td><td>" . $row["fecha"]. "</td></tr>" ;
    }
}
?>

</form>

<body>
<h1><a href = "my_payments.php">Volver</a><h1>

<style> 
      h1{ 
        color: green; 
        text-align: center; 
      } 
      div.one{ 
        margin-top: 40px; 
        text-align: center; 
      } 
      button{ 
        margin-top: 10px; 
      } 
    </style>

</table>
</center>
</body>
</html>