<!doctype html>
<html lang="es">
  <head>
    
     <!--INICIO DEL HEAD-->
    <?php include 'includes/head.php'; ?>      <!--PARA INCLUIR EL OTRO ARCHIVO Y DEFINIMOS SU UBICACION-->
    <!--FIN DEL HEAD-->

    <title>Contacto - Domotica Domestica</title>
  </head>

  <body>
 <!--INICIO DEL HEADER-->
    <?php include 'includes/header.php'; ?>      <!--PARA INCLUIR EL OTRO ARCHIVO Y DEFINIMOS SU UBICACION ASI-->
    <!--FIN DEL HEADER-->


<section>
  <div class="container">
    
  

  
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12 titulo-seccion">
        <h2>Contacto</h2>
        <hr>
      </div>
    </div>
  </div>


  <div class="row">
    
  <div class="col-md-3">
    <h2>Informaciones</h2>
      <div class="media">
        <!--PARA ICONOS MODERNOS MODELO [SVG] INGRESAMOS A LA PAGINA MATERIAL.IO , EN ESA PAGINA PONE COMO FUENTES LOS ICONOS-->

         <i class="material-icons">
          email
          </i>
          <div class="media-body">
            <h5 class="mt-0">Email</h5>
            info@capacit.com.py
          </div>
      </div>

       <hr>

      <div class="media">
        <!--PARA ICONOS MODERNOS MODELO [SVG] INGRESAMOS A LA PAGINA MATERIAL.IO , EN ESA PAGINA PONE COMO FUENTES LOS ICONOS-->

        <i class="material-icons">
        phone
        </i>
          <div class="media-body">
            <h5 class="mt-0">Telefono</h5>
            0983648914
          </div>
      </div>

      <hr>

      <div class="media">
        <!--PARA ICONOS MODERNOS MODELO [SVG] INGRESAMOS A LA PAGINA MATERIAL.IO , EN ESA PAGINA PONE COMO FUENTES LOS ICONOS-->

         <i class="material-icons">
          place
          </i>
          <div class="media-body">
            <h5 class="mt-0">Direccion</h5>
            Calle Luis Alberto del Parana, Parana Country Club, Hernandarias
          </div>
      </div>


  </div>


  <div class="col-md-9">
    <h2>Formulario</h2>

    <form method="GET" action=""> <!--por defecto es get la forma de envio de datos cargados, con los names por medio de la url, el action es a donde envia los datos-->
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" required> 
      <!--input es el campo el tipo es texto para introducirlos, la clase bootstrap permite ajustar la medida del campo-->
      
      <label>Email</label>
      <input type="email" name="email" class="form-control" required> 


      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control"> 


      <label>Asunto</label>
      <input type="text" name="asunto" class="form-control" required> 

      <label>Mensaje</label>
      <textarea class="form-control" cols="30" rows="10" name="mensaje" required>
      </textarea> <!--el areade texto seria, y required se pone para obligar a que se ingresa datos y cols y rows son columnas y filas-->


      <br> <!-- crea un espacio para bajar-->
      <input type="submit" name="enviar" value="Enviar" class="btn btn-outline-success"> <!--value es lo que se ve, outline en el boton crea efecto de borde iluminado-->

    </form>

  </div>


  </div>

</div>
 <br>

</section>



<section>
  <div class="containter-fluid">

    <!--EL IFRAME SERIA UNA MINI PANTALLA DENTRO DE LA PAGINA Y SE COPIA ACA PONIENDO COMPARTIR Y LUEGO COPIANDO EL HTML-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d900.4118256951398!2d-54.62455017080984!3d-25.483449998985222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDI5JzAwLjQiUyA1NMKwMzcnMjYuNCJX!5e0!3m2!1ses-419!2spy!4v1552607107452" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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