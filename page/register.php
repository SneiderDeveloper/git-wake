<?php
error_reporting(0);
session_start();

if(isset($_SESSION["email"]))
{
  echo "Hola";
}
else{
  header("location:../index.php");
}
?>
<html>
<body>

    <script>
        function success(){
            alert("Cuenta de usuario creada");
            window.location.href="login.php";
        }
    </script>
    <?php

    $email=$_POST["email"];
    $pass=$_POST["pass"];
    try{

    $base=new PDO('mysql:host=localhost; dbname=prueba', 'root', '');
    $base->exec ("SET CHARACTER SET utf8");
    $sql="INSERT INTO tabla (email, pass) VALUES(:ema, :pas)";

    $result=$base->prepare($sql);
    $result->execute(array(":ema"=>$email, ":pas"=>$pass));

        ?><script>success();</script><?php

    $result->closeCursor();
    }

    catch(Exception $e){
        die("Error: ".$e->getMessage());
    }

    finally{
        $base=null;
    }
    ?>
    </body>
</html>
