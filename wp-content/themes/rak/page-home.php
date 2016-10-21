<?php
/**
 * Template Name: Home
 *
 * @package Rak_Logístics
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

/*===============================
 Get ACF Fields
================================*/
 
// Banner Field
$banner_text = get_field("banner-text");

// Contact Fields
$tel_text = get_field("contact-tel-text");
$tel_icon = get_field("contact-tel-icon");

$local_text = get_field("contact-local-text");
$local_icon = get_field("contact-local-icon");

$hour_text = get_field("contact-hour-text");
$hour_icon = get_field("contact-hour-icon");

$email_text = get_field("contact-email-text");
$email_icon = get_field("contact-email-icon");

//Header Sections
$section_title_01 = get_field("home-section-01-title");
$section_subtitle_01 = get_field("home-section-01-subtitle");

$section_title_02 = get_field("home-section-02-title");
$section_subtitle_02 = get_field("home-section-02-subtitle");

// Home Content
$home_img = get_field("home-img");


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="parallax banner home-banner" data-speed="10" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
				<div class="banner-content">
					<div class="container">
			  		<?php echo $banner_text; ?>
			  	</div>
			  </div>
			</section>
			<section id="home-hero">
				<div class="container">
					<div class="home-contact hidden-xs">
						<div class="home-contact-wrapper">
							<div class="row">
								<div class="col-sm-12">
									<div class="home-contact-content-box">
										<div class="row">
											<div class="col-sm-3 clearfix">
												<i class="<?php echo $tel_icon; ?>" aria-hidden="true"></i>
												<span><?php echo $tel_text;	?></span>
											</div>
											<div class="col-sm-3 clearfix border-left-right">
												<i class="<?php echo $local_icon; ?>" aria-hidden="true"></i>
													<span><?php echo $local_text; ?></span>
											</div>
											<div class="col-sm-3 clearfix border-right">
												<i class="<?php echo $hour_icon; ?>" aria-hidden="true"></i>
													<span><?php echo $hour_text; ?></span>
											</div>
											<div class="col-sm-3 clearfix">
												<i class="<?php echo $email_icon; ?>" aria-hidden="true"></i>
													<span><?php echo $email_text; ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="blog">
				<div class="container">
					<div class="row">
						<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
							<div class="section-title first-section-title">
								<h2><?php echo $section_title_01; ?></h2>
								<p><?php echo $section_subtitle_01; ?></p>
								<div class="follow-icon">
									<span class="follow-bar">barra</span>
									<span>ponto</span>
									<span>ponto</span>
									<span>ponto</span>
									<span>ponto</span>
									<i class="ion-ios-arrow-down" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
					<?php get_template_part("template-parts/content", "blog"); ?>
				</div>
			</section>
			
			<section id="home-content">
				<div class="home-content-wrapper clearfix">
					<div class="home-content-img-box hidden-sm hidden-xs">
						<img src="<?php echo $home_img["url"]; ?>" alt="<?php echo $home_img["alt"]; ?>">
					</div>
					<div class="home-content-content-box">
						<?php
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop.
						?>
					</div>
				</div>
			</section>
			
			<section id="about">
				<div class="container">
					<div class="row">
						<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
							<div class="section-title first-section-title">
								<h2><?php echo $section_title_02; ?></h2>
								<p><?php echo $section_subtitle_02; ?></p>
								<div class="follow-icon">
									<span class="follow-bar">barra</span>
									<span>ponto</span>
									<span>ponto</span>
									<span>ponto</span>
									<span>ponto</span>
									<i class="ion-ios-arrow-down" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
					<?php get_template_part("template-parts/content", "about"); ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
