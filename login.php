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
	$query = $conn->prepare("SELECT * FROM user WHERE username = ".$username."");
	$query->execute();
	$conn = null;
} catch (PDOException $e) {
    $_SESSION["message"] = "errorDB";
    echo '
    	<meta http-equiv="refresh" content="1;url=index.php">
    ';
}

?>