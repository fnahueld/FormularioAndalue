<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Web Andalué</title>
	<link rel="stylesheet" href="../public/css/normalize.css">
	<link rel="stylesheet" href="../public/css/bootstrap.css">
	<link rel="stylesheet" href="../public/css/estilo.css">
</head>
<body>
	<header>
		<figure>
			<img src="../public/img/logo.png" alt="Andalue">
		</figure>
	</header>
	<section>
		<article id="inicio">
			<div id="login">
				<form action="#">
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" name="usuario" class="form-control" placeholder="tucorreo@dominio.cl">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="******">
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn">
					</div>

				</form>
			</div>
			
		</article>
	</section>
</body>
</html>