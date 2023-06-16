<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "papeleriae";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

    if (isset($_POST['btn_registrar'])) {
  $idusuario=$_POST['idusuario'];
    $nombre=$_POST['nombre'];
    $apellidopa=$_POST['apellidopa'];
    $apellidoma=$_POST['apellidoma'];
    $telefono=$_POST['telefono'];
    $password=($_POST['password']);
    $email=$_POST['email'];

  if ($email ) {
    $sql = "SELECT * FROM clientes WHERE email='$email'";
   $ejecutar=mysqli_query($conexion, $sql);
    if (!$ejecutar->num_rows > 0) {
      $sql="INSERT into clientes values ('$idusuario','$nombre','$apellidopa','$apellidoma','$telefono','$password','$email')";
     $ejecutar=mysqli_query($conexion, $sql);
      if ($ejecutar) {
        echo "<script>alert('El usuario ha sido registrado correctamente :)')</script>";
        $idusuario = "";
        $email = "";
        $_POST['email'] = "";
       
      } else {
        echo "<script>alert('El registro no ha sido registrado :(')</script>";
      }
    } else {
      echo "<script>alert('El correo ya existe :O')</script>";
    }

  } else {
    echo "<script>alert('La contraseña no coincide con la anterior :(')</script>";
  }
}

   
   
     
//------------------------------------------------
      if(isset($_POST['btn_consultar']))
      {
          //CONSULTAR
$resultado = mysqli_query($conexion, "SELECT * FROM clientes WHERE idcliente=$idusuario");
while($consulta=mysqli_fetch_array($resultado))
  {
    echo $consulta['nombre'] ;
  }
      }
//------------------------------------------------
 if(isset($_POST['btn_actualizar']))
 { //actualizar
  $_UPDATE_SQL="UPDATE clientes Set 
  idcliente='$idusuario', 
  nombre='$nombre',
  apaterno='$apellidopa',
  amaterno='$apellidoma',
  telefono='$telefono',
  password='$password',
  email='$email'

  WHERE idcliente='$idusuario'"; 
  mysqli_query($conexion,$_UPDATE_SQL); 
  echo "<script> alert ('datos actualizados correctamente'); </script>";
 }
//------------------------------------------------
 if(isset($_POST['btn_eliminar']))
 { //eliminar
 $_DELETE_SQL =  "DELETE FROM clientes WHERE idcliente = '$idusuario'";
  mysqli_query($conexion,$_DELETE_SQL); 
  echo "<script> alert ('datos borrados correctamente'); 
      location.href = 'registro2vali.php';
    </script>";    
    }
 

	 

    ?>

