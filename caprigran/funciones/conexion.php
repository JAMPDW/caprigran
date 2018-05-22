<?php 
	function ConectarBD(){
		$conexion = mysqli_connect('localhost', 'root', '', 'caprigran');
		if (!$conexion) {
			include "php/error.php";
		}else{
			return $conexion;
		}
	}
?>