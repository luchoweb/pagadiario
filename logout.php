<?php

session_start();
if(isset($_SESSION["start"])){
	unset($_SESSION["start"]);
}

if(isset($_SESSION["message"])){
	unset($_SESSION["message"]);
}

$_SESSION["message"] = "logout";
header("location: index.php");

?>