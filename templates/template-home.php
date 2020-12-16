<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

	<!--HOME PAGE SLIDER-->
<?php home_slider_template(); ?>
	<!--END of HOME PAGE SLIDER-->

	<!-- Start of product section -->
<?php get_template_part( 'template-parts/section-products' ); ?>
	<!-- End of product section -->

	<!-- Start of news section -->
<?php if(ICL_LANGUAGE_CODE=='es') {
	get_template_part( 'template-parts/section-news-es' );
}	elseif(ICL_LANGUAGE_CODE=='pt-pt') {
	get_template_part( 'template-parts/news-pt' );
}	else {
	get_template_part( 'template-parts/section-news' );
}
?>
	<!-- End of news section -->

	<!-- Start of video section -->
<?php get_template_part( 'template-parts/section-video' ); ?>
	<!-- End of video section -->

	<!-- Start of about section -->
<?php get_template_part( 'template-parts/section-about' ); ?>
	<!-- End of about section -->

	<!-- Start of map section -->
<?php get_template_part( 'template-parts/section-map' ); ?>
	<!-- End of map section -->

	<!-- BEGIN of main content -->
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- END of main content -->

<?php get_footer(); ?>
