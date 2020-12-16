<section class="gc-video">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<?php if( get_field('video_section_title') ): ?>
				<h2 class="gc-section-title">
					<?php the_field('video_section_title'); ?>
				</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="grid-x">
		<div class="cell">
			<?php if( have_rows('video_section_id') ): ?>
			<div class="gc-video-slider variable-width">
				<?php  while ( have_rows('video_section_id') ) : the_row();
					$videoId = get_sub_field('video_id')
				?>
				<div><div id="<?php echo $videoId ?>" class="gc-video-slider__slide youtube" style="width: 100%; height: 356px;"></div></div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>





