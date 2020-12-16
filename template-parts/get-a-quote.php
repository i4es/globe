<div class="price-form">
	<?php if(ICL_LANGUAGE_CODE=='es') {
		$price_form_es = globecore_get(); print_r ($price_form_es[18]);
	} elseif(ICL_LANGUAGE_CODE=='pt-pt') {
		echo do_shortcode('[contact-form-7 id="21018" title="Price Form PT"]');
	} else {
		$price_form = globecore_get(); print_r ($price_form[13]);
	} ?>
</div>

