<?php
/**
 * The template for displaying the footer.
 *
 * @package minimalMuk
 * @since minimalMuk 1.1.1
 */
?>
  
    <footer class="page-footer">
      <p><small>
        <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> | 
        <?php print(__('<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Built with WordPress</a> and the <a href="https://github.com/muk-mlu-multimedia/minimalmuk">minimalMuk theme</a>', 'minimalmuk')); ?>
      </small></p>
    </footer>
  
  </div> <!--END #wrapper-->

<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>
</body>
</html>
