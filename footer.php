<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Scrappy
 * @since Scrappy 1.3
 */
?>

  </div><!-- #main -->
  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-sidebars">
      <?php get_sidebar( 'footer1' );
          get_sidebar( 'footer2' );
          get_sidebar( 'footer3' ); ?>
      <div class="stripes">&nbsp;</div>
    </div>
    <div class="site-info">
      <a href="https://github.com/ledyba/wp-theme-7io">This theme is available on github!</a>
    </div><!-- .site-info -->
  </footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>