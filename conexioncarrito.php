<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "papeleriae";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

    $idusuario=$_POST['idusuario'];
    $nombre=$_POST['nombre']?? null;
    $apellidopa=$_POST['apellidopa'] ?? null;
    $apellidoma=$_POST['apellidoma'];
    $telefono=$_POST['telefono'];
    $password=$_POST['password'];
    $email=$_POST['email']?? null;
//------------------------------------------------
   if(isset($_POST['btn_registrar']))
      {      //registrar
    $sql="INSERT INTO clientes VALUES ('$idusuario','$nombre','$apellidopa','$apellidoma','$telefono','$password','$email')";
    $ejecutar=mysqli_query($conexion, $sql);
    if($consulta){
    echo"Hubo un error";
    } else {
        echo "<script> alert ('datos guardados');
      location.href = 'iniciar.php';
    </script>";    
    }
   }
   ?>