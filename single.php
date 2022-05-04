<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet"
	href="<?php bloginfo('template_url'); ?>/estilo.css">
</head>
<body>

	<header class="container">
		<center>
			<img src="https://1000marcas.net/wp-content/uploads/2020/03/CNN-Forma.jpg" width="200">

			<h1><?php bloginfo('name'); ?></h1>

			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<li>Destacados</li>
				<li>Deportes</li>
				<li>Espectáculos</li>
			</ul>
		</center>
	</header>
	<section class="container">



			<?php $articulos = new WP_Query([
								'showposts' => 3,
							]);
			while ($articulos->have_posts()) {
				$articulos->the_post(); ?>

				<div class="row caja">
					<div class="col-sm-3">
						<?php the_post_thumbnail("thumbnail"); ?>
					</div>
					<div class="col-sm-9">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p>Publicado por <?php the_author(); ?> el <?php the_time("d/m/Y"); ?></p>
						<?php the_excerpt(); ?>
					</div>
				</div>

			<?php } ?>
			


	</section>


	<footer class="container">
		<ul>
			<li><i class="fa fa-facebook-official" aria-hidden="true"></i>  </li>
			<li>linkdin</li>
			<li>twitter</li>
		</ul>
	</footer>



</body>
</html>


