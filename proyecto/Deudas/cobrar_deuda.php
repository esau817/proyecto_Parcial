<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pagar deuda</title>
</head>
<body>
<form action="cobrar_deuda_process.php" method="post">
    <p>
        <label for="id_deuda">ID Deuda</label>
        <input type="text" name="id_deuda" id="id_deuda">
    </p>
    <p>
        <label for="deuda">Pago</label>
        <input type="number" name="pago" id="pago">
    </p>
    <p>
        <label for="fecha">Fecha de Pago</label>
        <input type="date" name="fecha" id="fecha">
    </p>
    <input type="submit" value="Submit">

<h1><a href = "payments.php">Volver</a><h1>
</form>
</body>
</html>