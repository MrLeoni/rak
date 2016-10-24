<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rak_Logístics
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

// Banner Field
$banner_text = get_field("banner-text");

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
			  <div class="banner-content">
					<div class="container">
			  		<?php echo $banner_text; ?>
			  	</div>
			  </div>
			</section>
			<section id="single-page">
				<div class="container">
					<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
