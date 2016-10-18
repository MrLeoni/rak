<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rak_Logístics
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<section class="error-404 not-found">
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-2 col-sm-8">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( '404', 'rak' ); ?></h1>
							</header><!-- .page-header -->
							<div class="page-content">
								<p><?php esc_html_e( 'Parece que a página que você tentou acessar não existe.', 'rak' ); ?></p>
								<p>Gostaria de ir para a <a class="home-link" href="<?php echo esc_html(home_url("/")); ?>" title="Home">Home</a>?</p>
							</div><!-- .page-content -->
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
