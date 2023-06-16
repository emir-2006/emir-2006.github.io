<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referre-++r" />
  <style>
        video {
            width: 320px; /* Ajusta el ancho según tus preferencias */
            height: 240px; /* Ajusta la altura según tus preferencias */
            
        }
    </style>
    <style>
        #video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* Proporción de aspecto 16:9 (9 / 16 * 100%) */
        }
        
        #video-container video {
            position: absolute;
            right: 0;
            bottom: 10;
            width: 20%; /* Ajusta el tamaño del video según tus preferencias */
            height: 20%; /* Ajusta el tamaño del video según tus preferencias */
        }
    </style>
            <link rel="stylesheet" href="estilo2.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="stilo.css">
  <title>Inicio Sesion</title>
</head>
<body>

      <form action="conexini.php" method="POST">
  <section class="form-register">
    <h4>INICIAR SESION 
      </h4>
      <div class="input-group">
                <div class="input-container">
    <input class="controls" type="text" required name="nombre" id="nombre" name="nombre" placeholder="Ingrese nombre">
</div>
<div class="input-container">
    <input class="controls" type="password"  required name="password" id="password" name="password" placeholder="Ingrese su Contraseña">
</div>
</div>

    <input class="botons" type="submit" name="btn_iniciar" value="&#x2713;Iniciar Sesion ">
  </section>
</form>
</form>
<div id="video-container">
<video controls src="gxs.mp4" style="display: block; margin: 0 auto;">
        Tu navegador no admite la etiqueta de video.
    
        Tu navegador no admite la etiqueta de video.

       
</video>
    </div>

    
</body>
</html>