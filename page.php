<?php
/**
 * Page
 */
get_header(); ?>

	<section class="gc-single-product">
			<div class="grid-container">
				<div class="grid-x">
					<h1 class="gc-page-title"><?php the_title() ?></h1>
				</div>
				<!-- /.grid-x -->

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-8 large-8">
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>

						<div class="grid-x">
							<div class="gc-tabs">
								<ul class="tabs" data-tabs id="example-tabs">
								<?php if( have_rows('add_tab') ): ?>
									<?php while ( have_rows('add_tab') ) : the_row(); ?>
										<li class="tabs-title is-active">
											<a class="gc-tab-link" href="#tab-1"><?php the_sub_field('tab_title'); ?></a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php $counter = 2; ?>

								<?php if( have_rows('add_def_tab') ): ?>
									<?php while ( have_rows('add_def_tab') ) : the_row(); ?>
										<li class="tabs-title">
											<a class="gc-tab-link" href="#tab-<?php echo $counter++; ?>"><?php the_sub_field('tab_title'); ?></a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php $counter++; ?>

								<?php if( have_rows('add_video_tab') ): ?>
									<?php while ( have_rows('add_video_tab') ) : the_row(); ?>
										<li class="tabs-title">
											<a class="gc-tab-link" href="#tab-4"><?php the_sub_field('video_tab_title'); ?></a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>

								<?php if( have_rows('add_gallery_tab') ): ?>
									<?php while ( have_rows('add_gallery_tab') ) : the_row(); ?>
										<li class="tabs-title">
											<a class="gc-tab-link" href="#tab-5"><?php the_sub_field('gallery_tab_title'); ?></a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>

								<?php if( have_rows('add_price_tab') ): ?>
									<?php while ( have_rows('add_price_tab') ) : the_row(); ?>
										<li class="tabs-title">
											<a class="gc-tab-link" href="#tab-6">
											<?php	$geoip = geoip_detect2_get_info_from_current_ip();
											$country = $geoip->raw[ 'country' ][ 'iso_code' ];
											if ( 'UA' == $country && is_page('2540') ) {
												the_sub_field('price_tab_title');
											} elseif ('UA' == $country && is_page('1793')) {
												the_sub_field('price_tab_title');
											} elseif('UA' == $country && is_page('14269') ) {
												the_sub_field('price_tab_title');
											} elseif(ICL_LANGUAGE_CODE=='es') {
												echo 'Solicitud de precio';
											} elseif(ICL_LANGUAGE_CODE=='pt-pt') {
												echo 'Obter preço';
											} else {
												echo 'Get a Quote';
											}	?>
											</a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
								</ul>
								<!-- /.tabs -->
								<div class="tabs-content" data-tabs-content="example-tabs">
								<?php if( have_rows('add_tab') ): ?>
									<?php while ( have_rows('add_tab') ) : the_row(); ?>
										<div class="tabs-panel is-active" id="tab-1">
											<p><?php the_sub_field('tab_content'); ?></p>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php $counter = 2; ?>

								<?php if( have_rows('add_def_tab') ): ?>
									<?php while ( have_rows('add_def_tab') ) : the_row(); ?>
										<div class="tabs-panel" id="tab-<?php echo $counter++; ?>">
											<p><?php the_sub_field('tab_content'); ?></p>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php $counter ++; ?>

								<?php if( have_rows('add_video_tab') ): ?>
									<?php while ( have_rows('add_video_tab') ) : the_row(); ?>
										<div class="tabs-panel" id="tab-4">
											<div class="row fullWidth"><!-- Post video START -->
												<div class="small-12">
												<?php if (have_rows('add_video_id')) : ?>
													<div class="mobile-remove lazy-frame">
														<div class="gc-post-video-list" style="margin: 0 auto;">
														<?php while (have_rows('add_video_id')) : the_row(); ?>
															<div class="gc-single-video-box">
																<div id="<?php the_sub_field('video_id'); ?>" class="youtube-single" style="width: 100%; height: 500px;"></div>
															</div>
														<?php endwhile; ?>
														</div>
													</div>
												<?php endif; ?>
												</div>
											</div><!-- Post video END -->
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

								<?php if( have_rows('add_gallery_tab') ): ?>
									<?php while ( have_rows('add_gallery_tab') ) : the_row(); ?>
										<div class="tabs-panel" id="tab-5">
											<div class="gc-gallery-section small-12"><!-- Photo Gallery START -->
												<?php $images = get_sub_field('add_img'); ?>
												<?php if( $images ): ?>
												<div class="gc-gallery row">
												<?php foreach( $images as $image ): ?>
													<a class="gc-gallery-link" href="<?php echo $image['url']; ?>"><img class="gc-gallery-img" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"></a>
												<?php endforeach; ?>
												</div>
												<?php endif; ?>
											</div><!-- Photo Gallery END -->
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

								<?php if( have_rows('add_price_tab') ): ?>
									<?php while ( have_rows('add_price_tab') ) : the_row(); ?>
										<div class="tabs-panel" id="tab-6">
											<div id="confg" class="configurator_wraper">
												<?php echo get_template_part( 'template-parts/get_a_quote' ); ?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

								</div>
								<!-- /.tabs-content -->
							</div>
							<!-- /.gc-tabs -->
                            <div class="gc-shop-cart">
                                <?php the_content(); ?>
                            </div>
						</div>
					</div>
					<!-- /.large-8 -->

					<div class="cell small-12 medium-4 large-4">
						<div class="gc-right-form">
							<?php $urlFuelcleaning = $_SERVER['SERVER_NAME']; ?>
							<?php if(ICL_LANGUAGE_CODE=='es') {
									echo do_shortcode('[contact-form-7 id="12933" title="RIGHT_ES"]');
								} elseif(ICL_LANGUAGE_CODE=='fr') {
									echo do_shortcode('[contact-form-7 id="15856" title="RIGHT_FR"]');
								} elseif(ICL_LANGUAGE_CODE=='pt-pt') {
									echo do_shortcode('[contact-form-7 id="21017" title="RIGHT_PT"]');
								} elseif(ICL_LANGUAGE_CODE=='sw') {
									echo do_shortcode('[contact-form-7 id="26577" title="RIGHT_SW"]');
								} else {
									echo do_shortcode('[contact-form-7 id="3552" title="RIGHT"]');
								} ?>
						</div>
					</div>
					<!-- /.large-4 -->
				</div>
				<!-- /.grid-x -->
			</div>
		</section>
		<!-- /.page-single-product -->

<?php get_footer(); ?>
