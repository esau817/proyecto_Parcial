<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Bienvenido </title>
   </head>
   <!-- Simples redirecciones -->
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h1><a href = "./Deudas/payments.php">Ver deudas</a></h1>
      <h1><a href = "users.php">Ver usuarios</a></h1>
      <h1><a href = "register.php">Agregar usuarios</a></h1>
      <h2><a href = "logout.php">Cerrar sesión</a></h2>

   </body>
   
</html>