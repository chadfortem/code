<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Condiciones de Responsive -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	
	<!-- Script's de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<header>
	<!-- Titulo -->
	<div class="container">
		<div class="row justify-content-center">
			<h3 class="display-2 letterTitle mt-5">
				Code<span class="parpadeo">|</span>
			</h3>
		</div>
	</div>
	<!-- Final de Titulo-->
</header>
<body>
	<div class="container">
		<div class="row justify-content-center">

			<div class="card" style="background-color: transparent;">
				<div class="card-body">
					<div class="card-title">
						<h3>Inicia Sesion</h3>
					</div>
					<form action="session.php" method="post">
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" name="usuario" class="form-text" required>
						</div>
						<div class="form-group">
							<label>Contrasena</label>
							<input type="password" name="contrasena" class="form-text" required>
						</div>
							<input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
							<a class="btn btn-warning btn-lg btn-block">Registrate</a>
					</form>
				</div>
			</div>

		</div>
	</div>	
</body>
<footer style="width: 100%; height: 5rem; position: absolute; bottom: 0;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-4 text-right">
				<img src="img/fullnoise.svg" style="width: 5rem; height: auto;">
			</div>
			<div class="col-4 text-left contenido" style="font-size: 0.7rem; border-left: solid;">
				<span>full noise</span><br>
				<span>2018</span><br>
				<span>Apoyo a la escena</span><br>
			</div>
		</div>
	</div>
</footer>
<source src="/js/bootstrap.js" type="">
</html>