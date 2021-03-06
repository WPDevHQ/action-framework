<?php
/**
 * Template functions used for the site header.
 *
 * @package actions
 */

if ( ! function_exists( 'actions_site_branding' ) ) {
	/**
	 * Display Site Branding
	 * @since  1.0.0
	 * @return void
	 */
	function actions_site_branding() {
		
	?>
	<div class="header-area full">
	    <div class="main">
			<header id="masthead" class="site-header inner">
				<div class="header-elements">
					<span class="site-title">
						<?php 
						$title = get_bloginfo('name');
						if ( get_theme_mod( 'actions_logo' ) ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_theme_mod( 'actions_logo' ); ?>" alt="<?php echo esc_attr( $title ); ?>">
							</a>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $title ); ?>">
								<?php echo $title; ?>
							</a>
						<?php endif; ?>
					</span>
					<nav id="header-navigation" class="header-menu" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'header', 'fallback_cb' => 'actions_menu_home' ) ); ?>
					</nav>
				</div>
			</header>			
		</div>
	</div>
		<?php 
	}
}

if ( ! function_exists( 'actions_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 * @since  1.0.0
	 * @return void
	 */
	function actions_primary_navigation() {
		?>
		    <div class="main">
			<div class="main-menu-container inner">
				<nav id="site-navigation" class="main-navigation clear" role="navigation">
					<span class="menu-toggle"><i class="fa fa-bars"></i> <?php _e( 'Menu', 'actions' ); ?></span>
					<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'actions' ); ?></a>		
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'actions_menu_home' ) ); ?>
				</nav>
			</div>
			</div>
		<?php
	}
}

if ( ! function_exists( 'actions_skip_links' ) ) {
	/**
	 * Skip links
	 * @since  1.4.1
	 * @return void
	 */
	function actions_skip_links() {
		?>
		<a class="skip-link screen-reader-text" href="#site-navigation"><?php _e( 'Skip to navigation', 'actions' ); ?></a>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'actions' ); ?></a>
		<?php
	}
}