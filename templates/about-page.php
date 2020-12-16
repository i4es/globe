<?php
/*
Template Name: About page
*/
get_header(); ?>

<section class="gc-about-page">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-12 large-12">
				<h1 class="gc-page-title"><?php the_title();?></h1>
			</div>

			<div class="cell">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
