<?php

session_start();//primera sentencia par trabajar con sesiones
//las variables de session son globales al proyecto
//echo session_id();

if(isset($_REQUEST['btn_login']))// SI has pulsado el boton login
{
  //declaro una varaible de sesion
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
if($email=="juan@gmail.com" && $pass=="juan"){
  $_SESSION['logueado']=true;
  header('Location:menu/menu.php');//redirigir a otra pagina
} 

}
$prueba=0;
echo'<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo_index.css" rel="stylesheet" type="text/css">
    <title>Login</title>
    <style>
    body{
      background: pink;
    }
    </style>
</head>
<body>
<div class="login">
<div class="login-triangle"></div>

<h2 class="login-header">hola que tal. Hoy es día 1 de diciembre de 2020 o mejor dicho 7</h2>

<form class="login-container" action="index.php" method="post">
  <p><input name="email" type="email" placeholder="Email"></p>
  <p><input name="password" type="password" placeholder="Password"></p>

  <p><input type="submit" name="btn_login" value="Log in"></p>
</form>
</div>
</body>
</html>';
