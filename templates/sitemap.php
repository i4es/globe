<?php
/**
 * Template Name: Sitemap page
 */
?>
<?php get_header(); ?>

<?php
$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

$menuID = $menuLocations['header-menu']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location

?>
	<section class="gc-sitemap">
		<div class="grid-container">
			<div class="cell small-12 medium-12 large-12">
				<h1 class="gc-page-title"><?php the_title();?></h1>
			</div>

			<div class="grid-x grid-margin-x">
				<div class="cell small-12 medium-12 large-12">
					<?php
		                echo '<ul class="map-home-list">';

						foreach ( $primaryNav as $navItem ) {
							echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
						}
						echo '</ul>'
					?>
				</div>
			</div>
		</div>
		<!-- /.grid-container -->
	</section>
	<!-- /.page-single-product -->

<?php get_footer(); ?>
