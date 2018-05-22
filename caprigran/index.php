<?php 
	include_once 'header.php';
?>
<div id="carousel_principal" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
	    <li data-target="#carousel_principal" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel_principal" data-slide-to="1"></li>
	    <li data-target="#carousel_principal" data-slide-to="2"></li>
	</ol>
	<div class="carousel-caption d-none d-md-block">
	    <h2>CAPRIGRAN</h2>
	</div>
  	<div class="carousel-inner">
	    <div class="carousel-item active">
	      	<img class="d-block w-100" src="img/slider/nuestra_raza_1.jpg" alt="Nuestra Raza">
	    </div>
	    <div class="carousel-item">
	      	<img class="d-block w-100" src="img/slider/nuestra_raza_1.jpg" alt="Nuestra Raza">
	    </div>
	    <div class="carousel-item">
	      	<img class="d-block w-100" src="img/slider/nuestra_raza_1.jpg" alt="Nuestra Raza">
	    </div>
	</div>
</div>
<section id="noticias">
	<div class="container">
		<div class="row">
			<h2>Últimas Noticias</h2>
			<div class="ult_noticias">
				<div class="ultima_noticia col-12 col-md-6 col-lg-6">
					<article class="ultima_noticia">
						<img src="img/slider/nuestra_raza_1.jpg" alt="">
						<span class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, similique!</span>
						<span class="fecha_ext"><i class="icon ion-clock"></i> 15 de Enero, 2018</span>
						<span class="categoria">Categoría</span>
					</article>
				</div>
				<div class="noticias_anteriores col-12 col-md-6 col-lg-6">
					<div class="noticia_anterior col-12 col-md-6 col-lg-6">
						<article class="noticia_anterior">
							<img src="img/slider/nuestra_raza_1.jpg" alt="">
							<span class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, similique!</span>
							<span class="fecha_ext"><i class="icon ion-clock"></i> 15 de Enero, 2018</span>
							<span class="categoria">Categoría</span>
						</article>
					</div>
					<div class="noticia_anterior col-12 col-md-6 col-lg-6">
						<article class="noticia_anterior">
							<img src="img/slider/nuestra_raza_1.jpg" alt="">
							<span class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, similique!</span>
							<span class="fecha_ext"><i class="icon ion-clock"></i> 15 de Enero, 2018</span>
							<span class="categoria">Categoría</span>
						</article>
					</div>
					<div class="noticia_anterior col-12 col-md-6 col-lg-6">
						<article class="noticia_anterior">
							<img src="img/slider/nuestra_raza_1.jpg" alt="">
							<span class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, similique!</span>
							<span class="fecha_ext"><i class="icon ion-clock"></i> 15 de Enero, 2018</span>
							<span class="categoria">Categoría</span>
						</article>
					</div>
					<div class="noticia_anterior col-12 col-md-6 col-lg-6">
						<article class="noticia_anterior">
							<img src="img/slider/nuestra_raza_1.jpg" alt="">
							<span class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, similique!</span>
							<span class="fecha_ext"><i class="icon ion-clock"></i> 15 de Enero, 2018</span>
							<span class="categoria">Categoría</span>
						</article>
					</div>
				</div>
			</div>
			<a href="noticias.php" class="a_noticias">Más noticias</a>
		</div>
	</div>
</section>
<section id="servicios">
	<div class="container">
		<div class="row">
			<div class="menu-servicios col-12">
				<h2>Nuestros Servicios</h2>
				<div class="servicios">
					<a href="" id="ser1">Control Lechero</a>
					<a href="" id="ser2">Libro Genealógico</a>
					<a href="" id="ser3">Calificación Morfológica</a>
					<a href="" id="ser4">Programa de Mejora</a>
				</div>
			</div>
			
			<div id="servicio" class="servicio row">
			</div>
			<a href="noticias.php" class="a_noticias">Otros Servicios</a>
		</div>
	</div>
</section>
<?php 
	include_once 'footer.php';
?>