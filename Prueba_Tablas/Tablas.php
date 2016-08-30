<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tablas</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4">
     
    </div>
  </div>

  <div class="row">
     <legend align= "center">Tabla de Ventas</legend>
     <br>
     <div class="col-md-4 col-md-offset-4">
     <button id="add" type="button" class="btn btn-info">Agregar Fila</button> 
     <button id="del" type="button" class="btn btn-danger">Eliminar Fila</button> 
     </div>
     <br>
     <br>
     <table id="tablaVentas" class="table table-striped table-bordered">

      <tr>
        <th>En Almacen</th>
        <th>No. Parte</th>            
        <th>Clave</th>
        <th>Descripcion</th>
        <th>Precio Unitario</th> 
        <th>Cantidad</th> 
        <th>Importe</th> 
        <th>&nbsp;</th>
      </tr>

     </table>
  </div>

    
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../js/funciones.js"></script>

  </body>
</html>