<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rak_Logístics
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Favicon -->
<link rel="icon" href="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/favicon_16.png" size="16x16">
<link rel="icon" href="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/favicon_32.png" size="16x16">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Icons -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/ionicons.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<!-- BxSlider CSS -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/jquery.bxslider.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="site-content">
		
		<header id="header">
			<div class="nav-wrapper">
				<div class="container">
					<div class="row">
						<div class="logo-box">
							<a href="<?php echo esc_html(home_url("/")); ?>" title="Home"><img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/rak-logo.png" alt="RAK Logistics"></a>
						</div>
						<?php
							$menu_args = array(
								"menu_class" => "nav-links",
								"container" => "nav",
								"container_class" => "main-nav",
								"theme_location" => "header",
							);
							wp_nav_menu( $menu_args );
						?>
					</div>
				</div>
			</div>
			<button class="nav-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
		</header>
