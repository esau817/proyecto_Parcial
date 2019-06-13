<!DOCTYPE html>
<html>
<head>
 <title>Usuarios</title>
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
  <th>Id</th> 
  <th>Usuario</th> 
  <th>Contraseña</th>
 </tr>
 <?php
include("config.php");

//Hacemos la consulta a la BD para extraer la información
  $sql = "SELECT id, username, passcode FROM my_user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

//Imprimimos la tabla
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["passcode"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();

?>
<h1><a href="users_full.php">Ver datos completos</a></h1>
<h1><a href="admin_welcome.php">Volver</a></h1>
</table>
</body>
</html>