    <!DOCTYPE html>
    <html>
    <head>

 
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="estilo1.css">
    
      <title>Formulario Registro</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <audio controls autoplay="audio">
  <source src="cancion.mp3" type="audio/mp3" id="audio">
  Tu navegador no soporta la etiqueta de audio.
</audio>
    

      <style>
        h4{
          font-family:cursive;
          color: #FF9B00;

        }
      </style>
    </head>
    <body>


      <script> 
       document.getElementById("myForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Evita el envío del formulario

  var nombreInput = document.getElementById("nombre");
  var emailInput = document.getElementById("email");
  var telefonoInput = document.getElementById("telefono");

  var nombre = nombreInput.value;
  var email = emailInput.value;
  var telefono = telefonoInput.value;

  // Validar nombre
  if (nombre.length < 2) {
    alert("El nombre debe tener al menos 2 letras");
    return;
  }

  // Validar correo electrónico
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Por favor, introduce un correo electrónico válido");
    return;
  }

  // Validar teléfono
  if (telefono.length < 10) {
    alert("El número de teléfono debe tener al menos 10 dígitos");
    return;
  }

  // Si todos los campos son válidos, puedes enviar el formulario aquí
  // this.submit();

  alert("Formulario enviado correctamente");
});
    </script>

      <form onsubmit="return validarFormulario()" id="myForm" action="conexion2.php" method="POST">
          
      <section class="form-register">
        
        <script>
window.setInterval (BlinkIt, 500);
var color = "orange";
function BlinkIt () {
var blink = document.getElementById ("blink");
color = (color == "#ffffff")? "orange" : "#ffffff" ;
blink.style.color = color;

blink.style.fontSize='45px';}
</script>

<center>
<div id="blink">BIENVENIDO PAPELERIA JEAR &#128211;</div></center>
<br>
<br>
        
          
       <div class="grupo_input">
       
        <input class="controls" type="text"  name="nombre"   placeholder=" Ingrese su Nombre">
        <input class="controls" type="text"  name="apellidopa"  placeholder="Ingrese su Apellido paterno">
        <input class="controls" type="text"  name="apellidoma"  placeholder="Ingrese su Apellido materno">
        <input class="controls" type="text"  name="telefono"placeholder="Ingrese su Telefono">
       <input class="controls" type="password"  name="password" placeholder="Ingrese su Contraseña">
     <input class="controls" type="email"    name="email"  placeholder="Ingrese su Correo Electronico">
   
</form>
          <div>
          <input type="submit" value="Registrar" class="botons botons-success" name="btn_registrar">
          <input type="submit" value="Consultar" class="botons botons-primary" name="btn_consultar">
          <input type="submit" value="Consultar2" class="botons botons-primary" name="btn_consultar2">
      <input type="submit" value="Actualizar" class="botons botons-info" name="btn_actualizar">
      <input type="submit" value="Eliminar" class="botons botons-danger" name="btn_eliminar">

    </div>
          
        <p><a href="iniciar.php">¿Ya tengo Cuenta?</a></p>

         
              
              </section>
    </form>
    </body>
    </html>


        