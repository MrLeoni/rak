<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rak_Logístics
 */

?>
<div class="row">
	<div class="col-sm-offset-1 col-sm-10">
		<section class="no-results not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Nada para mostrar por aqui...', 'rak' ); ?></h1>
			</header><!-- .page-header -->
		
			<div class="page-content">
				<?php
				if ( is_home() || is_front_page() ) : ?>
					
					<p><?php esc_html_e( 'Parece que no momento não temos conteúdo nessa área do site. Por favor, volte mais tarde', 'rak' ); ?></p>
					<?php
					
				else : ?>
					
					<p><?php esc_html_e( 'Parece que não encontramos o que você procurava.', 'rak' ); ?></p>
					<p>Gostaria de ir para a <a class="home-link" href="<?php echo esc_html(home_url("/")); ?>" title="Home">Home</a>?</p>
					
				<?php	endif; ?>
			</div><!-- .page-content -->
		</section><!-- .no-results -->
	</div>
</div>
