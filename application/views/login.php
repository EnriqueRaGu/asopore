<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingresar ASOPORE</title>
	<link rel="stylesheet" href="<?=base_url()?>static/css/flat-ui.min.css">
	<link rel="stylesheet" href="<?=base_url()?>static/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>static/css/estilologin1.css">
	<link rel="stylesheet" href="<?=base_url()?>fonts/style.css">
</head>
<body>
	<div class="container">
		
		<div id="contenedor">
		<img class="imgasopore " src="<?=base_url()?>img/asopore1.png">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form action="" method="POST">
						<div class="form-group">
							<label for="Username"></label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username">
							<span class="icon-user"></span>
						</div>
						<div class="form-group">
							<label for="Password"></label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
							<span class="icon-key"></span>
						</div>
						<input type="submit" value="Ingresar" id="ingresar" class="btn btn-primary">
					</form>
				</div>
			</div>
			<a href="<?=base_url()?>index.php/cambiarpassword"><p id="contrasena">Cambiar contraseña</p></a>
			<a href="<?=base_url()?>"><p id="contrasena">Volver</p></a>
						
		</div>
	</div>
</body>
</html>