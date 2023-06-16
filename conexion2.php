<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "papeleriae";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

        
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
//------------------------------------------------
      
      if(isset($_POST['btn_consultar']))
      {
          //CONSULTAR
$resultado = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre='$nombre'");
while($consulta=mysqli_fetch_array($resultado))
  {
     echo
"
 <style>

        table {
   width: 100%;
   border: 0px solid #000;
}
th, td {
   width: 15%;
   text-align: left;
   vertical-align: top;
   border: 0px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
}
   

}
th {
   font-family:Britannic Bold;
   

}
tbody tr:nth-child(even) {
  background-color: #F4D03F;
} 
table {
  background-color: #2980B9;
 }


      </style>
<table>
    
<tr>

<th><b><center>ID_Usuario</center></b></th>

<th><b><center>Nombre</center></b></th>

<th><b><center>Apellido_Materno</center></b></th>

<th><b><center>Apellido_Paterno</center></b></th>

<th><b><center>Email</center></b></th>

<th><b><center>Telefono</center></b></th>

</tr>


<td>".$consulta['idcliente']."</td>

<td>".$consulta['nombre']."</td>

<td>".$consulta['amaterno']."</td>

<td>".$consulta['apaterno']."</td>

<td>".$consulta['Email']."</td>

<td>".$consulta['telefono']."</td>



</table>

    ";
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
  echo "<script> alert ('datos actualizados correctamente');
location.href = 'registro2.php';
   </script>";
 }
//------------------------------------------------
 if(isset($_POST['btn_eliminar']))
 { //eliminar
 $_DELETE_SQL =  "DELETE FROM clientes WHERE nombre = '$nombre'";
  mysqli_query($conexion,$_DELETE_SQL); 
  echo "<script> alert ('datos borrados correctamente'); 
location.href = 'registro2.php';
  </script>";
 }



 if(isset($_POST['btn_consultar2']))
      {
          //CONSULTAR
$resultado = mysqli_query($conexion, "SELECT * FROM clientes");
while($array=$consulta=mysqli_fetch_array($resultado))
  {
    echo
"
 <style>

        table {
   width: 100%;
   border: 0px solid #000;
}
th, td {
   width: 15%;
   text-align: left;
   vertical-align: top;
   border: 0px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
}
   

}
th {
   font-family:Britannic Bold;
   

}
tbody tr:nth-child(even) {
  background-color: #F4D03F;
} 
table {
  background-color: #2980B9;
 }


      </style>
<table>
    
<tr>

<th><b><center>ID_Usuario</center></b></th>

<th><b><center>Nombre</center></b></th>

<th><b><center>Apellido_Materno</center></b></th>

<th><b><center>Apellido_Paterno</center></b></th>

<th><b><center>Email</center></b></th>

<th><b><center>Telefono</center></b></th>

</tr>


<td>".$consulta['idcliente']."</td>

<td>".$consulta['nombre']."</td>

<td>".$consulta['amaterno']."</td>

<td>".$consulta['apaterno']."</td>

<td>".$consulta['Email']."</td>

<td>".$consulta['telefono']."</td>



</table>

    ";
  }
   }
   ?>