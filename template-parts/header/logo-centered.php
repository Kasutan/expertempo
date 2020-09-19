<?php
/**
 * The template for displaying Header.
 *
 * @package Brilliant
 * @since Brilliant 1.0
 */

?>

	<div class="header-wrapper header-centered">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<div class="site-branding logo-blog">
						<?php if(is_single() || is_home() || is_archive()) {
							echo '<div class="site-logo"><a href="https://expertempo.fr/" class="custom-logo-link" rel="home" aria-current="page"><img src="https://expertempo.fr/wp-content/uploads/2020/08/WhatsApp-Image-2020-07-18-at-10.17.04.jpeg" class="custom-logo" alt="Whatsapp image 2020 07 18 at 10.17.04" srcset="https://expertempo.fr/wp-content/uploads/2020/08/WhatsApp-Image-2020-07-18-at-10.17.04.jpeg 516w, https://expertempo.fr/wp-content/uploads/2020/08/WhatsApp-Image-2020-07-18-at-10.17.04-300x125.jpeg 300w" sizes="(max-width: 516px) 100vw, 516px" width="516" height="215"></a></div>';
						} else {
							brilliant_custom_logo();
						}
						 ?>
						<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
 	</div>

	<?php
	if ( get_theme_mod( 'header_layout', 'head-center1' ) == 'head-center1' ) : ?>
		<div class="main-navbar">
			<div class="container">

				<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="ei icon_menu" aria-hidden="true"></span></button>
				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'brilliant-plus' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main_menu',
							'menu_id' => 'main-menu',
							'menu_class' => 'main-menu',
							'container' => false,
							'fallback_cb' => 'brilliant_fallback_menu'
							) );
						// Main Menu
					?>

					<?php if ( brilliant_is_woocommerce_active() && get_theme_mod( 'show_cart_main_navbar' ) ) {
						$cart_url = wc_get_cart_url();
						echo '<div class="woo-cart-link"><a href="' . $cart_url . '" title="' . __( 'Checkout', 'brilliant-plus' ) . '">' . '<span class="ei icon_cart"></span></a></div>';
					} // WooCommerce Cart Link ?>
				</nav>

			</div><!-- .container -->
		</div>
	<?php
	endif;
	?>
