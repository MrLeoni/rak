<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rak_Logístics
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
			  <!-- Empty -->
			</section>
			<section id="single">
				<?php
					while ( have_posts() ) : the_post(); ?>
						<div class="container">
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
						</div>
					<?php
					endwhile; // End of the loop.
				?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
