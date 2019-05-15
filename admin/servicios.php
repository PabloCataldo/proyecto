<?php require '../conexion/conexion.php';

$sql = "SELECT * FROM servicios";      //creamos consulta sql
$query = $connection -> prepare($sql);  // preparamos la consulta sql
$query -> execute ();                   // ejecutamos la consulta sql

$result = $query ->fetchAll() ;         //almacenamos todas las filas obtenidas de la base de datos en la variante $result




?>


<!DOCTYPE html>

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
            <h1 class="m-0 text-dark">Servicios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Listado de Servicios</li>
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
                <h5 class="m-0">Registros</h5>
                <br/>
                <a class="btn btn-success" href="servicios-add.php">Agregar servicio</a>
              </div>
              <div class="card-body">
                <!--CONTENIDO-->
                 <!--INICIO DE TABLAS EN HTML-->
                  <table class="table table-bordered table-striped">
                 <thead>

                  <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion Corta</th>
                    <th>Imagen</th>

                    <th>Acciones</th>                   


                 </thead>

                 <tbody>
                  <?php   //recorrer variable result o imprimir datos
                  foreach ($result as $fila) {?> 
                    
                  
                    <tr>
                     
                        <td><?php echo $fila["id"] ?></td> 
                        <td><?php echo $fila["titulo"] ?></td> 
                        <td><?php echo $fila["descripcion_corta"] ?></td>
                        <td><?php echo $fila["imagen"] ?></td> 


                       <td>
                         <a href="servicios-delet.php" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i>Eliminar</a>
                         <a href="servicios-update.php?id=<?php echo $fila["id"] ?>" class="btn btn-warning"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</a>
                       </td>
                        
                      </tr>

                    <?php }?>
                 </tbody>

               </table>
                  











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
<?php include "includes/footer.php" 
 ?>
  
</body>
</html>