<section class="gc-about">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<?php if( get_field('about_section_title') ): ?>
				<h2 class="gc-section-title">
					<?php the_field('about_section_title'); ?>
				</h2>
				<?php endif; ?>
			</div>
		</div>

		<div class="grid-x margin-x">
			<div class="cell small-12">
				<div class="spoiler-container">
					<div class="up-spoiler"></div>
					<div class="spoiler-parent">
						<div class="spoiler-overlay"></div>
						<div class="spoiler-children">
							<?php if( have_rows('about_section_content') ): ?>
								<?php while( have_rows('about_section_content') ): the_row();
									$edit_content = get_sub_field('about_content');
									?>
									<?php echo $edit_content; ?>
								<?php endwhile; ?>
							<?php endif; ?>

						</div>
						<div class="spoiler-btn"><i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
