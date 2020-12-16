<?php
/*
Template Name: Configurator 6/7 page
*/
get_header(); ?>

<section class="gc-configurator-6-7">
    <div class="conf-left-box">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <h1 class="gc-page-title">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
        <div class="gc-single-product__img-wrap">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>

    <div class="conf-right-box">
        <?php echo do_shortcode('[ezfc id=\'1\' /]'); ?>
    </div>
</section>

<?php get_footer(); ?>
