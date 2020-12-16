<?php
/**
 * Template Name: Products page
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
</section>

<?php get_footer(); ?>
