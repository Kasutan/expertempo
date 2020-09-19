<?php
/**
 * The template for displaying Testimonials Section.
 *
 * @package Brilliant
 * @since Brilliant 1.0
 */

?>

<?php
// Testimonials Settings
$testimonials_items = 0;

for ( $count = 1; $count <= 5; $count++ ) {
	$testimonials_name = get_theme_mod( 'testimonials_name_' . $count );
	if ( ! empty( $testimonials_name ) ) {
		$testimonials_items = $count;
	}
}
?>

	<section class="testimonials">
		
		<?php if( get_theme_mod( 'testimonials_heading' ) ) { ?>
		<h2 class="entry-title section-heading"><span><?php echo esc_html( get_theme_mod( 'testimonials_heading' ) ); ?></span></h2>
		<?php } ?>
		
		<div class="slider-area">
			
			<?php if ( $testimonials_items >= 1) : ?>
			
				<div id="testimonials-slider" class="slider slider-classic">
					<?php for ( $i = 1; $i <= $testimonials_items; $i++ ) : ?>
						
						<?php if ( ! empty( get_theme_mod( 'testimonials_name_' . $i ) ) ) { ?>
						
							<div class="slider-item">
								<?php if( get_theme_mod( 'testimonials_image_' . $i ) ) { ?>
									<div class="testimonial-thumb" style="background-image: url( <?php brilliant_thumb_url( 'testimonials_image_' . $i, 'thumbnail' ); ?> )"></div>
								<?php } ?>
								
								<?php if( get_theme_mod( 'testimonials_name_' . $i ) ) { ?>
									<h3 class="slider-title"><?php echo esc_html( get_theme_mod( 'testimonials_name_' . $i ) ); ?></h3>
								<?php } ?>
								
								<?php if( get_theme_mod( 'testimonials_quote_' . $i ) ) { ?>
									<div class="testimonials-quote"><?php echo wp_kses_post( wpautop(get_theme_mod( 'testimonials_quote_' . $i )) ); ?></div>
								<?php } ?>
							</div>
						
						<?php } ?>
						
					<?php endfor; ?>
				</div>
				
			<?php else : ?>
				
				<p class="testimonials-message"><?php _e( 'There are no Testimonials to display.', 'brilliant-plus' ); ?></p>
				
			<?php endif; ?>
			
		</div>
	
	</section>

<?php // Initialize Slider ?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		// Classic
		jQuery("#testimonials-slider").slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'ease-in',
		responsive: [
		{
	      breakpoint: 640,
	      settings: {
		    arrows: false
	      }
	    }
		]
		});
	});
</script>
