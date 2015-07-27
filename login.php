<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<title>Ingresando...</title>
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
		    	header("location: index.php");
			}

			if($pass != $password){
				$_SESSION["message"] = "errorLogin";
		    	header("location: index.php");
			}

			if($pass == $password){
				$_SESSION["start"] = "start";
				header("location: dashboard.php");
			}
			
		}
		catch (PDOException $e) {
		    $_SESSION["message"] = "errorLogin";
		    header("location: index.php");
		}
	?>
</head>
<body>
	<div id="loading">
		<img src="images/loading.gif" />
	</div>
</body>
</html>