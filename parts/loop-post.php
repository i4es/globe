<!-- BEGIN of Post -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'preview preview--' . get_post_type() ); ?>>
	<div class="grid-x grid-margin-x">

		<div class="medium-6 small-12 cell text-center medium-text-left gc-search-post">
			<?php if ( has_post_thumbnail() ) : ?>
			<a class="gc-search-post__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'medium', array( 'class' => 'preview__thumb' ) ); ?>
			</a>
			<?php endif; ?>
			<div class="cell auto gc-search-post__content">
				<h3 class="preview__title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h3>
				<?php if ( is_sticky() ) : ?>
					<span class="secondary label preview__sticky"><?php _e( 'Sticky', 'foundation' ); ?></span>
				<?php endif; ?>
				<div class="preview__excerpt">
					<?php the_excerpt(); // Use wp_trim_words() instead if you need specific number of words ?>
				</div>

			</div>
		</div>

	</div>
</article>
<!-- END of Post -->
