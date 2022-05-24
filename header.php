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
	<!-- SEO tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/hmtl; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bookmark prevew -->
  <meta property="og:title" content="NETLIINKS S.A. | Networking & Security">
  <meta property="og:description" content="Offering our services for infividual or groups.">
  <meta property="og:image" content="img/prev_bookmark.png">
  <meta property="og:url" content="https//www.netliinks.ml">

  <!-- Twitter bookmark prevew -->
  <meta property="twitter:title" content="NETLIINKS S.A. | Networking & Security">
  <meta property="twitter:description" content="Offering our services for infividual or groups.">
  <meta property="twitter:image" content="img/prev_bookmark.png">
  <meta property="twitter:card" content="summary_large_image">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://res.cloudinary.com/dr6lvwubh/raw/upload/v1581441981/Anicons/anicons.css" rel="stylesheet">

	<?php wp_head(); ?>

	<script src="https://unpkg.com/feather-icons"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'netliinks' ); ?></a>

	<header id="masthead" class="header header-index">
		<div class="container">
			<div class="site-branding">
				<?php
					the_custom_logo();
				?>
				<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
				$_s_description = get_bloginfo( 'description', 'display' );
				if ( $_s_description || is_customize_preview() ) :
					?>
					<small><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></small>
				<?php endif; ?>
			</div><!-- .site-branding -->
		</div>

	</header><!-- #masthead -->
	

	<nav class="navbar">
		<div class="navbar__container">
			<u class="navbar__left">
					<li><a href="<?php echo esc_url( home_url( '/')); ?>" class="navbar__brand">Netliinks</a></li>
			</u>

			<ul class="navbar__responsive--button">
				<a href="#" class="anicon" id="show-menu">A</a>
			</ul>

			<ul class="navbar__right" id="navbar__menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						),
					);
				?>

				<?php echo '<a id="toggle-theme" class="toggle__darkmode"><i data-feather="moon" class="moon">toggle</i></a>';?>

			</ul>

		</div>
	</nav>
