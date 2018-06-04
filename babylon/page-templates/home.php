<?php
/*
Template Name: Home Page
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();


			endwhile;


		else :
			// no post

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>