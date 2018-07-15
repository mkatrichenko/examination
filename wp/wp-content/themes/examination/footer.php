<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package examination
 */

?>

	<div class="footer">
      <div class="wrapper container">
        <div class="copyright">
          <p><?php the_field('footer_copyright', 'option'); ?></p><a><?php the_field('footer_author', 'option'); ?></a>
        </div>
        <?php
				wp_nav_menu( [
					'theme_location' => 'footer-menu',
				] );
			?>
      </div>
    </div>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./slick/slick.min.js"></script>
    <script src="./js/index.js"></script>
    
    <?php wp_footer(); ?>
  </body>
</html>

