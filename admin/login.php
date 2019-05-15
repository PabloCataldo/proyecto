<?php 
  //print_r($_POST); //se usan para imprimir una especie de extracto de todo sobre el POST
//var_dump($_POST);
session_start(); //para iniciar automaticamente la sesion
require ('../conexion/conexion.php');

if (isset($_POST['Enviar'])) 
{
  if ($_POST['email'] != '' && $_POST['password'] != '' ) //las comillas simples sin nada es para indicar un vacio de informacion
  {
    $email = $_POST['email'];
    $password =md5($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $query = $connection ->prepare($sql);
    $query->execute();

//si devuelve mas de 0 filas
    if ($query->rowCount() > 0) //rowCount verifica las filas a partir de 1
    { // almacenamos todas las filas en la variable usuario
      $usuarios = $query->fetchAll();

      //recorremos la variable usuarios
      foreach ($usuarios as $fila) 
      { //almacenamos los datos del usuario en variables de sesion
        $_SESSION['logueado'] = 'logueado';

        $_SESSION['usuario_id'] =$fila['id'];
        $_SESSION['usuario'] =$fila['nombre'];
        $_SESSION['avatar'] =$fila['avatar'];

        //redireccionamos a la pagina principal(el header es un funcion de php, porque href es para botones)
        header('Location: index.php'); 

      }
    }
    else
    {
      $mensaje = '<p class="alert alert-danger"> Los datos son incorrectos! :( </p>'; //mas abajo hacemos la verificacion para imprimir este mensaje
    }


//echo("Email: ".$_POST['email']);
//echo("Password: ".$_POST['password']);

  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ConectaCode | Iniciar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
<!--*******************VERIFICACION PARA IMPRIMIR EL MENSAJE DE ERROR AQUI PARA QUE SALGA EN ESTA ZONA LA INFORMACION*******************************-->
    <?php if(isset($mensaje))
    {
      if($mensaje != '')
      {
        echo $mensaje;
        $mensaje = '';
      }
    }
    ?>

    <!--*******************************************************************************************************************************************-->

    <a href="index.php"><b>ConectaCode</b>Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingrese sus datos</p>

      <form action="" method="post">
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>

        <div class="form-group">
          <input type="password"  name="password" class="form-control" placeholder="Password" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <!--
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
        -->

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="Enviar" class="btn btn-primary btn-block btn-flat">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


<!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>

    -->
      <!-- /Links de autenticacion social -->
<!--
      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
  -->
    <!-- /.login-card-body -->
    <!--
  </div>
</div>

-->
<!-- /.login-box -->

<!-- jQuery -->
<script src=plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
