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
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    setTimeout(function() {
		        $("#top").fadeOut(1500);
		    },3000);
		});
	</script>
</head>
<!-- Powered by LUCHOWEB.COM -->
<body>
	<?php include "messages.php"; ?>
	<header>
		<figure>
			<img src="images/logo.png" id="logo" />
		</figure>
	</header>
	<hr />
	<section class="container">
		<div class="row">
			<div class="col-xs-0 col-md-4 col-lg-4"></div>
			<div class="col-xs-12 col-md-4 col-lg-4">
				<h2>Acceso</h2>
				<div id="login">
					<form action="login.php" method="post" class="form-horizontal">
						<div class="form-group">
						<input type="text" name="username" placeholder="Usuario" class="form-control" required autofocus>
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								<i class="glyphicon glyphicon-log-in"></i> Ingresar
							</button>
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