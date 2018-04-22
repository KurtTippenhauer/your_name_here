<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Your_Name_Here
 
 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fal fa-bars"></i><?php esc_html_e( '', 'your_name_here' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'your_name_here' ); ?></a>

	<header id="masthead" class="site-header">
		<h1 class="header-title">YOUR NAME HERE</h1>

		<nav id="site-navigation" class="main-navigation">
			<ul class="nav-menu">
                <!-- portfolio menu item -->
                <li class="menu-item"><a href="<?php echo get_home_url(); ?>">portfolio</a></li>
                <!-- about menu item -->
                <li class="menu-item"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">about</a></li>
                <!-- contact menu item -->
                <li class="menu-item"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">contact</a></li>
                <!-- blog menu item -->
                <li class="menu-item"><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">blog</a></li>
            </ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
