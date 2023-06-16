<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "papeleriae";
$consulta = "";

$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");


$calculadora=$_POST['calculadora'];
$Lapices=$_POST['Lapices'];
$Plumas=$_POST['Plumas'];
$Marcadores=$_POST['Marcadores'];
$Corrector=$_POST['Corrector'];
$cuaderno=$_POST['cuaderno'];
$carpetas=$_POST['carpetas'];
$papelc=$_POST['papelc'];
$sobres=$_POST['sobres'];
$cartulina=$_POST['cartulina'];
$grapa=$_POST['grapa'];
$clips=$_POST['clips'];
$gomas=$_POST['gomas'];
$reglas=$_POST['reglas'];
$tijeras=$_POST['tijeras'];
$papelb=$_POST['papelb'];
$cartulinac=$_POST['cartulinac'];
$sacapuntas=$_POST['sacapuntas'];
$folderes=$_POST['folderes'];
$posti=$_POST['posti'];
$idcliente=$_POST['idcliente'];
$direccion=$_POST['direccion'];



  if(isset($_POST['btn_confirmar']))
      {      //registrar
    $sql="INSERT INTO ventas VALUES ('$idcliente','$direccion','$calculadora','$Lapices','$Plumas','$Marcadores','$Corrector','$cuaderno','$carpetas','$papelc','$sobres','$cartulina','$grapa','$clips','$gomas','$reglas','$tijeras','$papelb','$cartulinac','$sacapuntas','$folderes','$posti')";
    $ejecuta=mysqli_query($conexion , $sql);
    if($consulta){
    echo"Hubo un error";
    } else {
        echo "<script> alert ('datos guardados');
    </script>";    
    }
   }


  if(isset($_POST['btn_consultarc']))
      {
          //CONSULTAR
$resultadoc = mysqli_query($conexion, "SELECT * FROM ventas WHERE calculadora=$calculadora ");
while($consulta=mysqli_fetch_array($resultadoc))
  {
    echo 
    echo $consulta['calculadora'];
    echo "<br>";
    
  }
       
      }

?>