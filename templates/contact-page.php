<?php
/*
Template Name: Contact page
*/
?>
<?php get_header(); ?>
<section class="gc-contacts-page">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
           <div class="cell small-12 medium-12 large-12">
                <h1 class="gc-page-title gc-contacts-page__title"><?php the_title();?></h1>
            </div>
            <div class="cell">

                <?php while ( have_posts() ) : the_post(); ?>
                <div class="gc-contact-wraper">
                    <div class="int-contacts">
                        <?php show_for_all(); ?>
                    </div>
                </div>

                <div class="entry-content">
                     <?php the_content(); ?>
                </div><!-- .entry-content -->

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
