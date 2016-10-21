<?php
/**
 * Template part for displaying a specific taxonomy term in "Complementos" post type.
 *
 * @package Rak_Logístics
 */
 
 // Make $args to display only posts from "Sobre" taxonomy term inside "Complementos" post type
 $about_args = array(
	"post_type"	=> "complementos",
	"orderby"	=> "modified",
	"tax_query"	=> array(array(
		"taxonomy"	=> "categoria",
		"field"	=> "slug",
		"terms" => "sobre",
	)),
 );
 // Querying About Posts
 $about_query = new WP_Query($about_args);
 
?>

<div class="row">
	
	<?php
	// If $about_query have any posts, display them
	if($about_query->have_posts()): ?>
		
		<div class="col-sm-6">
			<div class="about-post-wrapper clearfix">
			<?php
				// Making a integer number to track the position of the post
				$number = 0;
				// Start Loop
				while($about_query->have_posts()): $about_query->the_post(); 
				// Get post slug, to use as a JavaScript parameter to target elements
				$title = basename(get_permalink());
				
				// If the post is number 1 in query, display some informations.
				// Check CSS file to see changes.
				if($number === 0): ?>
					<div class="about-post-title active" data-title="<?php echo $title; ?>">
				<?php else: ?>
					<div class="about-post-title" data-title="<?php echo $title; ?>">
				<?php endif; ?>
						<?php the_title("<h4>","</h4>"); ?>
					</div>
					
				<?php 
				// If the post is number 1 in query, display some informations.
				// Check CSS file to see changes.
				if($number === 0): ?>
					<div id="<?php echo $title; ?>" class="about-post-content" style="display: block;">
				<?php else: ?>
					<div id="<?php echo $title; ?>" class="about-post-content">
				<?php endif; ?>
						<?php the_content(); ?>
					</div>
				<?php	$number++; // Iterate the $number.
				// End Loop
				endwhile;
				// Reset Post Data
				wp_reset_postdata();
			?>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="about-slider-wrapper">
				<ul class="about-slider">
					<?php
						// Using $about_query again to display the post thumbnail.
						// And use the thumbnails to make a slider
						while($about_query->have_posts()): $about_query->the_post(); ?>
							<li><?php the_post_thumbnail("large"); ?></li>	
						<?php endwhile;
						wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
		
	<?php // Else, fallback to "content-none.php"
	else:
		get_template_part("template-parts/content", "none");
	// End If
	endif;
	?>
	
</div>