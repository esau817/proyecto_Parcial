<?php
   //include('session.php');
   session_start();
?>
<html">
   
   <head>
      <title>Iniciar sesión </title>
   </head>
   
   <body>
      <div>
      <h1>Iniciar sesión</h1>
      <h2><a href = "login_admin.php">Admin</a></h2>
      <h3><a href = "login_user.php">Usuario</a></h3>
      <div>
   </body>
   
   <style>
   h2 {
	   background-color:#44c767;
	   -moz-border-radius:28px;
	   -webkit-border-radius:28px;
	   border-radius:28px;
	   border:1px solid #18ab29;
	   display:inline-block;
	   cursor:pointer;
	   color:#ffffff;
	   font-family:Arial;
	   font-size:17px;
	   padding:16px 31px;
	   text-decoration:none;
	   text-shadow:0px 1px 0px #2f6627;
   }
   h2:hover {
	   background-color:#5cbf2a;
   }
   h2:active {
	   position:relative;
	   top:1px;
   }
   h3 {
	   background-color:#44c767;
	   -moz-border-radius:28px;
	   -webkit-border-radius:28px;
	   border-radius:28px;
	   border:1px solid #18ab29;
	   display:inline-block;
	   cursor:pointer;
	   color:#ffffff;
	   font-family:Arial;
	   font-size:17px;
	   padding:16px 31px;
	   text-decoration:none;
	   text-shadow:0px 1px 0px #2f6627;
   }
   h3:hover {
	   background-color:#5cbf2a;
   }
   h3:active {
	   position:relative;
	   top:1px;
   }
   div{
      margin-left:40%;
      margin-right:40%;
   }
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