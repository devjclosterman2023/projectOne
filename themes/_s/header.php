<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@1,600&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header sticky-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			 ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<div class='site-info'>
				<ul>
			<li style="font-size:28px; font-weight: bold; color: #0d4054;">520.731.1117</li>
			<li><a href="/care-services">Care Services</a></li>
			<li><a href="/careers">Careers</a></li>
			<li><a href="/"><img src="/wp-content/uploads/2023/08/Group-6.png" alt=""></a></li>
			<li><a href="our-staff">Our Staff</a></li>
			<li><a href="/contact-us">Contact Us</a></li>
			<li><button class="clientPortal">Client Portal</button></li>
		</ul>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
