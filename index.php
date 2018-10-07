<!-- Putooo Juanchito -->

<?php

session_start();

try{
  $base=new PDO('mysql:host=localhost; dbname=prueba', 'root', '');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $base->exec("SET CHARACTER SET utf8");

  if(isset($_POST["login"]))
  {

    if(empty($_POST['email']) || empty($_POST["pass"]))
    {
?>
<script>

alert("Campos necesarios");

</script>
  <?php

    }else{

      $sql = "SELECT * FROM tabla WHERE email=:email AND pass=:pass";
      $resul = $base->prepare($sql);
      $resul->execute(array(':email'=>$_POST["email"], ':pass'=>$_POST["pass"]));
      $contador=$resul->rowCount();

      if($contador > 0){

        $_SESSION["email"]=$_POST["email"];
        header("location:page/login.php");

      }else{
?>

        <script>

        alert("Datos incorrectos, por favor digite bien su correo o contraseña");

        </script>
<?php
      }
    }
  }
}
catch(Exception $e){
  die('Algo anda mal :( : '.$e->getMessage());
}

 ?>

<!Doctype html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="page/css/style_index.css">
</head>
<body>

  <div id="main_container">
    <p id="sound">Wake</p>
<input id="search" type="search" placeholder="¿Que libro quieres?">
  </div>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p id="classification">Clasificación</p>

<div id="container">
  <img id="g_epico" src="page/img/70ppi/g_epico.png">
  <a id="epic">Género épico</a>
  <img id="g_lirico" src="page/img/70ppi/g_lirico.png">
  <a id="lyrical">Género lírico</a>
  <img id="g_dramatico" src="page/img/70ppi/g_dramatico.png">
  <a id="dramatic">Género dramático</a>
</div>
<div id="stripe"></div>
<a id="logIn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Ingresar</a>
<a id="signUp" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Registrase</a>

<!--LonIn -->

<div id="id01" class="modal">

  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

     <p id="welcome">Bienvenido</p>

    <div class="container">

      <input type="text" id="email" placeholder="Correo" name="email" required>
      <input type="password" id="password" placeholder="Contraseña" name="pass" required>
      <a id="forgot_pass">Olvide mi contraseña</a>
      <input type="submit" id="button_login" value="A leer" name="login">

      <a id="cancel" onclick="document.getElementById('id01').style.display='none'">Cancelar</a>
    </div>

  </form>
</div>
</div>

<span class="openNav" onclick="openNav()">&#9776;</span>

<!-- SignUP -->

<div id="id02" class="modal_2">

  <form class="modal-content_signUp animate" method="post" action="page/register.php">
    <div class="imgcontainer_2">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

     <p id="title_join">Únete a la comunidad Wake</p>

    <div class="container_2">

      <input type="text" id="name" placeholder="Nombre" name="name" required>
      <input type="email" id="email_signUp" placeholder="Correo" name="email" required>
      <input type="password" id="password_signUp" placeholder="Contraseña" name="pass" required>
      <input type="password" id="password_confirm" placeholder="Confirmar contraseña" name="pass" required>
      <input type="submit" id="button_singUp" value="Unirse" name="signUp">

      <a id="cancel_signUp" onclick="document.getElementById('id02').style.display='none'">Cancelar</a>
    </div>

  </form>
</div>
</div>
<script src="page/scri.js"></script>
</body>
</html>
