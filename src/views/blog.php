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
				<header class="header">
					<div class="clogo">
						<h1>BLOG</h1>
						<img  src="http://localhost/src/images/headBlog.png" alt="">

					</div>
				</header>

			<!-- Nav -->
				<?php include('./layouts/nav.php'); ?>


			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-9 col-12-medium">
								<div class="content">

									<!-- Content -->

										<article class="box page-content">

											<header class="blog">
												<a href=""><img src="http://localhost/src/images/perro-tumbado.jpg" alt=""></a>
												<h2>Lobectomía pulmonar en perros y gatos</h2>
												<p>Intervención y cuidados postoperatorio</p>
												<ul class="meta">
													<li class="icon fa-clock">5 days ago</li>
													<li class="icon fa-comments"><a href="#">1,024</a></li>
												</ul>
											</header>
											<section>
												<h3>¿Qué es una lobectomía pulmonar?</h3>
												<p>
													Una lobectomía pulmonar es un procedimiento quirúrgico que consiste en resección quirúrgica de 
													uno o más lóbulos de los pulmones.
												</p>
												<strong>Los pulmones de los perros y gatos están divididos en lóbulos para maximizar su superficie y permitir una eficiencia respiratoria óptima.</strong>
												<p>
													Es una técnica quirúrgica que requiere un abordaje al tórax del paciente (toracotomía), y una anestesia general con ventilación mecánica para garantizar
													que el pulmón contralateral (el del otro lado) mantenga su función.
												</p>
											</section>
											<div>
												<img src="<?php echo $baseURL; ?>/images/cirujano.png" alt="">
											</div>

											<section>
												<h3>¿Cuándo se realiza una lobectomía pulmonar en perros y gatos?</h3>
												<p>
													Cuando uno de estos lóbulos pulmonares presenta lesiones o enfermedades que no pueden 
													ser tratadas solo de forma médica, se realiza una lobectomía.
													<br>
													<br>

													Los lóbulos pulmonares afectados, pueden presentar lesiones debidas a la migración de cuerpos extraños, abscesos, traumatismos, bullas, neumotórax espontáneo, torsión de lóbulo pulmonar o tumores, etc. Todas ellas se resuelven a priori con la intervención quirúrgica de la lobectomía
													<br>
													<br>
													La intervención puede ser una lobectomía parcial, donde se extrae una porción del lóbulo pulmonar, o lobectomía total, donde se elimina completamente el lóbulo pulmonar afectado.
													<br>
													<br>													
													<strong>“A pesar de la eliminación de parte del tejido pulmonar, los perros y gatos pueden mantener una función respiratoria normal incluso con hasta un 50% menos de parénquima pulmonar”.</strong>
												</p>
												<p>
													Suspendisse laoreet metus ut metus imperdiet interdum aliquam justo tincidunt. Mauris dolor urna,
													fringilla vel malesuada ac, dignissim eu mi. Praesent mollis massa ac nulla pretium pretium.
													Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu.
													Vestibulum purus augue, tincidunt sit amet iaculis id, porta eu purus.
												</p>
											</section>
											<div>
												<img src="<?php echo $baseURL; ?>/images/toracotomia.png" alt="">
											</div>

										</article>
										<div>
											<h3>¿Te ha resultado interesante?</h3>
											<strong>Deja una respuesta</strong>
											<p>
												Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *
											</p>
										</div>
										<h3>Ultimos comentarios</h3>		
										<hr>
										<?php require('../controllers/mostrarpost.controllers.php')?>

										<?php
											foreach ($registros as $registro) {
												echo '<strong><br>' . htmlspecialchars($registro['username']) . '</strong>';
												echo '<p>' . htmlspecialchars($registro['comment']) . '</p>';
												echo '<hr>';
											}
											?>

										<form class="form" method="POST" action="<?php echo $baseURL; ?>controllers/post.controller.php">
											<label for="comment" class="label">Comentario</label>
											<textarea type="text" name="comment" class="input"></textarea>
											<br>

											<label for="username" class="label">Nombre</label>
											<input type="text" id="username" name="username" required="" class="input">
											<br>

											<label for="email" class="label">Email</label>
											<input type="email" id="email" name="email" required="" class="input">
											<br>

											<button type="submit" class="submit">Publicar el Comentario</button>
										</form>

								</div>
							</div>
							<div class="col-3 col-12-medium">
								<div class="sidebar">

									<!-- Sidebar -->

										<!-- Recent Posts -->
											<section>
												<h2 class="major"><span>Recent Posts</span></h2>
												<ul class="divided">
													<li>
														<article class="box post-summary">
															<h3><a href="#">A Subheading</a></h3>
															<ul class="meta">
																<li class="icon fa-clock">6 hours ago</li>
																<li class="icon fa-comments"><a href="#">34</a></li>
															</ul>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3><a href="#">Another Subheading</a></h3>
															<ul class="meta">
																<li class="icon fa-clock">9 hours ago</li>
																<li class="icon fa-comments"><a href="#">27</a></li>
															</ul>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3><a href="#">And Another</a></h3>
															<ul class="meta">
																<li class="icon fa-clock">Yesterday</li>
																<li class="icon fa-comments"><a href="#">184</a></li>
															</ul>
														</article>
													</li>
												</ul>
												<a href="#" class="button alt">Arcives</a>
											</section>

										<!-- Something -->
											<section>
												<h2 class="major"><span>Ipsum Dolore</span></h2>
												<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
												<p>
													Donec sagittis massa et leo semper scele risque metus faucibus. Morbi congue mattis mi.
													Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum sed commodo luctus blandit.
												</p>
												<a href="#" class="button alt">Learn more</a>
											</section>

										<!-- Something -->
											<section>
												<h2 class="major"><span>Magna Feugiat</span></h2>
												<p>
													Rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien.
													Donec sagittis massa et leo semper scele risque metus faucibus. Morbi congue mattis mi.
													Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum sed commodo luctus blandit.
												</p>
												<a href="#" class="button alt">Learn more</a>
											</section>

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