<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link href="images/favicon.png" rel="shortcut icon" type="image/png" />
	<meta charset="utf-8" />
	<title>PagaDiario</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<!-- Powered by LUCHOWEB.COM -->
<body>
	<header>
		<figure>
			<img src="images/logo.png" id="logo" />
		</figure>
	</header>
	<hr />
	<section>
		<div class="row">
			<div class="col-xs-0 col-md-4 col-lg-4 wrap"></div>
			<div class="col-xs-12 col-md-4 col-lg-4">
				<h2>Acceso</h2>
				<div id="login">
					<form action="login.php" method="post" class="form-horizontal">
						<div class="form-group">
						<input type="text" name="username" placeholder="Usuario" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="email" placeholder="Contraseña" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Ingresar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-0 col-md-4 col-lg-4"></div>
		</div>
	</section>
	<hr />
	<footer>
		<p>
			&copy; <?php echo date('Y'); ?>
			<br />
			<i class="glyphicon glyphicon-headphones"></i> 319 340 6490
		</p>
	</footer>
</body>
</html>