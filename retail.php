<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Antonio Amador Barrientos / Uises Ponce Ávila">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://kit.fontawesome.com/abdc980b7b.js" crossorigin="anonymous"></script>
	<script src="library/Jquery/jquery-3.5.1.min.js"></script>
	<script src="library/Jquery/jquery.onepage-scroll.js"></script>
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<script type="text/javascript" src="js/aos.js"></script>



	<!--<link rel="stylesheet" type="text/css" href="css/librerias_css/onepage-scroll.css"> -->
	<link rel="stylesheet" type="text/css" href="css/librerias_css/animate.css">

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/landing_page.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<style>
		* {
			scroll-behavior: smooth;
			transition-duration: 1000ms;
		}

		::-webkit-scrollbar {
			display: none;
		}
	</style>

	<title>Bintech - Retail</title>
</head>

<body>

	<?php require_once "cabeceras/header.php"; ?>

	<img class="landing_page_background" src="img/retail/fondo.png">
	<img class="sec1_capa_1" src="img/landing_page/sec1_capa_1.png">
	<img class="sec1_capa_2" src="img/landing_page/sec1_capa_2.png">
	<img class="sec1_capa_3" src="img/landing_page/sec1_capa_3.png">
	<img src="img/index/section3/Icon-Retail.png" class="icon_industrias_menu3" alt="">

	<div class="titulo_manufactura">
		<h1>Retail</h1>
	</div>

	<div class="maintext_industria_interna">
		<div class="text_content">
			<p>Los modelos de Rentabilidad y Costos tienen aplicación en los procesos de UP STREAM, MIDLE STREAM y DOWN STREAM. En nuestra experiencia con clientes de diferentes países (México, Colombia, Venezuela, España), hemos desarrollado modelos con alcances y objetivos muy diversos.
			</p>
			<p><b>Análisis de Rentabilidad y Costos</b></p>
			<ul style="width: 59%;">
				<li>Por Proyecto</li>
				<li>Por Campo</li>
				<li>Por Pozo</li>
				<li>Por Plataforma</li>
				<li>Por Proceso Operativo</li>
				<li>Por Producto</li>
				<li>Por Cliente</li>
				<li>Por Canal de Distribución</li>
			</ul>
			<p>Ejemplo de Análisis de costos y rentabilidad de servicios que integran la cadena de suministro al abastecimiento de Plataformas Costa Afuera</p>
			<img src="img/retail/grafica1.png" alt="" style="width:90%;;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
			<p>Ejemplo de Asignación de costos (end to end) en proceso de Oil & Gas</p>
			<img src="img/oil_gas/grafica2.png" alt="" style="width:100%; margin-bottom: 100px;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
		</div>

		<div class="espacio">
			<?php require_once "cabeceras/footer.php"; ?>
		</div>
	</div>
</body>
<script>
  AOS.init();
</script>

</html>