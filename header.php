<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<?php include '_includes/head.php' ?>

<body <?php body_class(); ?>>

	<div id="wrapper">

		<header id="header" class="site-header" role="banner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/communications.svg" alt="Co-op Logo" class="site-logo"> -->
				<?php include '_includes/logo.php' ?>
				<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/death-star-communicator.png" class="site-logo"> -->
			</a>

			<div class="site-description">
				<?php bloginfo( 'description' ); ?><br>
				<em><a href="<?php echo esc_url( home_url( '/beta/' ) ); ?>">βeta</a></em> •
				<?php if ( is_user_logged_in() ) { ?>
					<a href="<?php echo esc_url( home_url( '/user/' ) ); $user_ID = get_current_user_id(); ?> ">Account</a> • <a href="<?php echo esc_url( home_url( '/logout/' ) ); ?>">Log Out</a>
				<?php } else { ?>
					<a href="<?php echo esc_url( home_url( '/login/' ) ); ?>">Log In</a>
				<?php } ?>
				<!-- <a href="<?php echo esc_url( home_url( '/login/' ) ); ?>">Login</a> -->
			</div>

			<nav id="nav" class="site-nav" role="navigation">
				<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
			</nav>
		</header>
