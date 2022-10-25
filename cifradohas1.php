<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilos.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</script><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.2.4.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <title>Formulario Registro</title>
</head>
<body>
<?php include("header.php"); ?>
    <form action="has1.php" method="post">
        <section class="form-register">
            <h4>Formulario Registro SHA1</h4>
            <label for="nombre">Introduce tu nombre: </label>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
            <label for="apellido">Introduce tu primer apellido: </label>
            <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
            <label for="edad">Introduce tu edad: </label>
            <input class="controls" type="number" name="edad" id="edad" placeholder="Ingrese su edad">
            <label for="gmail">Introduce tu correo: </label>
            <input class="controls" type="email" name="gmail" id="gmail" placeholder="Ingrese su Correo">
            <label for="pass">Introduce tu contraseña: </label>
            <input class="controls" type="password" name="pass" id="pass" placeholder="Ingrese su Contraseña">
            <p>Estoy de acuerdo con <a href="politicas.html">Terminos y Condiciones</a></p>
            <input class="botons" type="submit" value="Registrar" >
        </section>
    </form>
    <div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Registros</h3>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>edad</th>
                        <th>correo</th>
                        <th>contraseña</th>
                        <th>clave cifrada</th>
                    </tr> 
                  </thead>
                  <tbody id="myTable">
                <?php
                  $sql="SELECT * FROM has1";
                  $resultado=mysqli_query($conn,$sql);
                  while($mostrar=mysqli_fetch_array($resultado)){?>
                  
                
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['apellido'] ?></td>
                            <td><?php echo $mostrar['edad'] ?></td>
                            <td><?php echo $mostrar['correo'] ?></td>
                            <td><?php echo $mostrar['contraseña'] ?></td>
                            <td><?php echo $mostrar['cifrado'] ?></td>
                          </tr>

                    </tbody>
                <?php   
                }
                ?>
                </table>
            
    
    
</body>
</html>
