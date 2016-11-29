<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rak_Logístics
 */
 
$footer_post_args = array(
	"post_type" => "complementos",
	"posts_per_page" => 1,
	"tax_query" => array(array( "taxonomy" => "categoria", "field" => "slug", "terms" => "footer-news"))
);

$footer_post_query = new WP_Query( $footer_post_args );

?>

	</div><!-- #content -->
	
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="footer-img-box">
						<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/rak-logo.png" alt="RAK Logistics">
					</div>
				</div>
				<div class="col-md-offset-1 col-md-2">
					<?php
						$menu_args = array(
							"menu_class" => "footer-links",
							"container" => "div",
							"container_class" => "footer-content-box",
							"theme_location" => "footer",
						);
						wp_nav_menu( $menu_args );
					?>
				</div>
				<div class="col-md-offset-1 col-md-4">
					<div class="footer-content-box">
						<?php
							while($footer_post_query->have_posts()): $footer_post_query->the_post();
								the_content();
							endwhile;
							wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-img-box">
						<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/selo-iso.png" alt="Selo ISO 9001">
					</div>
				</div>
			</div>
		</div>
		<div class="copy clearfix">
			<p>RAK Logistics - Todos os direito reservados</p>
			<p class="delucca"><a href="http://agenciadelucca.com.br" title="Agência Delucca" target="_blank">AD</a></p>
		</div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/jquery-1.12.4.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/jquery.bxslider.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
