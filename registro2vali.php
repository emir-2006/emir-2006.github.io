    <!DOCTYPE html>
    <html>
    <head>
              

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="estilo22.css">
      <title>Formulario Registro</title>
    </head>
    <body>

          <form action="conexion22.php" method="POST">
      <section class="form-register">
        <h4>BIENVENIDO PAPELERIA JEAR</h4>
        <form>
        <input class="controls" type="text" required name="idusuario" id="idusuario" placeholder="Ingrese ID de Usuario" >
        <input class="controls" type="text"   required name="nombre" id="nombre" placeholder="Ingrese su Nombre" >
        <input class="controls" type="text"  name="apellidopa" id="apellidopa" placeholder="Ingrese su Apellido paterno" >
        <input class="controls" type="text"  name="apellidoma" id="apellidoma" placeholder="Ingrese su Apellido materno" >
        <input class="controls" type="text"  name="telefono" id="telefono" placeholder="Ingrese su Telefono" >
       <input class="controls" type="password"  name="password" id="password" placeholder="Ingrese su Contraseña" >
     <input class="controls" type="email"    name="email" id="correo" placeholder="Ingrese su Correo Electronico" >
</form>
    
          <input type="submit" value="Registrar" class="botons botons-success" name="btn_registrar">
          <input type="submit" value="Consultar" class="botons botons-primary" name="btn_consultar">
      <input type="submit" value="Actualizar" class="botons botons-info" name="btn_actualizar">
      <input type="submit" value="Eliminar" class="botons botons-danger" name="btn_eliminar">
          
        <p><a href="iniciar.php">¿Ya tengo Cuenta?</a></p>

         
              
              </section>
    </form>
    </body>
    </html>

