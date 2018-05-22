<?php 
	function head(){
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Caprigran</title>
    <meta name="descripcion" content="Asociación Nacional de Criadores de Caprino Raza Murciano - Granadino">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="icons/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
    <link rel="stylesheet" href="css/mi.css">
</head>
<body>
	<div class="menu2 container-fluid">
		<div class="container">
			<div class="row">
				<a class="nav-item nav-link" href="#">Federación y Asociaciones</a>
				<a class="nav-item nav-link" href="#">Multimedia</a>
				<a class="nav-item nav-link" href="#">Contacto</a>
				<a class="nav-item nav-link" href="#">Zona Privada</a>
			</div>
		</div>
	</div>
	<section id="header" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="logo col-6">
					<a href="index.php">
						<img src="img/caprigran-logo.png" alt="Caprigran">
						<span>Asociación Nacional de Criadores de Caprino<br>Raza Murciano - Granadino</span>
					</a>
				</div>
				
				<nav class="navbar navbar-expand-lg col-6">
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_principal" aria-controls="menu_principal" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				  	<div class="collapse navbar-collapse" id="menu_principal">
				    	<div class="navbar-nav">		    		
					      	<div class="menu1">
						      	<a class="nav-item nav-link" href="#">Caprigran</a>
							    <a class="nav-item nav-link" href="#">La Raza</a>
							    <a class="nav-item nav-link" href="#">Servicios</a>
							    <a class="nav-item nav-link" href="#">Ganaderías</a>
							    <a class="nav-item nav-link" href="#">Noticias</a>
					      	</div>
				    	</div>
				  	</div>
				</nav>
			</div>
		</div>
	</section>
<?php
	}
	head();
?>