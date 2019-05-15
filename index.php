<!doctype html>
<html lang="es">
  <head>
    
     <!--INICIO DEL HEAD-->
    <?php include 'includes/head.php'; ?>      <!--PARA INCLUIR EL OTRO ARCHIVO Y DEFINIMOS SU UBICACION-->
    <!--FIN DEL HEAD-->

    <title>Inicio - ConectaCode - Domotica Domestica</title>
  </head>

  <body>
 <!--INICIO DEL HEADER-->
    <?php include 'includes/header.php'; ?>      <!--PARA INCLUIR EL OTRO ARCHIVO Y DEFINIMOS SU UBICACION ASI-->
    <!--FIN DEL HEADER-->

   
    <main>

     <div class="container-fluid banner" > <!--container con estilo para albergar al container que alberga el contenido-->
        <div class="container">
          <h1>Desarrollo de Paginas Web y Tiendas Online</h1>
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. </h2>
        <a href="#" class="btn btn-success btn-lg">Contactar</a>
        </div>
      </div>
      
      <section id="servicios-destacados">
        <div class="container">
          <div class="row">
            <div class="col-md-12 titulo-seccion"> <!--las clases son reutilizables pero no asi los ID -->
              <h2>Servicios Destacados</h2>
              <hr>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row"> <!--fila-->
            <?php for ($i=0; $i < 3 ; $i++) { ?> <!--abrimos php y cerramos con la llave abierta-->
              
            <!--la i del medio es el que determina el numero de repeticiones-->
            <div class="col-md-4"> <!--columna-->
              <h3>Diseño web</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <a href="detalles.php" class="btn btn-success">Detalles</a> <!--success es boton verde-->
            </div>
          <?php } ?> <!--aca abrimos de nuevo el php para cerrar la llave e incluir el html sin crear conflicto en el codigo-->


            
          </div> 
        </div>
      </section>

      <section id="banner-medio">
        <div class="container-fluid">
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
          </h2>

          <a href="#" class="btn btn-warning"> Click Aqui! </a>
            
          </div>
      </section>

      <section id="equipo">
        <div class="container">


          <div class="row">
            <div class="col-md-12 titulo-seccion"> <!--las clases son reutilizables pero no asi los ID -->
              <h2>Nuestro Equipo</h2>
              <hr>
            </div>
          </div>


          <div class="row">

            <?php
            $x = 0;
            while ($x <= 3) { ?> <!--estaria creando 5 copias porque dice menor o igual, si es menor nomas seria 4 copias-->
              
            
          <div class="col-md-3"> <!--espacio para el perfil de la persona o del articulo con foto-->
            
              <div class="card">
                <img src="imagenes/avatar.jpg" class="card-img-top" alt="..."> <!--img src, imagen ocupa un espacio y no el fondo-->
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>

          </div>
          <?php
          $x++;
          } ?>

    

          </div>
        </div>  
      </section>

    </main>

     <!--INICIO DEL FOOTER-->
    <?php include 'includes/footer.php'; ?>      <!--PARA INCLUIR EL OTRO ARCHIVO Y DEFINIMOS SU UBICACION ASI-->
    <!--FIN DEL FOOTER-->


    <!--INICIO DEL SCRIPT-->
    <?php include 'includes/script.php'; ?>      <!--PARA INCLUIR EL OTRO ARCHIVO Y DEFINIMOS SU UBICACION ASI-->
    <!--FIN DEL SCRIPT-->

    
  </body>
</html>