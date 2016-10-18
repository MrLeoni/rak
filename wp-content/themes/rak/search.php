<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Rak_Logístics
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="search">
				<div class="container">
					
					<?php
					if ( have_posts() ) : ?>
						<div class="row">
							<div class="col-sm-offset-2 col-sm-8">	
								<header class="page-header">
									<h1 class="page-title"><?php printf( esc_html__( 'Resultados para: %s', 'rak' ), '<span class="search-term">' . get_search_query() . '</span>' ); ?></h1>
								</header><!-- .page-header -->
							</div>
						</div>
						
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
						
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>
		
				</div>
			</section>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
