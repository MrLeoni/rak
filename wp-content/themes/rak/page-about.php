<?php
/**
 * Template Name: Sobre
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
			<section id="about">
				<div class="parallax banner" data-speed="10" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
					<div class="banner-content">
						<div class="container">
							<?php echo $banner_text; ?>
							<i class="ion-chevron-down"></i>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="template-box">
						<?php get_template_part("template-parts/content", "about"); ?>
					</div>
				</div>
				<div class="about-page-content-box">
					<div class="container">
						<div class="row">
							<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">
								<?php
								while ( have_posts() ) : the_post();
									the_content();
								endwhile; // End of the loop.
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
