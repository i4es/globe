<section class="gc-map">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<?php if( get_field('map_section_title') ): ?>
				<h2 class="gc-section-title">
					<?php the_field('map_section_title'); ?>
				</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="grid-x">
		<div class="cell">
			<div class="google-map"></div>
		</div>
	</div>
</section>
