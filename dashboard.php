<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link href="images/favicon.png" rel="shortcut icon" type="image/png" />
	<meta charset="utf-8" />
	<title>Dashboard - PagaDiario</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    setTimeout(function() {
		        $("#top").fadeOut(1500);
		    },3000);
		});
	</script>
</head>
<body>
	<header>
		<figure>
			<img src="images/logo.png" id="logo" />
		</figure>
	</header>
	<hr />
	<section class="container text-left">
		<article>
			<h3>
				Inversiones Demo
				<br/>
				<small>
					<strong>Licencia vence</strong>: <?php echo date('d/m/Y'); ?>
					<br />
					<a href="#" class="label label-success"><i class="glyphicon glyphicon-refresh"></i> Renovar licencia</a> 
					<a href="logout.php" class="label label-danger"><i class="glyphicon glyphicon-log-out"></i> Salir</a>
				</small>
			</h3>
		</article>
		<article>

		</article>
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