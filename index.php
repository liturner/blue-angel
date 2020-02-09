<?php get_header(); ?>	

<main>

	<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			<?php }

		} else {

		}
		?>
	
</main>
	
<?php get_footer(); ?>