<?php if( get_field('text_block') ): ?>
<section class="gc-text-info">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <div class="gc-text-info-content">
                    <?php the_field('text_block'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="gc-products">
	<div class="grid-container clearfix">
		<div class="gid-x grid-margin-x">
			<div class="cell">
				<?php if( get_field('products_section_title') ): ?>
				<h2 class="gc-section-title">
					<?php the_field('products_section_title'); ?>
				</h2>
				<?php endif; ?>
			</div>
		</div><!-- /.gid-x grid-margin-x -->

		<?php if( have_rows('add_products_category') ): ?>
			<?php while( have_rows('add_products_category') ): the_row();?>

			<div class="gc-products-row <?php if(get_sub_field('gc_half_row') == true) : echo 'gc-half-row'; endif; ?>">
				<h3 class="gc-products__category-title"><?php the_sub_field('products_category_title') ?></h3>

				<div class="gc-products__cards-list grid-x">
					<?php if( have_rows('add_products_card') ): ?>

						<?php while( have_rows('add_products_card') ): the_row(); ?>
						<?php
							$size = "medium";
							$product_image = get_sub_field('add_card_image');
							$attach_image = wp_get_attachment_image_src( $product_image, $size );
							$alt_text = get_post_meta($product_image , '_wp_attachment_image_alt', true);
						?>
					<div class="gc-products__card-wrapper">
						<div class="gc-products__card-inner">
							<a href="<?php the_sub_field('add_page_link') ?>" class="gc-products__link">
								<i class="fa fa-external-link" aria-hidden="true"></i>
								<img src="<?php echo $attach_image[0];?>" alt="<?php echo $alt_text; ?>">
							</a>
							<div class="gc-products__card-title"><a href="<?php the_sub_field('add_link') ?>"><?php the_sub_field('add_card_title')?></a></div>
						</div>
					</div>
						<?php endwhile;?>
					<?php endif; ?>
				</div>

			</div><!-- /.gc-products-row -->

			<?php endwhile; ?>
		<?php endif;  ?>

	</div><!-- /.grid-container -->
</section><!-- /.gc-products -->
