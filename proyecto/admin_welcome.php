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
      <h1><a href = "logout.php">Cerrar sesión</a></h1>
   </body>
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
</html>