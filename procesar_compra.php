<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$productos = $_POST['productos'];
$precioTotal = $_POST['precio_total'];

// Establecer la conexión a la base de datos
$host = 'localhost';
$dbUsuario = 'root';
$dbContraseña = '';
$nombreBaseDatos = 'registros';

$conexion = mysqli_connect($host, $dbUsuario, $dbContraseña, $nombreBaseDatos);

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

// Escapar los datos para evitar inyección de SQL (prevenir ataques)
$nombre = mysqli_real_escape_string($conexion, $nombre);
$telefono = mysqli_real_escape_string($conexion, $telefono);
$productos = mysqli_real_escape_string($conexion, $productos);
$precioTotal = mysqli_real_escape_string($conexion, $precioTotal);  

// Insertar los datos en la tabla de compras
$query = "INSERT INTO tabla_compras (nombre, telefono, productos, precio_total) VALUES ('$nombre', '$telefono', '$productos', '$precioTotal')";

if (mysqli_query($conexion, $query)) {
    echo "<script> alert ('compra realizada');
      location.href = 'FAQ.html';
    </script>";
} else {
    echo 'Error al registrar la compra: ' . mysqli_error($conexion);
}

mysqli_close($conexion);
?>  