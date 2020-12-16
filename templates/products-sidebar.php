<?php
/**
 * Template Name: Products sidebar
 */
?>
<?php get_header(); ?>

<section class="gc-products-page">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-12 large-12">
				<h1 class="gc-page-title"><?php the_title();?></h1>
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell large-8 medium-12 small-12">
				<?php if( have_rows('product_category') ): ?>
					<?php while( have_rows('product_category') ): the_row();?>

						<?php $catTitle = get_sub_field('cat_product_title'); ?>

						<?php if($catTitle): ?>
						<div class="cell">
							<h3 class="gc-products__category-title"><?php echo $catTitle ?></h3>
						</div>
						<?php endif; ?>

						<div class="gc-products-row grid-x grid-margin-x <?php if(get_sub_field('half_row') == true) : echo 'gc-half-row'; endif; ?>">

							<?php if( have_rows('add_product_item') ): ?>

								<?php while( have_rows('add_product_item') ): the_row(); ?>
									<?php
									$size = "medium";
									$product_image = get_sub_field('product_image');
									$attach_image = wp_get_attachment_image_src( $product_image, $size );
									$alt_text = get_post_meta($product_image , '_wp_attachment_image_alt', true);
									?>
									<div class="gc-products__card-wrapper">
										<div class="gc-products__card-inner">
											<a href="<?php the_sub_field('add_link') ?>" class="gc-products__link">
												<i class="fa fa-external-link" aria-hidden="true"></i>
												<img src="<?php echo $attach_image[0];?>" alt="<?php echo $alt_text; ?>">
											</a>
											<div class="gc-products__card-title"><a href="<?php the_sub_field('add_link') ?>"><?php the_sub_field('product_title')?></a></div>
										</div>
									</div>
								<?php endwhile;?>
							<?php endif; ?>

						</div><!-- /.gc-products-row -->

					<?php endwhile; ?>
				<?php endif;  ?>
			</div>
			<div class="cell large-4 medium-12 small-12">
				<div class="gc-right-form">
					<?php if(ICL_LANGUAGE_CODE=='es'): ?>
						<?php echo do_shortcode('[contact-form-7 id="12933" title="RIGHT_ES"]'); ?>
						<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
							<?php echo do_shortcode('[contact-form-7 id="15856" title="RIGHT_FR"]'); ?>
						<?php elseif(ICL_LANGUAGE_CODE=='pt-pt'): ?>
							<?php echo do_shortcode('[contact-form-7 id="21017" title="RIGHT_PT"]'); ?>
						<?php elseif(ICL_LANGUAGE_CODE=='sw'): ?>
							<?php echo do_shortcode('[contact-form-7 id="26577" title="RIGHT_SW"]'); ?>
						<?php else: ?>
							<?php echo do_shortcode('[contact-form-7 id="3552" title="RIGHT"]'); ?>
					<?php endif; ?>

				</div>

				<?php $rel_eq = get_field('add_rel_eq');
					if($rel_eq): ?>
					<div class="related_post">
						<h3 style="text-align: center;font-size: 25px;">
						<?php if(ICL_LANGUAGE_CODE=='es') {
							echo 'Equipo GlobeCore';
						} elseif(ICL_LANGUAGE_CODE=='pt-pt') {
							echo 'Equipamentos GlobeCore';
						} else {
							echo 'GlobeCore Equipment';
						} ?>
						</h3>
						<?php foreach ($rel_eq as $eq):  get_the_post_thumbnail($eq->ID);?>
						<div class="related_ch autoplay">
							<a href="<?php echo get_permalink($eq->ID)?>"><?php echo   get_the_post_thumbnail($eq->ID ,'medium') ; ?> <?php echo mb_strimwidth( get_the_title($eq->ID), 0, 50, '...' );?></a>
						</div>
						<?php endforeach; ?>
					</div><!-- /.related_post -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
