<?php
/**
 * Template Name: Home
 *
 * @package Rak_Logístics
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner home-banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
			  <!-- Empty -->
			</section>
			<section id="home">
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
