<?php
/**
 * Template Name: Contato
 *
 * @package Rak_Logístics
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner" data-speed="10" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
			  <div class="banner-content">
					<div class="container">
						<?php echo $banner_text; ?>
					</div>
				</div>
			</section>
			<section id="contact">
				<div class="container-fluid contact-container">
					<div class="row">
						<div class="col-sm-6 contact-col">
							<div class="contact-content">
								<?php
									while ( have_posts() ) : the_post();
										the_content();
									endwhile; // End of the loop.
								?>
							</div>
						</div>
						<div class="col-sm-6 contact-col">
							<div class="map-box">
								<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Rua%20Ricardo%20Dias%20Alves%2C%20265%20-%20Terminal%20Intermodal%20de%20Cargas%20(Tic)%2C%20Campinas%20-%20SP%2C%20Brasil&key=AIzaSyB8-ehBLH2xsjtPJBhDzLDt-UV1al4gpL0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
