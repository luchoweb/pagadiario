<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<title>Ingresando...</title>
</head>
<body>
	<div id="loading">
		<img src="images/loading.gif" />
		<br />
		Validando...
	</div>
	<?php
		/*
			Login de usuarios
			PagaDiario
			@author: LUCHOWEB.COM
		*/

		session_start();

		$username = $_POST["username"];
		$password = md5($_POST["password"]);

		include "conn.php";

		try {			
			$r = $conn->query("SELECT password FROM user WHERE username = '".$username."'", PDO::FETCH_ASSOC);
			
			foreach ($r as $result) {
				$pass = $result["password"];
			}

			if(empty($pass)){
				$_SESSION["message"] = "errorLogin";
		    	echo '<meta http-equiv="refresh" content="1;url=index.php">';
		    	return;
			}

			if($pass != $password){
				$_SESSION["message"] = "errorLogin";
		    	echo '<meta http-equiv="refresh" content="1;url=index.php">';
			}

			if($pass == $password){
				$_SESSION["start"] = "start";
				echo '<meta http-equiv="refresh" content="1;url=dashboard.php">';
			}
			
		}
		catch (PDOException $e) {
		    $_SESSION["message"] = "errorDB";
		    echo '<meta http-equiv="refresh" content="1;url=index.php">';
		}
	?>
</body>
</html>