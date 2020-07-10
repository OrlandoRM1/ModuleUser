<?php
	require '../conexion.php';
	
	$where = "";

	$sql = "SELECT User.idUsuario, User.usuario, User.contraseña, User.status, User.fecha_vencimiento,
				   Pro.perfil,
				   Per.permisos,
				   Person.persona
			FROM usuarios User
			INNER JOIN perfil Pro ON User.idPerfil = Pro.idPerfil
			INNER JOIN permisos Per ON User.idPermisos = Per.idPermisos
			INNER JOIN persona Person On User.idPersona = Person.idPersona";
			
			//$sql = "SELECT * FROM usuarios $where";
	$resultado = $mysqli->query($sql);

    
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
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
      <a class="navbar-brand" href="#">Index</a>
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
				<a href="nuevoUsuario.php" class="btn btn-primary">Nuevo Usuario</a>
			
			</div>
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID USUARIO</th>
							<th>USUARIO</th>
							<th>CONTRASEÑA</th>
							<th>STATUS</th>
                            <th>Fecha de VENCIMIENTO</th>
							<th>ID PERFIL</th>
                            <th>ID PERMISOS</th>
                            <th>ID PERSONA</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['idUsuario']; ?></td>
								<td><?php echo $row['usuario']; ?></td>
								<td><?php echo $row['contraseña']; ?></td>
								<td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['fecha_vencimiento']; ?></td>
								<td><?php echo $row['perfil']; ?></td>
                                <td><?php echo $row['permisos']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
								<td><a href="/ModuloUsuarios/Persona/modificarPersona.php?idUsuario=<?php echo $row['idUsuario']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="/ModuloUsuarios/Persona/eliminarPersona.php?idUsuario=<?php echo $row['idUsuario']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
            
        </form>
    </div>

    <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	

 

</body>
</html>