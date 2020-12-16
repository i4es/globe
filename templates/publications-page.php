<?php
/**
 * Template Name: Publications page
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<section class="gc-news">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-12 large-12">
				<h1 class="gc-page-title"><?php the_title();?></h1>
			</div>

			<div class="cell small-12 medium-12 large-8">
				<article class="gc-news">
					<div class="gc-form-wrap">
						<form action="" method="post" class="gc-filter_form" >
							<ul class="gc-form-list">
								<li class="gc-form-list__item">
									<?php if(ICL_LANGUAGE_CODE=='es'){
										echo 'Año';
									} elseif(ICL_LANGUAGE_CODE=='pt-pt'){
										echo 'Ano';
									} elseif(ICL_LANGUAGE_CODE=='sw'){
										echo 'Mwaka';
									}	else {
										echo 'Year';
									} ?>
									<ul class="filter-submenu year-list">
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2020">
												<span>2020</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2019">
												<span>2019</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2018">
												<span>2018</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2017">
												<span>2017</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2016">
												<span>2016</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2015">
												<span>2015</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2014">
												<span>2014</span>
											</label>
										</li>
										<li>
											<label>
												<input name="gc_year" type="checkbox" value="2013">
												<span>2013</span>
											</label>
										</li>
									</ul>
								</li>

								<?php $cats = get_categories(array(
									'exclude'=>'14, 1349',
								)); ?>
								<li class="gc-form-list__item">
									<?php if(ICL_LANGUAGE_CODE=='es'){
											echo 'Categoría';
									}	elseif(ICL_LANGUAGE_CODE=='pt-pt'){
											echo 'Categoria';
									}	elseif(ICL_LANGUAGE_CODE=='sw'){
											echo 'Kategoria';
									}	else {
											echo 'Category';
									} ?>
									<?php if(!empty($cats)) : ?>
									<ul class="filter-submenu category-list">
										<?php foreach ($cats as $cat) : ?>
										<li>
											<label>
												<input name="cats[]" type="checkbox" class="checkbox" value="<?php echo $cat->slug ?>" />
												<span>
												<?php echo $cat->name ?>
												</span>
											</label>
										</li>
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>
								</li>

								<li class="gc-form-list__item">
									<?php if(ICL_LANGUAGE_CODE=='es'){
											echo 'Nuevos';
									}	elseif(ICL_LANGUAGE_CODE=='pt-pt'){
											echo 'Mais recente';
									}	elseif(ICL_LANGUAGE_CODE=='sw'){
											echo 'Mpya';
									}	else {
											echo 'Newest';
									} ?>
									<ul class="filter-submenu sort-list">
										<li>
											<label>
												<input type="radio" name="gc_date" value="ASC" />
												<?php if(ICL_LANGUAGE_CODE=='es'){
													echo 'El viejo';
												} elseif(ICL_LANGUAGE_CODE=='pt-pt'){
													echo 'Mais antigo';
												} elseif(ICL_LANGUAGE_CODE=='sw') {
														echo'Nzee';
												} else {
													echo 'Oldest';
												} ?>
											</label>
										</li>
										<li>
											<label>
												<input type="radio" name="gc_date" value="DESC" />
												<?php if(ICL_LANGUAGE_CODE=='es'){
													echo 'Nuevos';
												} elseif(ICL_LANGUAGE_CODE=='pt-pt'){
													echo 'Mais recente';
												} elseif(ICL_LANGUAGE_CODE=='sw') {
													echo'Mpya';
												} else {
													echo 'Newest';
												} ?>
											</label>
										</li>
									</ul>
								</li>
							</ul>
						</form>
					</div>
					<!-- /.gc-form-wrap -->

					<div class="filter-content">
						<?php
						$filterArgs = array(
							'post_type'     => 'post',
							'post_per_page' => -1,
							'orderby'       => 'date',
							'order'         => $_POST['gc_date'],
							'date_query'    => array(
								array(
									'year' => 2018,
								),
							)
						);

						if(isset($_POST['cats']) && !empty($_POST['cats'])){
							$filterArgs['category__in'] = $_POST['cats'];
						}

						if(isset($_POST['gc_year']) && !empty($_POST['gc_year']))
							$filterArgs['date_query'] = array(
								array(
									'year' => $_POST['gc_year'],
								),
							);

						$cat_ids = implode(",", $_POST['cats']);

						$cats = " category='$cat_ids'";
						$year = " year='".$_POST['gc_year']."'";
						$date = " order='".$_POST['gc_date']."'";



						?>

						<?php wp_reset_postdata(); ?>

						<?php if(get_bloginfo('language')=='pt-PT')
						{
							echo do_shortcode('[ajax_load_more container_type="div" post_type="post" category="news" scroll="false" progress_bar="true" progress_bar_color="1f6ae1" button_loading_label="Carregando..."]');
						}	else {
							echo do_shortcode('[ajax_load_more container_type="div" post_type="post" category="publications" scroll="false" button_loading_label="Loading..."]');
						}
					?>

					</div>
				</article>
				<!-- /.gc-news -->
			</div>
			<!-- /.large-8 -->

			<div class="cell small-12 medium-12 large-4">
				<div class="gc-right-form">
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
	</div>
</section>
<!-- /.gc-news -->
<?php endwhile;?>
<?php get_footer(); ?>

