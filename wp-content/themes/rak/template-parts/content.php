<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rak_Logístics
 */
 
// Get page thumbnail and use for background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

/**
 * On "Setores que Atendemos" box we'll use WP tags system to
 * target each sector. To make this we will use the 
 * $tag->slug as a CSS class and the $tag->name as a the name 
 * of the sector 
 */
 
//Get post Tags
$post_tags = get_the_tags();
 
?>

<section class="parallax banner post-banner" data-speed="10" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php the_post_thumbnail_url("full"); ?>) no-repeat center 0">
  <!-- Empty -->
</section>

<section id="post">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-md-5">
					<div class="entry-content">
						<?php
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue lendo %s <span class="meta-nav">&rarr;</span>', 'rak' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );
						?>
					</div><!-- .entry-content -->
				</div>
				<?php if(has_tag()): ?>
				<div class="col-md-offset-1 col-md-6">
					<div class="setores-wrapper">
						<h2>Setores que Atendemos</h2>
						<div class="row">
							<?php
								// Using foreach to loop through $post_tags array.
								foreach($post_tags as $tag) { ?>
								<div class="col-sm-6">
									<div class="setor-box clearfix">
										<i class="rak rak-<?php echo $tag->slug;?>"></i>
										<p><?php echo $tag->name; ?></p>
									</div>
								</div>	
								
								<?php
								// End Loop
								}
							?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-12">
					<div class="return-box">
						<a href="<?php echo esc_html(home_url("/servicos")); ?>" title="Serviços" class="return-btn">Voltar</a>
					</div>
				</div>
			</div>
		</article><!-- #post-## -->
	</div>
</section>
