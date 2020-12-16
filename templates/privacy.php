<?php
/**
 * Template Name: Privacy page
 */
?>

<?php get_header(); ?>

<section class="gc-single-post">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-12 large-12">
                <h1 class="gc-page-title gc-single-post__title"><?php the_title();?></h1>
            </div>
            <!-- BEGIN of post content -->
            <div class="large-8 medium-8 small-12 cell">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="gc-single-post__img-wrap">
                                    <?php the_post_thumbnail( ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php the_content( '', true ); ?>
                            </div>

                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- END of post content -->

            <!-- BEGIN of sidebar -->
            <div class="large-4 medium-4 small-12 cell">
                <div class="gc-right-form">
                    <?php if(ICL_LANGUAGE_CODE=='es') {
                        echo do_shortcode('[contact-form-7 id="12933" title="RIGHT_ES"]');
                    } elseif(ICL_LANGUAGE_CODE=='fr') {
                        echo do_shortcode('[contact-form-7 id="15856" title="RIGHT_FR"]');
                    } elseif(ICL_LANGUAGE_CODE=='pt-pt') {
                        echo do_shortcode('[contact-form-7 id="21017" title="RIGHT_PT"]');
                    } else {
                        echo do_shortcode('[contact-form-7 id="3552" title="RIGHT"]');
                    } ?>
                </div>
                <!-- /.gc-right-form -->
                <?php $rel_eq = get_field('add_rel_eq');
                if($rel_eq): ?>
                    <div class="related_post">
                        <h3 style="text-align: center;font-size: 25px;">
                            <?php if(ICL_LANGUAGE_CODE=='es') {
                                echo 'Equipo GlobeCore';
                            } elseif(ICL_LANGUAGE_CODE=='pt-pt') {
                                echo 'Equipamentos GlobeCore';
                            } else {
                                echo 'GlobeCore Equipment';
                            } ?>
                        </h3>
                        <?php foreach ($rel_eq as $eq):  get_the_post_thumbnail($eq->ID);?>
                            <div class="related_ch autoplay">
                                <a class="related_ch__img" href="<?php echo get_permalink($eq->ID)?>"><?php echo   get_the_post_thumbnail($eq->ID ,'medium') ; ?> <?php echo mb_strimwidth( get_the_title($eq->ID), 0, 50, '...' );?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <!-- /.related_post -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php get_footer(); ?>
