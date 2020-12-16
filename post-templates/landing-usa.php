<?php
/*
Landing Page - USA
Template Name: Landing Page - USA
Template Post Type: post, page, product
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> style="margin-top:0!important;">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
        <link rel="stylesheet" href="https://globecore.com/wp-content/themes/globecore2016/css/lp-usa.css"/>
        <link rel="stylesheet" href="https://globecore.com/wp-content/themes/globecore2016/css/wow.css"/>
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script src="https://globecore.com/wp-content/themes/globecore2016/js/wow.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

<script>
jQuery(document).ready(function() {
    if( jQuery(window).width() < 781) {
		jQuery('video, .bg-1, .bg-2, .bg-3, .bg-4').remove();
	}
});
jQuery(document).ready(function(){
    jQuery( "input, textarea" ).click(function() {
		jQuery('form iframe').css('display', 'block');
    });
});
jQuery(document).ready(function(){
    new WOW().init();
});
    // mobile remove
jQuery(document).ready(function(){
    var target = jQuery("span.over-span");
    jQuery("span.wpcf7-form-control-wrap").each(function(i) {
       jQuery(this).append(target[i]);
});
jQuery('form br').remove();
    });
  jQuery(document).ready(function(){
    jQuery(function() {
   jQuery('input').on('change', function() {
     var input = jQuery(this);
     if (input.val().length) {
       input.addClass('populated');
     } else {
       input.removeClass('populated');
     }
   });
    });
   setTimeout(function() {
     jQuery('#fname').trigger('focus');
   }, 500);
});

jQuery(document).ready(function($){
    function errorTime(){
        $('.wpcf7-response-output.wpcf7-validation-errors').fadeOut();
    }
    setTimeout(errorTime, 3500);
});
</script>
<header class="header full">
	<div class="pagewidth">

		<a href="/" class="logo_link">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="globecoreLogo" class="lp-usa-logo"/>
		</a>
	</div>
</header>

<body <?php body_class(); ?>>
	<main class="landing-a">
		<section class="lp-intro">

		</section>

		<section class="lp-features">
			<div class="grid-container">
				<h2 class="lp-section-title">Design Features</h2>
				<div class="small-12 medium-4 large-4">
					<div class="lp-features-box">
						<p class="lp-features-description">Customizable oil filtration trailers</p>
					</div>
				</div>
				<div class="small-12 medium-4 large-4">
					<div class="lp-features-box">
						<img class="lp-features-img" src="https://globecore.com/wp-content/themes/globecore_2020/images/landing-usa/tesla-coil-1.png" alt="tesla-coil">
						<p class="lp-features-description">Stationary use - near a transformer</p>
					</div>
				</div>
				<div class="small-12 medium-4 large-4">
					<div class="lp-features-box">
						<img class="lp-features-img" src="https://globecore.com/wp-content/themes/globecore_2020/images/landing-usa/cargo-trailer-1.png">
						<p class="lp-features-description">Compact easily transported models for use in small spaces</p>
					</div>
				</div>
			</div>
		</section>

		<section class="lp-products">
			<div class="grid-container">
				<div class="small-12 large-6 large-offset-6 lp-products-box">
					<h3 class="lp-products-title">Oil Regeneration Rigs (CMM-R)</h3>
					<p class="lp-products-description">Removal of acids and other products of oxidation.
						Improving of oil color along with oxidation stability and gas solubility.
						Reactivatable Adsorption Columns ranging from two (2) to thirty-two (32) in design with process cababilities up to 2,700 GPH (10,000 LPH)</p>
				</div>
				<div class="small-12 large-6 lp-products-box">
					<h3 class="lp-products-title">Oil Degassing Rigs (UVM)</h3>
					<p class="lp-products-description">Removes dissolved gasses. Removes free, emulsified and dissolved water.
						Removes particulate matter down to 0.5 microns. Safe and rapid heating of transformer oil for processing and filling.
						Compact and easy to use. Units processing range from 260 to 4,000 gals per hour (1,000 to 15,000 liters per hour)</p>
				</div>
				<div class="small-12 large-6 large-offset-6 lp-products-box">
					<h3 class="lp-products-title">Oil Filtration Rigs (CMM)</h3>
					<p class="lp-products-description">Removal of water (free, emulsified and dissolved) and particulate matter from insulating, hydraulic, gear and lubricating oils.
						Units processing range from 160 to 2600 gals per hour (600 to 10 000 liters per hour)</p>
				</div>
			</div>
		</section>

		<section class="lp-offers">
			<div class="grid-container">
				<h2 class="lp-section-title">Globecore Offers Oil Treatment Solutions</h2>
				<div class="small-12 large-4 large-offset-2">
					<ul class="lp-offers-list">
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".1s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Transformer oil</li>
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".2s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Silicone oil</li>
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".3s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Turbine oil</li>
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".4s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Hydraulic oil</li>
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".5s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Industrial oil</li>
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".5s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Cable oil</li>
						<li class="wow fadeInLeft lp-offers-list-item" data-wow-delay=".6s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Other dielectric fluids</li>
					</ul>
				</div>
				<div class="small-12 large-6 fadeInRight wow">
					<div class="lp-offers-img"></div>
				</div>
			</div>
		</section>

		<section class="lp-applications">
			<div class="grid-container">
				<h2 class="lp-section-title lp-section-title__margin">Primary Applications</h2>
				<div class="small-12 medium-6 large-3 lp-application-box">
					<img src="https://globecore.com/wp-content/uploads/2017/10/current1.png" alt="Power">
					<p class="lp-application-description">Power transformers</p>
				</div>
				<div class="small-12 medium-6 large-3 lp-application-box">
					<img src="https://globecore.com/wp-content/uploads/2017/10/wind-turbine1.png" alt="Turbine">
					<p class="lp-application-description">Wind turbines</p>
				</div>
				<div class="small-12 medium-6 large-3 lp-application-box">
					<img src="https://globecore.com/wp-content/uploads/2017/10/auto-flash2.png" alt="Circuit">
					<p class="lp-application-description">Circuit breakers</p>
				</div>
				<div class="small-12 medium-6 large-3 lp-application-box">
					<img src="https://globecore.com/wp-content/uploads/2017/10/switch.png" alt="Tap">
					<p class="lp-application-description">Tap changers</p>
				</div>
			</div>
		</section>

		<section class="lp-complete">
			<div class="grid-container">
				<h2 class="lp-section-title">Complete Oil Regeneration</h2>
				<div class="small-12 large-4 large-offset-2 fadeInUp wow">
					<h3 class="lp-section-subtitle">Acid number</h3>
					<p class="lp-complete-description">Acidity reduction from 0.28 mg·KOH/g to 0.01 mg·KOH/g as per ASTM method D-664</p>
				</div>
				<div class="small-12 large-6 fadeInUp wow">
					<div class="lp-acid-img"></div>
				</div>
			</div>

			<div class="grid-container">
				<div class="small-12 large-6 fadeInUp wow lp-img-order">
					<div class="lp-gas-img"></div>
				</div>
				<div class="small-12 large-6 fadeInUp wow lp-text-order">
					<h3 class="lp-section-subtitle">Gas Levels</h3>
					<p class="lp-complete-description">Gas Removal: From fully saturated with air (10 to 12% by volume) down to less than 0.1% by volume as per ASTM Method D-2945</p>
				</div>
			</div>

			<div class="grid-container">
				<div class="small-12 large-4 large-offset-2 fadeInUp wow">
					<h3 class="lp-section-subtitle">Dielectric strength</h3>
					<p class="lp-complete-description">Improvement in dielectric strength up to 75 kV</p>
				</div>
				<div class="small-12 large-6 fadeInUp wow">
					<div class="lp-dielectric-img"></div>
				</div>
			</div>

			<div class="grid-container">
				<div class="small-12 large-6 fadeInUp wow lp-img-order">
					<div class="lp-oil-img"></div>
				</div>
				<div class="small-12 large-6 fadeInUp wow lp-text-order">
					<h3 class="lp-section-subtitle">Oil color</h3>
					<p class="lp-complete-description">Improvement of color from 5 to 0.5 units as per ASTM method D-1500 and DIN 51578, ISO 2049</p>
				</div>
			</div>
		</section>

		<section class="lp-more">
			<h2 class="lp-section-title">More Than Just Equipment</h2>
			<div class="row fullWidth lp-more-box">
				<div class="small-12 large-4">
					<img src="https://globecore.com/wp-content/uploads/2017/10/cogwheels1.png" alt="">
					<p class="lp-more-description">Custom engineering solutions</p>
				</div>
				<div class="small-12 large-4">
					<img src="https://globecore.com/wp-content/uploads/2017/10/presentation1.png" alt="">
					<p class="lp-more-description">Training seminars for your technical team</p>
				</div>
				<div class="small-12 large-4">
					<img src="https://globecore.com/wp-content/uploads/2017/10/hands1.png" alt="">
					<p class="lp-more-description">Start-up and unit commissioning</p>
				</div>
			</div>
		</section>

		<section class="lp-contact">
			<div class="grid-container lp-contact-bg">
				<div class="small-12 medium-6 large-6">
					<div class="lp-form-box-left">
						<strong class="w-hours-title">WORKING HOURS:</strong>
					<ul class="hours">
						<li>Monday through Friday</li>
						<li>8:00am - 7:00pm</li>
					</ul>
					<ul class="contacts-form">
						<li class="li-manager">Bichurina Oksana</li>
						<li class="li-mail">e-mail: energie@globecore.de</li>
						<li class="li-skype">skype : mg5globecore_de</li>
						<li class="li-phone">+493021788825</li>
					</ul>
					</div>
				</div>
				<div class="small-12 medium-6 large-6">
					<div class="lp-form-box-right">
						<?php echo do_shortcode('[contact-form-7 id="7353" title="Landing USA"]'); ?>
					</div>
				</div>
			</div>
		</section>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</main>

    <div class="lp-footer" role="contentinfo">
        <div class="copyright pagewidth">
            <div class="col1">Copyright by –<br /><strong>2017 © GlobeCore GmbH</strong></div>
            <div class="col2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/small_logo.png" alt="GlobeCore"></div>
            <div class="col3">ISO<br />9001:2008</div>
        </div>
    </div>
<?php echo google_counter (); ?>

