<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edge
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
  <!-- Add the footer widgets -->
  <div id="footer-sidebar" class="secondary">
    <div id="footer-sidebar1">
      <?php
      if (is_active_sidebar('footer-sidebar-1')) {
        dynamic_sidebar('footer-sidebar-1');
      }
      ?>
    </div><!-- #footer-sidebar1 -->

    <div id="footer-sidebar2">
      <?php
      if (is_active_sidebar('footer-sidebar-2')) {
        dynamic_sidebar('footer-sidebar-2');
      }
      ?>
    </div><!-- #footer-sidebar1 -->

    <div id="footer-sidebar3">
      <?php
      if (is_active_sidebar('footer-sidebar-3')) {
        dynamic_sidebar('footer-sidebar-3');
      }
      ?>
    </div><!-- #footer-sidebar1 -->
    
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>