<?php

if(isset($_SESSION["message"])){
	if($_SESSION["message"] == "errorBD"){
		echo'
			<div id="top" class="alert alert-danger">
				Ha ocurrido un error. Intente de nuevo.
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