<?php 
	include "modelo.php";
	include "vista.php";

	if (isset($_GET["accion"])) {
		$accion = $_GET["accion"];
	} else {
		if (isset($_POST["accion"])) {
			$accion = $_POST["accion"];
		} else {	
			if(isset($_SESSION["nombreusuario"] )){
				$accion = "menuprincipalusuario";
			}
			else if(isset($_SESSION["nombreadmin"])){
				$accion = "menuprincipaladmin";
			}
			else {
				$accion = "menu";
			}
			
				
		}
	}
	

?>