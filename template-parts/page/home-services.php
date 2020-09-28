<?php
/**
 * The template for displaying Services Section.
 *
 * @package Brilliant
 * @since Brilliant 1.0
 */

?>

	<section class="services">
		<?php if( get_theme_mod( 'services_heading' ) ) { ?>
			<h2 class="entry-title section-heading"><span><?php echo esc_html( get_theme_mod( 'services_heading' ) ); ?></span></h2>
		<?php } ?>
		
		<div class="row flex-row">
			
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
			<div class="col-4 col-sm-4">
				<div class="services-content">
					<?php if( get_theme_mod( 'services_icon_' . $i ) ) { ?>
						<div class="services-icon"><span class="ei <?php echo esc_attr( get_theme_mod( 'services_icon_' . $i ) ); ?>"></span></div>
					<?php } ?>
					<?php if( get_theme_mod( 'services_link_' . $i ) ) { ?><a href="<?php echo esc_url( get_theme_mod( 'services_link_' . $i ) ); ?>"><?php } ?>
					<?php if( get_theme_mod( 'services_title_' . $i ) ) { ?>
						<?php $titre=esc_html(get_theme_mod( 'services_title_' . $i ));
						$titre=explode('|',$titre);
						$titre=implode('<br>',$titre);
						?>
						<h3 class="services-title">
								<?php echo $titre; ?>
						</h3>
					<?php } ?>
					<?php if( get_theme_mod( 'services_text_' . $i ) ) { ?>
						<div class="desc"><?php echo wp_kses_post( wpautop(get_theme_mod( 'services_text_' . $i )) ); ?></div>
					<?php } ?>
					<?php if( get_theme_mod( 'services_link_' . $i ) ) { ?></a><?php } ?>
				</div>
			</div>
			<?php endfor; ?>
			
		</div><!-- .row -->
	</section>
	