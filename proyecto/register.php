<?php include('user_register.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Agregar usuario</title>
</head>
<body>
  <div class="header">
  	<h2>Registrar nuevo usuario</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Usuario/Teléfono</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contraseña</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmar constraseña</label>
  	  <input type="password" name="password_2">
  	</div>
	  <div class="input-group">
  	  <label>Nombre completo</label>
  	  <input type="text" name="fName">
  	</div>
	  <div class="input-group">
  	  <label>e-mail</label>
  	  <input type="text" name="email">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrar</button>
  	</div>
  	<p>
  	<a href="admin_welcome.php">Cancelar</a>
  	</p>
  </form>
</body>
</html>
