<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nueva Persona</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Nueva Persona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../">Home</a></li>
      <li><a href="#">Nueva Persona</a></li>
      <li><a href="#">Permisos</a></li>
      <li><a href="#">Perfil</a></li>
      <li><a href="#">Usuarios</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
			<div class="row">
				<h3 style="text-align:center">REGISTRO DE PERSONA</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarPersona.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Fecha de nacimiento</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="fecha nacimiento" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>


                <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
					</div>
				</div>

                <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Correo Electronico</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" required>
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>

</body>
</html>