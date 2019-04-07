<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edge' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding"       
      <?php if ( get_header_image() ) : ?>
      
          
        style="background-image: url(<?php header_image(); ?>);"           
      
      <?php endif; ?>
    >

    <?php
      // If there is a custom logo, use it instead of site title.
			if ( has_custom_logo() ) :
				the_custom_logo();
			else :
				?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
      endif;

      // If the theme uses an overlay, add it here.
      if ( function_exists('dd_add_overlay') ) dd_add_overlay();

			$edge_description = get_bloginfo( 'description', 'display' );
			if ( $edge_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $edge_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
    </div><!-- .site-branding -->
    
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'edge' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
  </header><!-- #masthead -->
  <div id="primary-nav-spacer"></div>

	<div id="content" class="site-content">
