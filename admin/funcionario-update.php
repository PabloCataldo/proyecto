<<?php  
session_start();

if (!isset($_SESSION['logueado'])) {

header('Location: login.php');
}


require '../conexion/conexion.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$sql = "SELECT * FROM funcionarios WHERE id = '$id'";
$query = $connection->prepare($sql);
$query->execute();
$result = $query->fetch(); //el fetch nos devuelve solo 1 registro

    

 if (isset($_POST['enviar'])) {
    

  //******************DEFINIMOS la variable sql para insertar los datos ******************************************************************************
           $sql = "UPDATE funcionarios SET
           nombre = :nombre,
           cargo = :cargo,
           imagen = :imagen,
           instagram = :instagram,
           facebook = :facebook,
           fecha_upd = NOW() WHERE id=:id"; //NOW  es funcion sql que captura la hora y fecha actual

        
//***************DEFINIMOS una variable $data con los valores para la consulta sql**************************************
                    $data = array(
                    'id' => $id,
                    'nombre' => $_POST['nombre'],
                    'cargo' => $_POST['cargo'],
                    'imagen' => $_POST['imagen'],
                    'instagram' => $_POST['instagram'],
                    'facebook' => $_POST['facebook'],
                    'activo' => $_POST['activo']

                    );

                    //*****************PREPARAMOS LA CONEXION***********
                    $query = $connection->prepare($sql);
                    if ($query->execute($data)) {
                      $mensaje = '<p class ="alert alert-success">Registro guardado correctamente :)</p>';

                      }
                      else {
                        $mensaje = '<p class = "alert alert-danger">Ocurrio un error al guardar :(</p>';
                      }

            
            }
?>  
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ConectaCode | Inicio</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <?php include "includes/nav.php"; 
      include "includes/aside.php";

        

  ?>
  <!-- /.navbar -->

 



             
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agregar Funcionario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="servicios.php">Funcionarios</a></li>
              <li class="breadcrumb-item active">Funcionario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Formulario de Registro</h5>
              </div>
              <div class="card-body">
            

            <?php
            if (isset($mensaje)) {
              echo $mensaje;
              
             } 
             ?>
             <!-- CONTENIDO -->
             <form action="" method="POST" class="form-control">
                 <!-- Campo nombre -->
                 <label>Nombre</label>
                 <input type="text" name="titulo" value="<?php echo($result['titulo']) ?>" class="form-control" required>
                
                <!-- Campo email -->
                 <label>Cargo</label>
                 <input type="text" name="descripcion_corta" value="<?php echo($result['descripcion_corta']) ?>" class="form-control" required>

                  <!-- Campo Avatar -->
                 <label>Imagen</label>
                 <input type="text" name="imagen" value="<?php echo($result['imagen']) ?>" class="form-control" required>
                 
                 <!-- Campo contrasenha -->
                 <label></label>
                 <input type="text" name="descripcion_detallada" value="<?php echo($result['descripcion_detallada']) ?>" class="form-control" required>

                

                 <!-- Campo Activo -->
                 <label>Activo</label>
                 <select class="form-control" name="activo">
                    <option value= "1"<?php if ($result['activo'] == 1) //corrobora en la base de datos si esta activo el usuario,

                   //  1 es Si (Activo)
                    {echo 'selected';} ?>  >Si</option>

                    <option value= "0"<?php if ($result['activo'] == 0) 
                    {echo 'selected';} ?>>No</option>
                   
                 </select>
                <br>
                 <input type="submit" name="enviar" value="Guardar Registro" class="btn btn-success">

             </form>




              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
<?php include "includes/footer.php" ;
 ?>
  
</body>
</html>