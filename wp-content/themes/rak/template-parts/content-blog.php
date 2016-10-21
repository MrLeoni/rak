<?php
/**
 * Template part for displaying a custom blog.
 *
 * @package Rak_Logístics
 */
 
 // Making args for querying posts
 $blog_args = array(
	"post_type"	=> "post",
 );
 // Querying Blog posts
 $blog_query = new WP_Query($blog_args);
 
?>

<div class="row">
	<?php
		// If $blog_query have any posts, display them
		if($blog_query->have_posts()):
			// Start Loop to display $blog_query
			while($blog_query->have_posts()): $blog_query->the_post(); ?>
				<div class="col-sm-6 col-md-4">
					<div class="post-wrapper">
						<div class="post-thumb-box">
							<?php the_post_thumbnail("large"); ?>
						</div>
						<div class="post-content-box">
							<?php
								the_title("<h4>", "</h4>");
								the_excerpt();
							?>
							<a href="<?php the_permalink(); ?>" class="read-more fill" title="<?php get_the_title(); ?>">Ler Mais</a>
						</div>
					</div>
				</div>
			<?php // End of Loop
			endwhile;
			// Reset post data.
			wp_reset_postdata();
		// Else, fallback to "content-none.php"
		else:
			get_template_part("template-parts/content", "none");
		// End If
		endif;
	?>
</div>