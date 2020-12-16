<section class="gc-news">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<?php if( get_field('news_section_title') ): ?>
				<h2 class="gc-section-title">
					<?php the_field('news_section_title'); ?>
				</h2>
				<?php endif; ?>
			</div>
		</div>
		<!-- /.grid-x grid-margin-x -->

		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<ul class="gc-news-list">
					<?php $news = new WP_Query('cat=1&orderby=date&posts_per_page=4'); ?>

					<?php while ($news->have_posts()) : $news->the_post(); ?>
					<li class="gc-news-list-item">
						<div class="gc-news-img-wraper">
							<div class="gc-news-category">
								<a href="<?php echo get_page_link( 10 ); ?>">Noticias</a>
							</div>

							<?php the_post_thumbnail('news_thumb', array('class' => 'gc-news-img')); ?>
							<a class="gc-news-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="gc-news-date"><?php echo get_the_date('n.j.Y'); ?></p>
						</div>
						<!-- /.gc-news-img-wraper -->

						<div class="gc-news-content">
							<a class="gc-news-small-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="gc-news-small-date"><?php echo get_the_date('n.j.Y'); ?></p>
							<div class="gc-news-description">
								<?php echo excerpt(20); ?>
								<a class="cg-front-news-read-more" href="<?php the_permalink(); ?>" target="_blank">Leer mas</a>
							</div>
						</div>
						<!-- /.gc-news-content -->
					</li>
					<!-- /.gc-news-list-item -->

					<?php wp_reset_postdata(); ?>
					<?php endwhile; ?>
				</ul>
				<!-- /.gc-news-list -->

				<a class="gc-news-category-link" href="<?php echo get_page_link( 1 ); ?>">Ver todo</a>
			</div>
			<!-- /.cell small-12 medium-4 large-4 -->

			<div class="cell small-12 medium-4 large-4">
				<ul class="gc-news-list">
					<?php $news = new WP_Query('cat=1309&orderby=date&posts_per_page=4'); ?>

					<?php while ($news->have_posts()) : $news->the_post(); ?>
					<li class="gc-news-list-item">
						<div class="gc-news-img-wraper">
							<div class="gc-news-category">
								<a href="<?php echo get_page_link( 14 ); ?>">Video</a>
							</div>

							<?php the_post_thumbnail('news_thumb', array('class' => 'gc-news-img')); ?>
							<a class="gc-news-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="gc-news-date"><?php echo get_the_date('n.j.Y'); ?></p>
						</div>
						<!-- /.gc-news-img-wraper -->

						<div class="gc-news-content">
							<a class="gc-news-small-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="gc-news-small-date"><?php echo get_the_date('n.j.Y'); ?></p>
							<div class="gc-news-description">
								<?php echo excerpt(20); ?>
								<a class="cg-front-news-read-more" href="<?php the_permalink(); ?>" target="_blank">Leer mas</a>
							</div>
						</div>
						<!-- /.gc-news-content -->
					</li>
					<!-- /.gc-news-list-item -->

					<?php wp_reset_postdata(); ?>
					<?php endwhile; ?>
				</ul>
				<!-- /.gc-news-list -->

				<a class="gc-news-category-link" href="<?php echo get_page_link( 1309 ); ?>">Ver todo</a>
			</div>
			<!-- /.cell small-12 medium-4 large-4 -->

			<div class="cell small-12 medium-4 large-4">
				<ul class="gc-news-list">
					<?php $news = new WP_Query('cat=14&orderby=date&posts_per_page=4'); ?>

					<?php while ($news->have_posts()) : $news->the_post(); ?>
					<li class="gc-news-list-item">
						<div class="gc-news-img-wraper">
							<div class="gc-news-category">
								<a href="<?php echo get_page_link( 12 ); ?>">Publicaciones</a>
							</div>

							<?php the_post_thumbnail('news_thumb', array('class' => 'gc-news-img')); ?>
							<a class="gc-news-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="gc-news-date"><?php echo get_the_date('n.j.Y'); ?></p>
						</div>
						<!-- /.gc-news-img-wraper -->

						<div class="gc-news-content">
							<a class="gc-news-small-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="gc-news-small-date"><?php echo get_the_date('n.j.Y'); ?></p>
							<div class="gc-news-description">
								<?php echo excerpt(20); ?>
								<a class="cg-front-news-read-more" href="<?php the_permalink(); ?>" target="_blank">Leer mas</a>
							</div>
						</div>
						<!-- /.gc-news-content -->
					</li>
					<!-- /.gc-news-list-item -->

					<?php wp_reset_postdata(); ?>
					<?php endwhile; ?>
				</ul>
				<!-- /.gc-news-list -->

				<a class="gc-news-category-link" href="<?php echo get_page_link( 14 ); ?>">Ver todo</a>
			</div>
			<!-- /.cell small-12 medium-4 large-4 -->
		</div>
		<!-- /.grid-x grid-margin-x -->
	</div>
	<!-- /.grid-container -->
</section>
<!-- /.gc-news -->
