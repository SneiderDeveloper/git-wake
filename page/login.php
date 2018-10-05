<?php
error_reporting(0);
session_start();

if(isset($_SESSION["email"]))
{
  echo "";
}
else{
  header("location:../index.php");
}
?>

<!Doctype html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/index.css">
</head>
<body>

  <div id="main_container">
    <p id="sound">Wake</p>
    <div id="circle"></div>
<input id="search" type="search" placeholder="¿Que libro quieres?">
  </div>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p id="classification">Clasificación</p>

<div id="container">
  <img id="g_epico" src="img/70ppi/g_epico.png">
  <a id="epic">Género épico</a>
  <img id="g_lirico" src="img/70ppi/g_lirico.png">
  <a id="lyrical">Género lírico</a>
  <img id="g_dramatico" src="img/70ppi/g_dramatico.png">
  <a id="dramatic">Género dramático</a>
</div>
<div id="stripe"></div>
<a id="config">Configuración</a>
<a id="close" href="close.php">Salir</a>

<div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

     <p id="welcome">Bienvenido</p>

    <div class="container">
      <input type="text" id="email" placeholder="Correo" name="email" required>
      <input type="password" id="password" placeholder="Contraseña" name="pass" required>
      <a id="forgot_pass">Olvide mi contraseña</a>
      <input type="submit" id="button_login" value="A leer">
      <a id="cancel" onclick="document.getElementById('id01').style.display='none'">Cancelar</a>
    </div>

  </form>
</div>
</div>

<span class="openNav" onclick="openNav()">&#9776;</span>

<script src="scri.js"></script>
</body>
</html>
