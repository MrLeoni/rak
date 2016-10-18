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

<!-- Google Font -->
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