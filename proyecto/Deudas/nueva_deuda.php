<!DOCTYPE html>
<html lang="es">
<head>
<center>
<meta charset="UTF-8">
<title>Agregar nueva deuda</title>
</head>
<body>
<form action="nueva_deuda_process.php" method="post">
    <p>
        <label for="id_deudor">ID Usuario</label>
        <input type="text" name="id_deudor" id="id_deudor">
    </p>
    <p>
        <label for="deuda">Deuda</label>
        <input type="number" name="deuda" id="deuda">
    </p>
    <input type="submit" value="Submit">

<h1><a href = "payments.php">Volver</a><h1>
</form>
<center>
</body>
</html>