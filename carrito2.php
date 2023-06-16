<!DOCTYPE html>
<style>
        body {
            text-align: center;
        }
    </style>
<style>
        #title {
            display: inline-block;
        }
    </style>
     <style>
        h1 {
            font-size: 60px; /* Ajusta el tamaño según tus preferencias */
        }
    </style>



  <style>
        .animated-heading

        .animated-heading {
            display: inline-block;
            animation: animateText 2s linear infinite;
        }

        @keyframes animateText {
            0% {
                opacity: 0;
                color: red;
            }
            50% {
                opacity: 1;
                color: green;
            }
            100% {
                opacity: 0;
                color: blue;
            }
        }
    </style>

    <style>
      table {
        border-collapse: collapse;
      }

      table,
      th,
      td {
        border: 1px solid rgb(195, 0, 255);
        padding: 5px;
      }

      .producto-card {
        width: 250px;
       
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 0px 5px rgb(0, 0, 255);
        transition: transform 0.3s ease;

      }

      .producto-card:hover {
        transform: scale(1.05);
      }

      .producto-imagen img {
        
        width: 200px;
        height: 200px;
        background-color: #ccc;
        margin: 10px;
      }

      .producto-informacion {
        padding: 10px;
      }

      .producto-title {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
        color: #000000;
      }

      .producto-descripcion {
        font-size: 14px;
        margin: 5px 0;
        color: rgb(85, 85, 245);
      }

      .producto-precio {
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        color: #E10000; /letras color/
      }

      .add-to-cart {
        display: block;
        width: 100%;
        padding: 8px;
        background-color: #0595FF; /color botones/
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .add-to-cart:hover {
        background-color: #FFDDAF; /color al pulsar boton/
      }

      /**************
            Tabla de compras
**************/
    </style>
    <head>
      <script src="https://kit.fontawesome.com/e1d55cc160.js" crossorigin="anonymous"></script>

    </head>

    <body bgcolor="D1FFE2">
      <br>
      <center><strong>
      <h1 id="title">BIENVENIDO PAPELERIA JEAR &#128520&#128527</h1></strong></center>
      <br>
        <script>
        function animateTitle() {
            var title = document.getElementById('title');
            var letters = title.textContent.split('');
            title.innerHTML = '';

            var colors = ['#70D6FF', '#FF893C', '#3CFF83']; // Cambia los colores aquí
            var colorIndex = 0;

            function showNextLetter() {
                if (letters.length > 0) {
                    var span = document.createElement('span');
                    span.textContent = letters.shift();
                    span.style.color = colors[colorIndex];
                    title.appendChild(span);
                    colorIndex = (colorIndex + 1) % colors.length;
                    setTimeout(showNextLetter, 200); // Cambia la velocidad de aparición aquí (en milisegundos)
                } else {
                    setTimeout(animateTitle, 1000); // Espera 1 segundo antes de reiniciar el efecto
                }
            }

            showNextLetter();
        }

        animateTitle();
    </script>


    

   



      <!-----------------------------
                  PRODUCTO 1 
    -------------------------------->
    
      
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="libreta.png" alt="Mapa" usemap="#mapa2">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Cuaderno Profesional 200 hojas </h3>
          <p class="producto-precio">$95.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Cuaderno Profesional 200 hojas', 95)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <map name="mapa2">
        <area shape="circle" coords="100,100,50" href="img2.html" alt="Región 1" target="blank">
        
    </map>

      <!-----------------------------
               PRODUCTO 2
    ------------------------------>
    
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="plumon.png"  alt="Mapa" usemap="#mapa3">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Marcatextos Accent Sharpie T4 Colores Surtido</h3>
          <p class="producto-precio">$61.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Marcatextos Accent Sharpie T4 Colores Surtido', 61.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <map name="mapa3">
        <area shape="circle" coords="100,100,50" href="img3.html" alt="Región 1" target="blank">
        
    </map>
      <!-----------------------------
               PRODUCTO 3
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="sacapuntas.png" alt="Mapa" usemap="#mapa4">
        </div>  
        <div class="producto-informacion">
          <h3 class="producto-title">Sacapuntas 2 en 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$13.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Sacapuntas 2 en 1', 13.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <map name="mapa4">
        <area shape="circle" coords="100,100,50" href="img4.html" alt="Región 1" target="blank">
        
    </map>


      <!-----------------------------
               PRODUCTO 4
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="lapiz.png" alt="Mapa" usemap="#mapa5">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Lápiz Paper Mate 4 pzas +1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$27.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Lápiz Paper Mate 4 pzas +1', 27.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <map name="mapa5">
        <area shape="circle" coords="100,100,50" href="img4.html" alt="Región 1" target="blank">
        
    </map>
      <!-----------------------------
               PRODUCTO 5
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="regla.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Regla Aluminio 30cm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$21.90</p>
          <button class="add-to-cart" onclick="agregarProducto('Regla Aluminio 30cm', 21.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <br>
      <br>
      <!-----------------------------
               PRODUCTO 6
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="resistol.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Pritt Lapiz Adhesivo 2 piezas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$50.00</p>
          <button class="add-to-cart" onclick="agregarProducto(' Pritt Lapiz Adhesivo 2 piezas',50.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 7
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="colores.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Colores Dúo Prismacolor Junior Redondo 24 pzas</h3>
          <p class="producto-precio">$249.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Lápices de Colores Dúo Prismacolor Junior Redondo 24 pzas', 249.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 8
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="corrector.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Cinta Correctora Bic &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$22.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Cinta Correctora Bic', 22.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 9
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="plumas.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Bolígrafo Paper Mate Punto Fino Azul 12 pzas</h3>
          <p class="producto-precio">$52.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Bolígrafo Paper Mate Punto Fino Azul 12 pzas', 52.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 10
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="libreta100.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Cuaderno profesional 100 hojas</h3>
          <p class="producto-precio">$75.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Cuaderno profesional 100 hojas', 75.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
<br>
<br>
      <!-----------------------------
               PRODUCTO 11
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="correctorlapiz.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Corrector Pluma, 2 piezas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$50.90</p>
          <button class="add-to-cart" onclick="agregarProducto('Corrector Pluma, 2 piezas', 250.90)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 12
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="sacapuntas2.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Sacapuntas Maped Colores 2 pieza</h3>
          <p class="producto-precio">$25.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Sacapuntas Maped Colores 2 pieza', 25.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 13
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="coloresstuk.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Lápices de Colores Stuk 24 pzas</h3>
          <p class="producto-precio">$90  .00</p>
          <button class="add-to-cart" onclick="agregarProducto('Lápices de Colores Stuk 24 pzas', 90.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 14
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="plumascolores.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Bolígrafos Paper Mate Kilométrico 8 pzas</h3>
          <p class="producto-precio">$75.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Bolígrafos Paper Mate Kilométrico Candy Pop Multicolor 8 pzas', 75.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
               PRODUCTO 15
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="plumones3.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Marcador Sharpie Fino Doble Punta 3 piezas</h3>
          <p class="producto-precio">$38.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Marcador Sharpie Fino Doble Punta 3 piezas negro, azul y rojo', 38.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
                  PRODUCTO 16 
    -------------------------------->
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="gomas.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Goma Factis  Softer 3 piezas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h3>
          
          <p class="producto-precio">$25.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Goma Factis Softer S-20 3 piezas', 25.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 17
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="stickers.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Stickers Love 59 piezas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h3>
          <p class="producto-precio">$56.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Stickers Love 59 piezas', 56.00" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
               PRODUCTO 18
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="goma.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Goma para Borrar Arcoíris Varios Colores 1 pza</h3>
          <p class="producto-precio">$20.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Goma para Borrar Arcoíris Varios Colores 1 pza', 20.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 19
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="coloresmapped.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Colores Maped Color Peps Hexagonal 72 pzas</h3>
          <p class="producto-precio">$75.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Lápices de Colores Maped Color Peps Hexagonal 72 pzas', 75.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
               PRODUCTO 20
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="reglas.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Juego de Geometría Maped Original Multicolor 5 pzas</h3>
          <p class="producto-precio">$75.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Juego de Geometría Maped Original Multicolor 5 pzas', 75.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <br>
      <br>
      <!-----------------------------
               PRODUCTO 21
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="libreta80.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Cuaderno Profesional Rayado Fancy 80 hojas</h3>
          <p class="producto-precio">$65.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Cuaderno Profesional Rayado Fancy 80 hojas',65.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 22
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="pinturas.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Acuarelas en Pastilla Roel 12 Colores Aperlados</h3>
          <p class="producto-precio">$50.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Acuarelas en Pastilla Roel 12 Colores Aperlados', 50.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 23
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="diamantina1.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Diamantina con Pegamento Pelikan Cobre 60 ml</h3>
          <p class="producto-precio">$25.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Diamantina con Pegamento Pelikan Cobre 60 ml', 25.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 24
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="diamantina2.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Diamantina con Pegamento Pelikan Negra 60 ml</h3>
          <p class="producto-precio">$25.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Diamantina con Pegamento Pelikan Negra 60 ml', 25.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 25
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="pegamento.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Pegamento Liquido 120ml y 2 Lapices Adhesivos</h3>
          <p class="producto-precio">$55.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Pegamento Liquido 120ml y 2 Lapices Adhesivos', 55.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
<br>
<br>
      <!-----------------------------
               PRODUCTO 26
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="libretita.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Memo Book Plastificado Con 8 Piezas Color Neon</h3>
          <p class="producto-precio">$69.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Memo Book Plastificado Con 8 Piezas Color Neon', 69.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 27
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="compas.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Compás Precisión Academic 360 Maped</h3>
          <p class="producto-precio">$36.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Compás Precisión Academic 360 Maped', 36.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 28
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="compas2.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Compás Maped Precision System</h3>
          <p class="producto-precio">$145.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Compás Maped Precision System', 145.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 29
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="kitregla.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Juego Geo 4P+Compas Technicolor Blist</h3>
          <p class="producto-precio">$65.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Juego Geo 4P+Compas Technicolor Blist', 65.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
               PRODUCTO 30
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="hojas200.png">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Hojas T/Carta Officemax Colores Neon 200 hojas</h3>
          <p class="producto-precio">$120.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Hojas de Papel Tamaño Carta Officemax Colores Neon 200 hojas', 120.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>

      <!-----------------------------
               PRODUCTO 31
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="hojas100.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Hojas T/Carta Cuadro Grande Scribe 100 hojas</h3>
          <p class="producto-precio">$75.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Hojas para Carpeta Tamaño Carta Cuadro Grande Scribe 100 hojas', 75.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 32
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="hojascolores.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Hojas T/Carta Pochteca Colores Surtidos 100 hojas</h3>
          <p class="producto-precio">$75.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Hojas de Papel Tamaño Carta Pochteca Colores Surtidos 100 hojas', 75.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>


      <!-----------------------------
               PRODUCTO 33
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="perforadora.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">PERFORADORA 3 ORIFICIOSv</h3>
          <p class="producto-precio">$200.00</p>
          <button class="add-to-cart" onclick="agregarProducto('PERFORADORA 3 ORIFICIOS', 200.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
               PRODUCTO 34
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="sujetador.png" >
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">SUJETADOCUMENTOS 32MM CAJA con 12 PLATA</h3>
          <p class="producto-precio">$40.00</p>
          <button class="add-to-cart" onclick="agregarProducto('SUJETADOCUMENTOS 32MM, 80 HOJAS, CAJA con 12 COLOR PLATA', 40.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      <!-----------------------------
               PRODUCTO 35
    ------------------------------>
      <div class="producto-card" style="display: inline-block; ">
        <div class="producto-imagen">
          <img src="plumones.jpg" alt="Mapa" usemap="#mapa">
        </div>
        <div class="producto-informacion">
          <h3 class="producto-title">Marcador Sharpie 2 Piezas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
          <p class="producto-precio">$39.00</p>
          <button class="add-to-cart" onclick="agregarProducto('Marcador Sharpie 2 Piezas', 39.00)" style="display: block; margin: 0;">Añadir al Carrito</button>
        </div>
      </div>
      
    
  
    
<map name="mapa">
        <area shape="circle" coords="100,100,50" href="img1.html" alt="Región 1" target="blank">
        
    </map>


      <br>
      <br>
      <br>
      <br>
      <br>


      <style>
        table {
          width: 100%;
          border-collapse: collapse;
        }



        th {
          background-color: #0595FF; / color linea carrito/
        }



        tr:hover {
          background-color: #c5d3ff;
        }
      </style>
      </head>

      <body>
       
        <h2 style="color: #777;"><i class="fa-solid fa-cart-shopping"></i>  Carrito</h2>
        <table id="carrito">
          <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </table>

        <p style="color: #224223;">Total a Pagar: $<span id="total">0</span></p>
  </div>
  <br>
  <br>
  <br>
  <script type="text/javascript">
    function crearArreglo() {
  // Obtener los valores de los campos de texto en HTML
  var valor1 = document.getElementById("productos").value;
  var valor2 = document.getElementById("precio_total").value;

  // Crear un arreglo con los valores obtenidos
  var arreglo = [valor1, valor2];

  // Mostrar el arreglo en la consola
  console.log(arreglo);
}
  </script>
  <div>



    <h2 style="color: #FF8D05;">Datos del Cliente &#129300;</h2>
    <form action="procesar_compra.php" method="POST">
      

      <label for="nombre" >Nombre:</label><br>
      <input type="text" name="nombre" required><br>
      <label for="telefono">Teléfono:</label><br>
      <input type="tel" name="telefono" required><br>
      <input type="hidden" name="productos" id="productos">
      <input type="hidden" name="precio_total" id="precio_total"><br>
      <input type="submit" value=" &#x2713 Realizar Compra"
        style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;" >
    </form>
  </div>
  <script src="carrito.js"></script>






