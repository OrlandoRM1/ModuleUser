<?php
	
	require '../conexion.php';
    
    $idPersona = $_GET['idPersona'];
	
	$sql = "DELETE FROM persona WHERE idPersona = '$idPersona'";
    $resultado = $mysqli->query($sql);
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guardar Persona</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="../index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
</body>
</html>