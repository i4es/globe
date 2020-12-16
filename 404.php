<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<section class="gc-404">
  <p class="not-found"> page not found </p>

  <div class="tipsiz">
    <div class="tipsiz-body">
      <div class="left-arm arm"></div>
      <div class="face">
        <div class="upper-face">
          <div class="element">4</div>
          <div class="element">0</div>
          <div class="element">4</div>
        </div>
        <div class="mouth"></div>
      </div>
      <div class="right-arm arm"></div>
    </div>
  </div>

  <p> maybe you want to go <a href='<?php echo home_url('/'); ?>'>back? </a></p>
</section>

<?php get_footer(); ?>
