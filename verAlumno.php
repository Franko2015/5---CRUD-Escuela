<!DOCTYPE html>
<html>
<head>
	  <title>Datos de alumnos</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="btn btn-dark" href="index.php">Página principal</a>
    </li>

    <div class="navbar-collapse collapse" id="navbar01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" font-size:" 150%;">&nbsp;&nbsp;Datos</a>

              <div class="dropdown-menu dropdown-hover" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="verAlumno.php">Alumnos</a>
              <a class="dropdown-item" href="verProfesor.php">Profesores</a>
            </div>
          </li>
        </ul>
      </div>
  </ul>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar01" aria-controls="navbar01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbar01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" font-size:" 150%;">&nbsp;&nbsp;Registrar</a>

              <div class="dropdown-menu dropdown-hover" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="addAlumno.php">Alumno</a>
              <a class="dropdown-item" href="addProfesor.php">Profesor</a>
            </div>
          </li>
        </ul>
      </div>
</nav>
<br>
<div class="container">          
  <table class="table table-hover table-responsive-md" border="2">
    <thead>
      	<tr align="center">
	      <th>Id</th>
	      <th>Nombre</th>
	      <th>Apellido</th>
	      <th>Contraseña</th>
        <th>Profesor</th>
	      <th colspan="2">Acción</th>
    	</tr>
    </thead>
    <tbody>
<?php
  include("conectar.php"); 
  $sql="SELECT * from tblAlumno a INNER JOIN tblProfesor p ON a.idProfesor = p.idProfesor";
    $result=mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_assoc($result)) { ?>

    <tr align="center">
      <td><?php echo $mostrar['idAlumno'] ?></td>
      <td><?php echo $mostrar['nombresAlumno'] ?></td>
      <td><?php echo $mostrar['apellidosAlumno'] ?></td>
      <td><?php echo $mostrar['contraseñaAlumno'] ?></td>
      <td><?php echo $mostrar['nombresProfesor'];?>&nbsp<?php echo $mostrar['apellidosProfesor'] ?></td>
      <td><a href="eliminarAlumno.php?id=<?php echo $mostrar['idAlumno']; ?>">Eliminar</a></td>
      <td><a href="editarAlumno.php?id=<?php echo $mostrar['idAlumno']; ?>">Editar</a></td>
    </tr>
  <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>