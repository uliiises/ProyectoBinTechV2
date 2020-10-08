<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Antonio Amador Barrientos / Uises Ponce Ávila">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="https://kit.fontawesome.com/abdc980b7b.js" crossorigin="anonymous"></script>
	<script src="library/Jquery/jquery-3.5.1.min.js"></script>
	<script src="library/Jquery/jquery.onepage-scroll.js"></script>

	<link rel="stylesheet" type="text/css" href="css/librerias_css/onepage-scroll.css">
	<link rel="stylesheet" type="text/css" href="css/librerias_css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/landing_page.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<title>Bintech - Inicio</title>

</head>

<body>
	<?php require_once "cabeceras/header_movil.php"; ?>
	<!-- ------------------------- SECCIÓN1 ------------------------- -->
	<div class="main">
		<?php require_once "cabeceras/header.php"; ?>
		<section class="section_screen">
			<img class="landing_page_background" src="img/index/section1/background.png">
			<img class="sec1_capa_1" src="img/landing_page/sec1_capa_1.png">
			<img class="sec1_capa_2" src="img/landing_page/sec1_capa_2.png">
			<img class="sec1_capa_3" src="img/landing_page/sec1_capa_3.png">

			<img class="sec1_capa_4_movil" src="img/landing_page/sec1_capa_4_movil.png">

			<img class="logo_princial" src="img/landing_page/Logo principal.png">

			<div class="texto_landing" id="texto1">
				<p>Somos la firma líder en consultoria de negocios TI en soluciones para mejorar la rentabilidad de las empresas</p>
				<a href="servicios.php"><button role="button" class="boton_down boton_textos"> Servicios </button></a>
			</div>

			<div class="texto_landing" id="texto2">
				<p>Más de 20 años de experiencia con más de 200 proyectos exitosos en diversos países</p>
				<a href="clientes.php"><button role="button" class="boton_down boton_textos"> Casos de éxito </button> </a>
			</div>

			<div class="texto_landing" id="texto3">
				<p>Estamos interesados en conocer tu empresa para ofrecerte la mejor resolución</p>
				<a href="industrias.php"><button role="button" class="boton_down boton_textos"> Industrias </button></a>
			</div>
			<div class="texto_landing" id="texto4">
				<p>Bintech fue fundada por un grupo de consultores expertos en contabilidad directiva y alta tecnología, todos provenían de firmas internacionales reconocidas</p>
				<a href="nosotros.php"><button role="button" class="boton_down boton_textos"> Nosotros </button></a>
			</div>
			<span class="punto" id="punto1"></span>
			<span class="punto" id="punto2"></span>
			<span class="punto" id="punto3"></span>
			<span class="punto" id="punto4"></span>
			<style>
				.boton_textos {
					position: initial;
					background: #4D8FA4;
					color: white;
					padding: 10px 25px;
				}

				.punto {
					height: 25px;
					width: 25px;
					background-color: #bbb;
					border-radius: 50%;
					display: inline-block;
					top: 648px;
					left: 170px;
					position: relative;
					z-index: 3;
				}

				@media screen and (min-width:1600px){
					.punto{
						height: 30px;
						width: 30px;
						top:50vw;
						left: 40vw;
					}
				}

				@media screen and ( max-width: 1366px) {
					.punto{
						height: 20px;
						width: 20px;
						top: 42vw;
						left: 30vw;
					}
				}

				@media screen and ( max-width: 500px) {
					.boton_textos {
					padding: 5px 10px;
					}
					.punto{
						height: 15px;
						width: 15px;
						top: 80%;
						left: 40%;
					}
				}

				.punto:hover {
					background-color: #4D8FA4;
				}
			</style>
			<script>
				$(document).ready(function() {
					$("#texto1").show(500);
					$("#texto2").hide();
					$("#texto3").hide();
					$("#texto4").hide();
				});



				$("#punto1").click(function() {
					$("#texto1").fadeIn(200);
					$("#texto2").fadeOut(200);
					$("#texto3").fadeOut(200);
					$("#texto4").fadeOut(200);
				});

				$("#punto2").click(function() {
					$("#texto1").fadeOut(200);
					$("#texto2").fadeIn(200);
					$("#texto3").fadeOut(200);
					$("#texto4").fadeOut(200);
				});

				$("#punto3").click(function() {
					$("#texto1").fadeOut(200);
					$("#texto2").fadeOut(200);
					$("#texto3").fadeIn(200);
					$("#texto4").fadeOut(200);
				});

				$("#punto4").click(function() {
					$("#texto1").fadeOut(200);
					$("#texto2").fadeOut(200);
					$("#texto3").fadeOut(200);
					$("#texto4").fadeIn(200);
				});
			</script>

			<!-- <button role="button" class="boton_down" id="boton_down"> <i class="fas fa-caret-down"></i> bajar </button> -->

			<?php require_once "cabeceras/redes_sociales.php"; ?>
		</section>

		<!-- ------------------------- SECCIÓN2 ------------------------- -->
		<section class="section_screen">
			<img class="sec2_capa_1" src="img/index/section2/sec2_capa_1.png">
			<img class="sec2_capa_2" src="img/index/section2/sec2_capa_2.png">
			<img class="sec2_capa_backgroud" src="img/index/section2/sec2_backgroud.png">

			<h1 class="sec2_titulo">
				Diferenciadores <br> y ventajas
			</h1>

			<div class="lista_dif">
				<ul>
					<li>Soluciones estructuradas de acuerdo a las necesidades especificas de cada cliente.</li>
					<br>
					<li>Alto grado de especialización y enfoque 100% en soluciones de transformación financiera.</li>
					<br>
					<li>Alianzas estratégicas con empresas de tecnología líderes en la industria (SAP, Google, Oracle,
						Microstrategy, Microsoft).</li>
				</ul>
			</div>

			<h4 class="dif_200">+200<br><span>proyectos exitosos en diversos países e industrias</span></h4>


			<h1 class="dif_title_2">
				beneficios de<br>nuestras soluciones
			</h1>


			<div class="brujula_contenedor">
				<img class="icono_index_sec2" alt="" src="img/index/section2/Icon-Brujula.png">
				<h3 class="title_icono">Dirección financiera</h3>
				<p class="text_icono">Transformación de la dirección financiera con un enfoque estratégico e innovador</p>
			</div>

			<div class="presentacion_contenedor">
				<img class="icono_index_sec2" alt="" src="img/index/section2/Icon-Presentacion.png">
				<h3 class="title_icono">Incrementar el valor para los accionistas</h3>
				<p class="text_icono">Hacer un mejor uso de la capacidad y los recursos, con el fin de incrementar el
					valor y satisfacer a los empleados, clientes y accionistas</p>
			</div>

			<div class="engranes_contenedor">
				<img class="icono_index_sec2" alt="" src="img/index/section2/Icon-engranes.png">
				<h3 class="title_icono">Optimización de procesos financieros</h3>
				<p class="text_icono">Hacer un mejor uso de la capacidad y los recursos, con el fin de incrementar el
					valor y satisfacer a los empleados, clientes y accionistas</p>
			</div>
		</section>
		<!-- ------------------------- SECCIÓN3 ------------------------- -->
		<section class="section_screen">
			<img class="sec3_background" alt="" src="img/index/section3/sec3_background.png">
			<img class="sec3_capa1" alt="" src="img/index/section3/sec3_capa1.png">
			<img class="sec3_capa2" alt="" src="img/index/section3/sec3_capa2.png">
			<h1 class="exp-title">Experiencia certificada</h1>
			<p class="exp-text">Somos la firma con más implantaciones de modelos de rentabilidad y costos, mediante el
				uso de las herramientas tecnológicas de SAP</p>

			<div class="sec3_iconos_contenedor_1">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">PaPM</span>
				<span class="sub-papm">Probability and Performance Management</span>
			</div>

			<div class="sec3_iconos_contenedor_2">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">DWC</span>
				<span class="sub-papm">Data Warehouse Cloud</span>
			</div>

			<div class="sec3_iconos_contenedor_3">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">HANA</span>
				<span class="sub-papm">Base de Datos</span>
			</div>

			<div class="sec3_iconos_contenedor_4">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">FPSL</span>
				<span class="sub-papm">Financial Product Subledger</span>
			</div>

			<div class="sec3_iconos_contenedor_5">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">BW</span>
				<span class="sub-papm">Business Warehouse</span>
			</div>

			<div class="sec3_iconos_contenedor_6">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">BCP</span>
				<span class="sub-papm">Business Planning and Consolidation</span>
			</div>

			<div class="sec3_iconos_contenedor_7">
				<img src="img/index/section3/sap-papm.png" class="sap-papm" alt=""> <span class="tit-papm">SAC</span>
				<span class="sub-papm">SAP Analitics Cloud</span>
			</div>




			<h1 class="text-industrias">industrias</h1>

			<div class="sec3_iconos_industria_1">
				<img class="icon_industrias_1" alt="" src="img/index/section3/Icon-Manufactura y consumo.png">
				<span class="text_icon_industrias">Manufactura y consumo</span>
			</div>

			<div class="sec3_iconos_industria_2">
				<img class="icon_industrias_2" alt="" src="img/index/section3/Icon-Servicios financieros.png">
				<span class="text_icon_industrias">Servicios Financieros</span>
			</div>

			<div class="sec3_iconos_industria_3">
				<img class="icon_industrias_3" alt="" src="img/index/section3/Icon-petroleoyextraccion.png">
				<span class="text_icon_industrias">Servicios Financieros</span>
			</div>

			<div class="sec3_iconos_industria_4">
				<img class="icon_industrias_3" alt="" src="img/index/section3/Icon-Retail.png">
				<span class="text_icon_industrias">Retail</span>
			</div>

			<div class="sec3_iconos_industria_5">
				<img class="icon_industrias_2" alt="" src="img/index/section3/Icon-Salud y hospitalidad.png">
				<span class="text_icon_industrias">Salud y<br>hospitalidad</span>
			</div>

			<div class="sec3_iconos_industria_6">
				<img class="icon_industrias_2" alt="" src="img/index/section3/Icon-Logistica y transporte.png">
				<span class="text_icon_industrias">Logistica y<br>transporte</span>
			</div>


			<div class="sec3_paises">
				<h3 class="text-presencia">Presencia</h3>
				<ul>
					<li>EEUU</li>
					<li>México</li>
					<li>Centroamérica</li>
					<li>Caribe</li>
					<li>Norte y Oeste de Sudamérica</li>
				</ul>
			</div>


		</section>
		<!-- ------------------------- SECCIÓN4 ------------------------- -->
		<section class="section_screen">
			<h1 class="sec4_titulo_blog">blog</h1>

			<div class="contenedor_blog_principal">

				<div class="contenedor_blog">
					<img class="blog_img_1" src="img/index/section4/blog_img_1.png">
					<h3 class="titulo_contenedor_blog">¿Conoces sobre tu merma?</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

				<div class="contenedor_blog">
					<img class="blog_img_2" src="img/index/section4/blog_img_2.png">
					<h3 class="titulo_contenedor_blog">4 maneras de potenciar tu negocio</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

				<div class="contenedor_blog">
					<img class="blog_img_3" src="img/index/section4/blog_img_3.png">
					<h3 class="titulo_contenedor_blog">¿Por qué es necesaria una organización?</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

				<div class="contenedor_blog">
					<img class="blog_img_4" src="img/index/section4/blog_img_4.png">
					<h3 class="titulo_contenedor_blog">¿Qué tanto conoces tu negocio?</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

			</div>

			<?php require_once "cabeceras/footer.php"; ?>
		</section>

	</div>

	<script src="js/main.js"></script>
</body>

</html>