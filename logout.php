<?php

session_start();
unset($_SESSION["start"]);
unset($_SESSION["message"]);

session_start();
$_SESSION["message"] == "logout";
header("location: index.php");

?>