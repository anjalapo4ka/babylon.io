<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/test' ); ?>

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

				get_template_part( 'template-parts/content' );

			endwhile;

			//ab_wp_pagination();

			MyPagin::the_pagin( $wp_query );

		else :

			get_template_part( 'template-parts/content' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>