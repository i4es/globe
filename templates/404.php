<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>


  <section class="gc-404">
    <div class="grid-container">
      <div id="header">
          <h1>404 ERROR</h1>
          <h2>File Not Found</h2>

          <h3 class="quote">"The way to love anything is to realize that it may be lost."</h3>
          <p class="author"><em>- Gilbert K. Chesterton</em></p>
      </div>

      <div class="warning">
          <p class="sign alert">Alert!</p>
          <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
      </div>


      <h4><i class="sign tip">Tip: </i><strong>Please try the following:</strong></h4>
      <ul>
        <li>Check your spelling</li>
        <li>Go to the main site and search again</li>
        <li><a href="javascript:history.back()">Go back to the previous page</a></li>
      </ul>


      <div id="footer">
          <div class="contact"><i class="sign call">Tip: </i><p class="marquee">If you think this is a server error, please contact the system administrator.</p></div>

          <p class="copyright">&copy; 2013 Redfrost.com</p>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
