<?php

/*
	Mensajes del sistema
	PagaDiario
	@author: LUCHOWEB.COM
*/

session_start();

if(isset($_SESSION["message"])){
	if($_SESSION["message"] == "errorBD"){
		echo'
			<div id="top" class="alert alert-danger">
				Ha ocurrido un error. Intente de nuevo.
			</div>
		';
	}
	if($_SESSION["message"] == "errorPass"){
		echo'
			<div id="top" class="alert alert-danger">
				Contraseña Incorrecta. Intente de nuevo.
			</div>
		';
	}
	if($_SESSION["message"] == "errorUser"){
		echo'
			<div id="top" class="alert alert-danger">
				Usuario Incorrecto. Intente de nuevo.
			</div>
		';
	}
}
else {
	echo'
		<div id="top" class="alert alert-info">
			Bienvenido. Por favor inicie sesión.
		</div>
	';
}

?>