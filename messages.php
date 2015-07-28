<?php

/*
	Mensajes del sistema
	PagaDiario
	@author: LUCHOWEB.COM
*/

session_start();

if(isset($_SESSION["message"])){
	if($_SESSION["message"] == "errorLogin"){
		echo'
			<div id="top" class="alert alert-danger">
				Datos incorrectos. Intente de nuevo.
			</div>
		';
	}
	if($_SESSION["message"] == "errorDB"){
		echo'
			<div id="top" class="alert alert-danger">
				Ha ocurrido un error. Intente de nuevo.
			</div>
		';
	}
	if($_SESSION["message"] == "logout"){
		echo'
			<div id="top" class="alert alert-success">
				Sesión finalizada. Vuelva pronto.
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