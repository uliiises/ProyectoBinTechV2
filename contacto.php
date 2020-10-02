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

	<style>
		::-webkit-scrollbar {
			display: none;
		}
	</style>

	<title>Bintech - Industrias</title>
</head>
<body>

	

	<?php require_once "cabeceras/header.php"; ?>
			<img class="sec1_capa_1" src="img/landing_page/sec1_capa_1.png">
			<img class="sec1_capa_2" src="img/landing_page/sec1_capa_2.png">
			<img class="sec1_capa_3" src="img/landing_page/sec1_capa_3.png">

			<h1 class="titulo_landing">Contacto</h1>

			<div class="texto_landing">
				<p>Si estás interesado en los servicios que proporciona Bintech te pedimos llenes la forma o nos contactes directamente en alguna de nuestras oficinas</p>
			</div>

			<div class="formulario_contacto">
				<h2>Envianos un mensaje</h2>

				<form>
					<div class="contacto_text">Nombre *</div>
					<input type="text" name="fname" id="fname">
					<div class="contacto_text">Email *</div>

					<input type="email" name="femail" id="femail">
					<div class="contacto_text">Teléfono *</div>

					<input type="tel" name="fphone" id="fphone">
					<p>

						<input type="radio" name="email" value="email">
						<label>email</label>
						<input type="radio" name="teléfono" value="teléfono">
						<label>teléfono</label>
					</p>

					<div class="contacto_text">
						<div class="contacto_text">Mensaje *</div>
						<textarea rows="5" cols="35" required></textarea>
					</div>
					<button role="button" class="boton_enviar">Enviar</button>
				</form>
			</div>
			

			<footer class="footer_contacto">
				<div class="footer_contacto_content">

					<div class="contacto_left">
						<div class="content">
							<h3 class="subtitulo_footer_contacto">México</h3>
							<div class="place">
								<span class="fas fa-map-marker-alt"></span>
								<span class="text">Zamora 422 int 31 Col. Centro. Boca del Rio, Ver. 94290</span>
							</div>

							<div class="phone">
								<span class="fas fa-mobile"></span>
								<span class="text"> Tel: +52 (229) 260 43 59</span>
							</div>
						</div>
					</div>

					<div class="contacto_center">
						<div class="email">
							<span class="fas fa-envelope"></span>
							<span class="text">info@bintech.com.mx</span>
							</div>
					</div>

					<div class="contacto_right">
						<h3 class="subtitulo_footer_contacto">Estados Unidos</h3>
						<div class="place">
							<span class="fas fa-map-marker-alt"></span>
							<span class="text">2800 Post Oak Blvd. Suite 1400. Huston, TX. 77056</span>
						</div>

						<div class="phone">
							<span class="fas fa-mobile"></span>
							<span class="text"> Tel: +52 (229) 260 43 59</span>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>

















<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Antonio Amador Barrientos / Uises Ponce Ávila">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://kit.fontawesome.com/abdc980b7b.js" crossorigin="anonymous"></script>
	<script src="library/Jquery/jquery-3.5.1.min.js"></script>
	<script src="library/Jquery/jquery.onepage-scroll.js"></script>
 -->
<!--<link rel="stylesheet" type="text/css" href="css/librerias_css/onepage-scroll.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/librerias_css/animate.css">

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/landing_page.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<title>Bintech - Contacto</title>
</head>
<body>

	<?php require_once "cabeceras/header.php"; ?>

	<img class="sec1_capa_1" src="img/landing_page/sec1_capa_1.png">
	<img class="sec1_capa_2" src="img/landing_page/sec1_capa_2.png">
	<img class="sec1_capa_3" src="img/landing_page/sec1_capa_3.png">				
	
	<h1 class="titulo_landing">Contacto</h1>

			<div class="texto_landing">
				<p>Si estás interesado en los servicios que proporciona Bintech te pedimos llenes la forma o nos contactes directamente en alguna de nuestras oficinas</p>
			</div>


	<div class="formulario_contacto">
		<h2>Envianos un mensaje</h2>
		<form>
			<div class="contacto_text">Nombre *</div>
			<input type="text" name="fname" id="fname">
			<div class="contacto_text">Email *</div>

			<input type="email" name="femail" id="femail">
			<div class="contacto_text">Teléfono *</div>

			<input type="tel" name="fphone" id="fphone">
			<p>
				<input type="radio" name="email" value="email">
				<label>email</label>
				<input type="radio" name="teléfono" value="teléfono">
				<label>teléfono</label>
			</p>
			<div class="contacto_text">
				<div class="contacto_text">Mensaje *</div>
				<textarea rows="5" cols="35" required></textarea>
			</div>
			<button role="button" class="boton_enviar">Enviar</button>
		</form>
	</div>

	

	<div class="espacio">  </div>
	<footer class="footer_contacto">
		<div class="main_content">
		<div class="left box">
							<h1 class="titulo_blog">bintech</h1>
							<div class="content">
								<h3 class="subtitulo_blog">México</h3>
								<div class="place">
									<span class="fas fa-map-marker-alt"></span>
								<span class="text">Zamora 422 int 31 Col. Centro. Boca del Rio, Ver. 94290</span>
								</div>

								<div class="phone">
									<span class="fas fa-mobile"></span>
								<span class="text"> Tel: +52 (229) 260 43 59</span>
								</div>

								<div class="email">
									<span class="fas fa-envelope"></span>
								<span class="text">info@bintech.com.mx</span>
								</div>
							</div>
						</div>

						<div class="center box">
							<h3 class="subtitulo_blog">Estados Unidos</h3>
							<div class="place">
									<span class="fas fa-map-marker-alt"></span>
								<span class="text">2800 Post Oak Blvd. Suite 1400. Huston, TX. 77056</span>
								</div>

								<div class="phone">
									<span class="fas fa-mobile"></span>
								<span class="text"> Tel: +52 (229) 260 43 59</span>
								</div>

								<div class="email">
									<span class="fas fa-envelope"></span>
								<span class="text">info@bintech.com.mx</span>
								</div>
						</div>		
		</div>
	</footer>

</body>
</html> -->