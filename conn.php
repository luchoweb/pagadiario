<?php

/*
	Conexión a la base de datos
	PagaDiario
	@author: LUCHOWEB.COM
*/

$server = "localhost";
$userDB = "root";
$passDB  = "";
$database = "pagadiario";

$conn = new PDO('mysql:host='.$server.';dbname='.$database.'', $userDB, $passDB);

?>