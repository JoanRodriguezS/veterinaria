<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<!-- Head-->
<?php include('./layouts/head.php'); ?>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo container">
				<div>
					<h1><a href="index.html" id="logo">Animal land</a></h1>
					<p>(Contacto)</p>
				</div>
			</div>
		</header>

		<!-- Nav -->
		<?php include('./layouts/nav.php'); ?>


		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="content">

							<!-- Content -->

							<article class="container py-3">
								<div class="row">
									<div class="Ubicacion">
										<i class="fa-solid fa-location-dot"></i><span><label for=""> Ubicación</label></span><br>
										<a href="">Senati Ilo,Av,1,Ilo 18601</a><br>
										<i class="fa-solid fa-envelope"></i><span><label for=""> Email</label></span><br>
										<p>@gmail.com</p>
										<i class="fa-solid fa-mobile-screen-button"></i><span><label for=""> Telefono</label></span><br>
										<a href="">+51 123 456 789</a><br>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2013.9458224007283!2d-71.3330738227361!3d-17.658530982180817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91445a54ff000001%3A0x4f6ecf2b776c2230!2sSenati%20Ilo%20Cfp!5e0!3m2!1ses!2spe!4v1696723675390!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
									<div class="col-md-6">
										<form id="" method="post" action="">
											<div class="">
												<input type="nombres" placeholder="Nombres">
												<input type="apellidos" placeholder="Apellidos">
											</div>
											<div class="">
												<input type="email" placeholder="Correo">
												<input type="numero" placeholder="Número">
											</div>
											<div class="">
												<input type="servicio" placeholder="Servicio de interes">
											</div>
											<textarea name="" id="" cols="30" rows="10" placeholder="Detalla tus dudas"></textarea>
											<br>
											<br>
											<button type="submit"><i class="fa-solid fa-paper-plane" style="color: #ffffff;"></i> Enviar</button>
										</form>
									</div>
								</div>
							</article>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include('./layouts/footer.php'); ?>


	</div>

	<!-- Scripts -->
	<?php include('./layouts/script.php'); ?>

</body>

</html>