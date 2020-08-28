<?php
/*
 * Template Name: Homepage
 *
 * @package Brilliant
 * @since Brilliant 1.0
 */

get_header(); ?>

	<?php if ( get_theme_mod( 'show_featured_content' ) ) {
		get_template_part( 'template-parts/page/home', 'featured-content' );
	} // Featured Content ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( get_theme_mod( 'show_frontpage_content', 1 ) ) : ?>
				<section class="home-content">

					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php if ( has_post_thumbnail() ) : ?>
							<figure class="entry-featured-image">
								<?php the_post_thumbnail('brilliant-fullwidth'); ?>
							</figure>
							<?php endif; // end has_post_thumbnail ?>

							<?php if ( get_theme_mod( 'show_frontpage_title', 1 ) ) : ?>
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->
							<?php endif; // end show_frontpage_title ?>

							<div class="entry-content">
								<?php
									the_content();
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brilliant-plus' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php
									edit_post_link(
										sprintf(
											/* translators: %s: Name of current post */
											esc_html__( 'Edit %s', 'brilliant-plus' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<span class="edit-link">',
										'</span>'
									);
								?>
							</footer><!-- .entry-footer -->

						</article><!-- #post-## -->

					<?php endwhile; // End of the loop. ?>

				</section>
			<?php endif; // end show_frontpage_content ?>

			<?php if ( get_theme_mod( 'show_services' ) ) {
				get_template_part( 'template-parts/page/home', 'services' );
			} // Services ?>

			<?php if ( get_theme_mod( 'show_testimonials' ) ) {
				get_template_part( 'template-parts/page/home', 'testimonials' );
			} // Testimonials ?>

			<?php if ( brilliant_is_woocommerce_active() && get_theme_mod( 'show_latest_products' ) ) {
				get_template_part( 'template-parts/page/home', 'latest-products' );
			} // Latest Products ?>

			<?php if ( get_theme_mod( 'show_about_us' ) ) {
				get_template_part( 'template-parts/page/home', 'about-us' );
			} // About Us ?>

			<?php if ( get_theme_mod( 'show_latest_news' ) ) {
				get_template_part( 'template-parts/page/home', 'latest-news' );
			} // Latest News ?>

			<?php echo '<p class="temp-formulaire">formulaire inscription newsletter ici</p>';?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
