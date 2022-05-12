<?php get_header(); ?>
	<section class="container">

		<h1><?php the_title(); ?></h1>


		<?php the_field('resumen'); ?>

		<?php the_post_thumbnail("large") ?>


		<?php the_content(); ?>

		<h4>Fuente: XXXXXX</h4>
			


	</section>

<?php get_footer(); ?>