<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Antonio Amador Barrientos / Uises Ponce Ávila">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="https://kit.fontawesome.com/abdc980b7b.js" crossorigin="anonymous"></script>
	<script src="../library/Jquery/jquery-3.5.1.min.js"></script>
	<script src="../library/Jquery/jquery.onepage-scroll.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/librerias_css/onepage-scroll.css">
	<link rel="stylesheet" type="text/css" href="../css/librerias_css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/landing_page.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">

	<title>Bintech - Inicio</title>

</head>

<body>
	<?php require_once "cabeceras/header_movil.php"; ?>
	<!-- ------------------------- SECCIÓN1 ------------------------- -->
	<div class="main">
		<section>
			<img class="landing_page_background" src="../img/index/section1/background.png">
			<img class="sec1_capa_1" src="../img/landing_page/sec1_capa_1.png">
			<img class="sec1_capa_2" src="../img/landing_page/sec1_capa_2.png">
			<img class="sec1_capa_3" src="../img/landing_page/sec1_capa_3.png">

			<img class="sec1_capa_4_movil" src="../img/landing_page/sec1_capa_4_movil.png">

			<img class="logo_princial" src="../img/landing_page/Logo principal.png">

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
						height: 20px;
						width: 20px;
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

			<?php require_once "../cabeceras/redes_sociales.php"; ?>
		</section>

		<!-- ------------------------- SECCIÓN2 ------------------------- -->
		<section>
			<img class="sec2_capa_1" src="../img/index/section2/sec2_capa_1.png">
			<img class="sec2_capa_2" src="../img/index/section2/sec2_capa_2.png">
			<img class="sec2_capa_backgroud" src="../img/index/section2/sec2_backgroud.png">

			<img class="sec2_capa_3" src="../img/index/section2/sec2_capa_3.png">

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
		</section>

		<!-- ------------------------- SECCIÓN2.5 ------------------------- -->
		<section>
			<img class="index_sec2_background" src="cabeceras/img_movil/fondo_index_sec2_5.png">

			<h1 class="dif_title_2">
				beneficios de nuestras soluciones
			</h1>


			<div class="brujula_contenedor">
				<img class="icono_index_sec2" alt="" src="../img/index/section2/Icon-Brujula.png">
				<h3 class="title_icono">Dirección financiera</h3>
				<p class="text_icono">Transformación de la dirección financiera con un enfoque estratégico e innovador</p>
			</div>

			<div class="presentacion_contenedor">
				<img class="icono_index_sec2" alt="" src="../img/index/section2/Icon-Presentacion.png">
				<h3 class="title_icono">Incrementar el valor para los accionistas</h3>
				<p class="text_icono">Hacer un mejor uso de la capacidad y los recursos, con el fin de incrementar el
					valor y satisfacer a los empleados, clientes y accionistas</p>
			</div>

			<div class="engranes_contenedor">
				<img class="icono_index_sec2" alt="" src="../img/index/section2/Icon-engranes.png">
				<h3 class="title_icono">Optimización de procesos financieros</h3>
				<p class="text_icono">Hacer un mejor uso de la capacidad y los recursos, con el fin de incrementar el
					valor y satisfacer a los empleados, clientes y accionistas</p>
			</div>
		</section>
		
		<!-- ------------------------- SECCIÓN3 ------------------------- -->
		<section>
			<!-- <img class="sec3_background" alt="" src="../img/index/section3/sec3_background.png"> -->
			<img class="index_sec3_background" src="cabeceras/img_movil/fondo_index_sec2_5.png">

			<h1 class="dif_title_2">
				Experiencia<br>Certificada
			</h1>

			<p class="index_sec3_texto_movil">Somos la firma con más implantaciones de modelos de rentabilidad y costos, mediante el uso de las herramientas tecnológicas de SAP</p>

			<img class="index_sec3_SAC" src="cabeceras/img_movil/SAP.png">
			<img class="index_sec3_industrias" src="cabeceras/img_movil/Industrias_sec3.png">


		</section>
		<!-- ------------------------- SECCIÓN4 ------------------------- -->
		<section>
			<h1 class="sec4_titulo_blog">blog</h1>

			<div class="contenedor_blog_principal">

				<div class="contenedor_blog">
					<img class="blog_img_1" src="../img/index/section4/blog_img_1.png">
					<h3 class="titulo_contenedor_blog">¿Conoces sobre tu merma?</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

				<div class="contenedor_blog">
					<img class="blog_img_2" src="../img/index/section4/blog_img_2.png">
					<h3 class="titulo_contenedor_blog">4 maneras de potenciar tu negocio</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

				<div class="contenedor_blog">
					<img class="blog_img_3" src="../img/index/section4/blog_img_3.png">
					<h3 class="titulo_contenedor_blog">¿Por qué es necesaria una organización?</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

				<div class="contenedor_blog">
					<img class="blog_img_4" src="../img/index/section4/blog_img_4.png">
					<h3 class="titulo_contenedor_blog">¿Qué tanto conoces tu negocio?</h3>
					<p class="texto_contenedor_blog">Nuestro compromiso es ayudar a nuestros clientes para que cuenten con modelos y procesos financieros de clase mundial ...</p>
					<button role="button" class="boton_blog_leer">Leer</button>
				</div>

			</div>
		</section>
		<!-- ------------------------- SECCIÓN5 (footer) ------------------------- -->
		<?php require_once "cabeceras/footer_movil.php"; ?>

	</div>

	<script src="../js/main.js"></script>
</body>

</html>