<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "papeleriae";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

$nombre=$_POST['nombre'];
$password=$_POST['password'];
$GLOBALS['nombre'];






session_start();
ob_start();
$_SESSION['sesion exito']=0;
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];


    if($nombre=="" || $password=="")
    {
        $_SESSION['sesion exito']=2; //2 campos vacios
       
    }
    else{
        $_SESSION['sesion exito']=3; //datos incorrectos
        $resultado = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre='$nombre' AND password='$password'");
        while($consulta=mysqli_fetch_array($resultado)){
            $_SESSION['sesion exito']=1; //inicio sesion
        }
    }
   
    
    if($_SESSION['sesion exito']==1)
    {
        echo "<script> alert ('Inicio de sesion exitoso' ); 
        location.href = 'carrito2.php';
        </script>";
        

        
    }
    if($_SESSION['sesion exito']==3)
    {
        echo "<script> alert ('Datos Incorrectos, verifica e intenta de nuevo'); 
        location.href = 'iniciar.php';
        </script>";
        
        
    }
    if($_SESSION['sesion exito']==2)
    {
        echo "<script> alert ('Campos vacios, necesitas completarlos'); 
        location.href = 'iniciar.php';
        </script>";
        
        
    }
    // Verificar las credenciales del usuario
if ($usuario_valido) {
  // Guardar los valores en variables de sesión
  $_SESSION['nombre'] = $nombre;
  $_SESSION['email'] = $email;
  // Otros valores que desees almacenar
}





?>







