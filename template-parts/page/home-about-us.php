<?php
/**
 * The template for displaying About us Section.
 *
 * @package Brilliant
 * @since Brilliant 1.0
 */

?>

	<section class="about-us clear">

		<div class="flex-row <?php echo esc_attr( get_theme_mod( 'about_us_alignment', 'left' ) ); ?>">
			
			<div class="about-us-image" style="background-image: url(<?php if( get_theme_mod('about_us_image') ) { brilliant_thumb_url('about_us_image', 'large'); } ?>)"></div>
			<div class="about-us-content">
				<?php if( get_theme_mod( 'about_us_heading' ) ) { ?>
					<h2 class="entry-title section-heading"><span><?php echo esc_html( get_theme_mod( 'about_us_heading' ) ); ?></span></h2>
				<?php } ?>
				
				<?php if( get_theme_mod( 'about_us_text' ) ) { ?>
					<div><?php echo wp_kses_post( wpautop(get_theme_mod( 'about_us_text' )) ); ?></div>
				<?php } ?>
				
				<?php if( get_theme_mod( 'about_us_link' ) ) { ?>
					<a class="read-more" href="<?php if( get_theme_mod( 'about_us_url' ) ){ echo esc_url( get_theme_mod( 'about_us_url' ) ); }?>">
						<?php echo esc_html( get_theme_mod( 'about_us_link' ) ); ?>
					</a>
				<?php } ?>
			</div>
			
		</div>
				
	</section>
	