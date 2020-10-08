<!--HEADER RESPONSIVE TOÑO -->
<div class="topnav" id="myTopnav">
	<img src="cabeceras/img_movil/logo_movil.png" class="logo_header_movil">
		<a href="index.php">Home</a>
		<a href="servicios.php">Servicio</a>
		<a href="industrias.php">Industrias</a>
		<a href="clientes.php">Clientes</a>
		<a href="nosotros.php">Nosotros</a>
		<a href="contacto.php">Contacto</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
</div>
<!--FIN HEADER RESPONSIVE TOÑO -->

<!--SCRIPT DE MENU RESPONSIVE -->
<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>