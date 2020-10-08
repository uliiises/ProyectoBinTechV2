<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Antonio Amador Barrientos / Uises Ponce Ávila">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://kit.fontawesome.com/abdc980b7b.js" crossorigin="anonymous"></script>
	<script src="library/Jquery/jquery-3.5.1.min.js"></script>
	<script src="library/Jquery/jquery.onepage-scroll.js"></script>

<!--<link rel="stylesheet" type="text/css" href="css/librerias_css/onepage-scroll.css"> -->
	<link rel="stylesheet" type="text/css" href="css/librerias_css/animate.css">

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/landing_page.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/styles_roundMenu.css">

	<style>
		::-webkit-scrollbar {
			display: none;
		}
	</style>

	<title>Bintech - Industrias</title>
</head>
<body>
	<?php require_once "cabeceras/header_movil.php"; ?>
	<?php require_once "cabeceras/header.php"; ?>

	<img class="landing_page_background" src="img/industrias/section1/industrias_sec1_background.png">
			<img class="sec1_capa_1" src="img/landing_page/sec1_capa_1.png">
			<img class="sec1_capa_2" src="img/landing_page/sec1_capa_2.png">
			<img class="sec1_capa_3" src="img/landing_page/sec1_capa_3.png">

			<h1 class="titulo_landing">Industrias</h1>

			<div class="texto_landing">
				<p>Estamos interesados en conocer tu empresa para ofrecerte la mejor solución</p>
			</div>

			<!-- <button role="button" class="boton_down"> <i class="fas fa-caret-down"></i> bajar </button> -->

			<?php require_once "cabeceras/redes_sociales.php"; ?>

			<div class="maintext_industria">
				<div class="text_content">
					<h1 class="industrias_sec2_titulo">Industrias<br>a las que<br>atendemos</h1>
					<div class="industrias_sec2_texto">
						<p>En Bintech hemos asesorado a instituciones de salud públicas y privadas en diversos países. Somos pioneros en la institunacionalización de modelos financieros de rentabilidad, gestion de costos y planeación de vinculados.</p>
					</div>

					
					<div class="menu_circulo_grande" id="menu_circulo_grande">
						<a class="icono_menu" id="icono_menu_1" href="manufactura_consumo.php">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_manufactura_hover.png">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_manufactura.png">
						</a>

						<a class="icono_menu" id="icono_menu_2" href="servicios_financieros.php">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_financiero_hover.png">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_financiero.png">
						</a>

						<a class="icono_menu" id="icono_menu_3" href="retail.php">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_retail_hover.png">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_retail.png">
						</a>

						<a class="icono_menu" id="icono_menu_4" href="salud_hospitalidad.php">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_salud_hover.png">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_salud.png">
						</a>

						<a class="icono_menu" id="icono_menu_5" href="logistica_transporte.php">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_transporte_hover.png">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_transporte.png">
						</a>

						<a class="icono_menu" id="icono_menu_6" href="oil_gas.php">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_petroleo_hover.png">
							<img class="icono_select" id="icono_select" src="img/round_menu/icon_petroleo.png">
						</a>

						<div class="menu_circulo_selector" id="menu_circulo_selector">
							<img class="icono_selector" src="img/round_menu/selector.png">
						</div>
						<div class="menu_circulo_chico" id="menu_circulo_chico"> </div>
					</div>
				</div>
				<div class="espacio"><?php require_once "cabeceras/footer.php"; ?></div>
			</div>

		<script src="js/round_menu.js"></script>
	</body>
</html>