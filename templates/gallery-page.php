<?php
/*
Template Name: Gallery page
*/
get_header(); ?>

<section class="gc-gallery-page">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-12 large-12">
				<h1 class="gc-page-title"><?php the_title();?></h1>
			</div>

			<div class="cell gc-gallery-section small-12 medium-12 large-12">
				<?php $images = get_field('images_gallery'); ?>
				<?php if( $images ): ?>
					<div class="gc-gallery grid-x grid-margin-x">
						<?php foreach( $images as $image ): ?>
							<a class="gc-gallery-link" href="<?php echo $image['url']; ?>" data-fancybox="images"><img class="gc-gallery-img" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"></a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>
