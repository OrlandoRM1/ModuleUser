<?php
    require '../conexion.php';

    $sql = "SELECT idPerfil, perfil FROM perfil";
    $resultado = $mysqli->query($sql);
?>
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
				<h3 style="text-align:center">REGISTRO DE USUARIO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarUsuario.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" required>
					</div>
				</div>
				
                <div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Status</label>
					<div class="col-sm-10">
						<select class="form-control" id="status" name="status">
                        <option value="#">Seleccionar</option>
                            <option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select>
					</div>
				</div>

                <div class="form-group">
					<label for="email" class="col-sm-2 control-label">Fecha de Vencimiento</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="fecha Vencimiento" required>
					</div>
				</div>

                <div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Perfil</label>
					<div class="col-sm-10">
						<select class="form-control" id="perfil" name="perfil">
                            <?php
                            while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <option value=""<?php echo $row['idPerfil'] ?>><?php echo $row['perfil'] ?></option>
                           <?php
                            }
                            ?>
						</select>
					</div>
				</div>

                <div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Permisos</label>
					<div class="col-sm-10">
						<select class="form-control" id="status" name="status">
                        <option value="#">Seleccionar</option>
                            <option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select>
					</div>
				</div>

                <div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Persona</label>
					<div class="col-sm-10">
						<select class="form-control" id="status" name="status">
                        <option value="#">Seleccionar</option>
                            <option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="UsuariosIndex.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>

</body>
</html>