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
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT username, password FROM user WHERE username = ".$username."";
			$result = $conn->query($sql, PDO::FETCH_ASSOC);
			echo '<script>alert("'.$result["username"].'");</script>';
			if($result['username'] != $username){
				$_SESSION["message"] = "errorUser";
			    echo '
			    	<!-- <meta http-equiv="refresh" content="1;url=index.php"> -->
			    ';
			}
			elseif($result['password'] != $password){
				echo '<script>alert("'.$result["username"].'");</script>';
				$_SESSION["message"] = "errorPass";
			    echo '
			    	<!-- <meta http-equiv="refresh" content="1;url=index.php"> -->
			    ';
			}
			header("location: dashboard.php");
			$conn = null;
		}
		catch (PDOException $e) {
		    $_SESSION["message"] = "errorDB";
		    echo '
		    	<meta http-equiv="refresh" content="1;url=index.php">
		    ';
		}

	?>
</head>
<body>
	<div id="loading">
		<img src="images/loading.gif" />
	</div>
</body>
</html>