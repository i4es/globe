<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Set up Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<!-- Remove Microsoft Edge's & Safari phone-email styling -->
	<meta name="format-detection" content="telephone=no,email=no,url=no">

	<!-- Google site verification -->
	<meta name="google-site-verification" content="Y4-JXZLXiRMCn1BUAw8pQdRtcmk3uhmN_1fBgMtPIpE" />

	<!-- Add external fonts below (GoogleFonts / Typekit) -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap">


	<?php wp_head(); ?>
</head>

<body <?php body_class('no-outline'); ?>>
<?php wp_body_open(); ?>

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->

<!-- BEGIN of header -->
<header class="header gc-header">
	<div class="grid-container menu-grid-container">
		<div class="grid-x gc-header-row">
			<div class="gc-header-logo-wrap small-order-1 medium-order-1 cell">
				<div class="logo gc-logo text-center medium-text-left">
					<h1><?php show_custom_logo(); ?></h1>
				</div>
			</div>
			<!-- /.large-2 -->
			<div class="gc-header-menu-wrap small-order-3 medium-order-2 cell">
				<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
					<div class="title-bar hide-for-medium" data-responsive-toggle="main-menu" data-hide-for="medium">
						<button class="menu-icon" type="button" data-toggle aria-label="Menu" aria-controls="main-menu"><span></span></button>
					</div>
					<nav class="top-bar" id="main-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'menu_class'     => 'menu header-menu gc-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
							'walker'         => new Foundation_Navigation()
						) ); ?>
					</nav>
				<?php endif; ?>
			</div>
			<!-- /.large-8 -->
			<div class="gc-header-search-wrap small-order-2 medium-order-3 cell">
				<div class="gc-search">
					<div class="gc-dropdown">
						<?php do_action('wpml_add_language_selector'); ?>

						<?php $siteUrl = $_SERVER['SERVER_NAME'];
							if ($siteUrl == "globecore.com"): ?>

							<a class="gc-dropdown-link" href="https://www.globecore.de" rel="nofollow">
								<img class="wpml-ls-flag" src="<?php bloginfo('stylesheet_directory'); ?>/images/de.png" alt="de" title="DE">
								<span class="wpml-ls-display">DE</span>
							</a>
						<?php endif; ?>
					</div>
					<!-- /.gc-dropdown -->

					<i class="fa fa-search gc-header__search-icon" id="search-icon" aria-hidden="true"></i>

					<!-- search modal -->
					<div id="search">
						<button type="button" class="close">×</button>
						<?php get_search_form(); ?>
					</div>
					<!-- end search modal -->

				</div>
				<!-- /.gc-serch -->
			</div>
			<!-- /.large-2 -->
		</div>
		<!-- /.grid-x -->
	</div>
	<!-- /.grid-container -->
</header>
<!-- END of header -->
<main class="gc-main">
	<div class="grid-container">
		<div class="gc-breadcrumbs">
			<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
		</div> <!-- /.breadcrumbs -->
	</div>
