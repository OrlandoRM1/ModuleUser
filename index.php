<?php
	require 'conexion.php';
	
	$where = "";

	$sql = "SELECT * FROM persona $where";
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/ModuloUsuarios/Persona/nuevaPersona.php">Nueva Persona</a></li>
      <li><a href="#">Permisos</a></li>
      <li><a href="#">Perfil</a></li>
      <li><a href="/ModuloUsuarios/Usuarios/usuariosIndex.php">Usuarios</a></li>
    </ul>
  </div>
</nav>
  


  
<div class="container">
			
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Fecha de nacimiento</th>
							<th>Telefono</th>
                            <th>Dirección</th>
							<th>Correo</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['idPersona']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['fecha_nacimiento']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
                                <td><?php echo $row['direccion']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><a href="/ModuloUsuarios/Persona/modificarPersona.php?idPersona=<?php echo $row['idPersona']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="/ModuloUsuarios/Persona/eliminarPersona.php?idPersona=<?php echo $row['idPersona']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
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