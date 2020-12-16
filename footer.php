	<?php
/**
 * Footer
 */
?>

<?php

global $blog_id ;
  if ( in_array($blog_id, array(1,2,3,4,5,7,8,10,16,19,20,23,34,22,18,21,30,35))){ //subdomains where counter output

    ?>

    <script>
		window.setTimeout(function() {
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
          _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
          $.src="<?php $zendesk = globecore_get(); print_r ($zendesk[9]);?>";z.t=+new Date;$.
          type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");


		}, 5000); //time’s in milliseconds - 30 seconds = 30000
    </script>

    <?php }
?>

</main>
<!-- /.gc-main -->
<!-- BEGIN of footer -->
<footer class="gc-footer">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="large-6 medium-6 small-12 cell">
				<div class="gc-footer-mnu-wrap">
					<h3 class="gc-footer__mnu-title">Products</h3>
					<?php
					if ( has_nav_menu( 'footer-menu' ) ) {
						wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'gc-footer-menu', 'depth' => 1 ) );
					}
					?>
				</div>

				<div class="button-wrap">
					<div class="catalog-container footer-btns">
						<?php
						if(ICL_LANGUAGE_CODE=='en'){
						?>
							<a target="blank" href="https://globecore.com/wp-content/cataloge/Oil-processing-equipment-PDF.pdf">
								<div class="catalog_btn"></div>
							</a>
						<?php }elseif(ICL_LANGUAGE_CODE=='es'){
						?>
							<a target="blank" href="https://globecore.com/wp-content/cataloge/Oil-processing-equipment-PDF-Spanish.pdf">
								<div class="catalog_btn"></div>
							</a>
						<?php
						}
						?>
					</div>
					<?php global $blog_id;

					if (in_array($blog_id, array(1))) { ?>
						<div class="sitemap-container sitemap footer-btns">
							<a href="https://globecore.com/sitemap.html">
								<div class="sitemap_btn"></div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="large-6 medium-6 small-12 cell gc-footer__right-wrap">
				<div class="gc-footer-contacts">
				<?php
					if(ICL_LANGUAGE_CODE=='en'){
				?>
					<h3 class="gc-footer-contacts__title">
						<a href="/contacts"><?php echo __('Contact us'); ?></a>
					</h3>
				<?php }elseif(ICL_LANGUAGE_CODE=='es'){
				?>
					<h3 class="gc-footer-contacts__title">
						<a href="/contacts"><?php echo __('Contáctenos'); ?></a>
					</h3>
				<?php }elseif(ICL_LANGUAGE_CODE=='sw'){
				?>
					<h3 class="gc-footer-contacts__title">
						<a href="/contacts"><?php echo __('Wasiliana nasi'); ?></a>
					</h3>
				<?php }
				?>

					<?php if( get_field('footer_adres', 'options') ): ?>
						<p><?php the_field('footer_adres', 'options'); ?></p>
					<?php endif; ?>

					<?php if( have_rows('footer_email', 'option') ): ?>
						<?php while( have_rows('footer_email', 'option') ): the_row(); ?>
						<span>Email: </span><a class="gc-footer-contacts__mail" href="mailto:<?php the_sub_field('footer_email_adress'); ?>"><?php the_sub_field('footer_email_adress'); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<?php if(ICL_LANGUAGE_CODE=='es'): ?>
					<div class="gc-footer-sub-form-wrap">
						<h3>APRENDA SOBRE LOS RECORTES DE PRECIOS INSCRIBIÉNDOSE A LAS NOTICIAS.</h3>
						<?php echo do_shortcode('[newsletter_signup_form id=3]'); ?>
					</div>
					<?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
					<div class="gc-footer-sub-form-wrap">
						<h3>En savoir plus sur la réduction des prix en vous abonnant aux nouvelles</h3>
						<?php echo do_shortcode('[newsletter_signup_form id=5]'); ?>
					</div>
					<?php elseif(ICL_LANGUAGE_CODE=='pt-pt'): ?>
					<div class="gc-footer-sub-form-wrap">
						<h3>Descubra primeiro sobre os nossos descontos,subscrevendo-se  na nossa página de notícias</h3>
						<?php echo do_shortcode('[newsletter_signup_form id=4]'); ?>
					</div>
					<?php elseif(ICL_LANGUAGE_CODE=='sw'): ?>
					<div class="gc-footer-sub-form-wrap">
						<h3>Jifunze kuhusu upunguzaji wa bei kupitia kujiandikisha kupokea habari</h3>
						<?php echo do_shortcode('[newsletter_signup_form id=4]'); ?>
					</div>
					<?php else: ?>
					<div class="gc-footer-sub-form-wrap">
						<h3>Learn about price reduction by subscribing to news</h3>
						<?php echo do_shortcode('[newsletter_signup_form id=1]'); ?>
					</div>
					<?php endif; ?>

                    <div class="gc-footer-social-container">
                        <?php if(ICL_LANGUAGE_CODE=='es'){ ?>
                            <h3 class="gc-footer-contacts__title">Síguenos</h3>
                        <?php }elseif(ICL_LANGUAGE_CODE=='pt-pt'){ ?>
                            <h3 class="gc-footer-contacts__title">Gostou do post? Diga a seus amigos sobre ele</h3>
                        <?php }elseif(ICL_LANGUAGE_CODE=='sw'){ ?>
                            <h3 class="gc-footer-contacts__title">Tufuat</h3>
                        <?php }else{ ?>
                            <h3 class="gc-footer-contacts__title">Follow us</h3>
                        <?php } ?>
                        <ul class="gc-footer-social-list">
                            <li class="gc-footer-social-list__item">
                                <a class="gc-footer-social-list__item--linkedin" href="https://www.linkedin.com/company/globecore#" target="_blank"><i class="fab
                                    fa-linkedin"></i></a>
                            </li>
                            <li class="gc-footer-social-list__item">
                                <a class="gc-footer-social-list__item--facebook" href="https://www.facebook.com/GlobecoreGmbH/" target="_blank"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="gc-footer-social-list__item">
                                <?php if(ICL_LANGUAGE_CODE=='es'){ ?>
                                    <a class="gc-footer-social-list__item--youtube" href="<?php $youtube_video_es =
                                        globecore_get(); print_r
                                    ($youtube_video_es[20]);?>" target="_blank"><i class="fab fa-youtube"></i></a>
                                <?php } elseif (ICL_LANGUAGE_CODE=='pt-pt') {?>
                                    <a class="gc-footer-social-list__item--youtube" href="<?php $youtube_video_pt =
                                        globecore_get(); print_r
                                    ($youtube_video_pt[21]);?> target="_blank""><i class="fab fa-youtube"></i></a>
                                <?php } else { ?>
                                    <a class="gc-footer-social-list__item--youtube" href="<?php $youtube_video =
                                        globecore_get(); print_r ($youtube_video[6]);
                                    ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                                <?php } ?>

                            </li>
                            <li class="gc-footer-social-list__item">
                                <a class="gc-footer-social-list__item--twitter" href="https://twitter.com/GlobecoreCom" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>

			</div>
		</div>
		<div class="grid-x grid-margin-x gc-footer-copy-box">
			<div class="large-4 medium-4 small-12 cell">
				<?php if( get_field('footer_copyright', 'options') ): ?>
				<div class="gc-footer__copy">
					<p>Copyright by -<br><span><?php echo date('Y'); ?> © <?php the_field('footer_copyright', 'options') ?></span></p>
				</div>
				<?php endif; ?>
			</div>
			<div class="large-4 medium-4 small-12 cell">
				<div class="gc-footer__logo">
					<h1><?php show_custom_logo(); ?></h1>
				</div>
			</div>
			<div class="large-4 medium-4 small-12 cell">
				<div class="gc-footer__iso">
					<p>ISO</p>
					<p>9001:2008</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- END of footer -->
<?php google_counter ();  ?>
<?php wp_footer(); ?>
</body>
</html>
