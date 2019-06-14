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
      <h3><a href = "deudas/deuda.php">Mis deudas</a></h3>
      <h2><a href = "logout.php">Cerrar sesión</a></h2>
   </body>
   
</html>