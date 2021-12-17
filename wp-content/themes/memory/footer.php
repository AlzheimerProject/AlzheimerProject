<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Memory
 */

?>

	<footer id="colophon" class="site-footer">
			<div class="logo">
				<?php the_custom_logo(); ?>
			</div>
			
			<nav id="site-navigation" class="main-navigation footer-desktop"> <!-- #site-navigation desktop-->
				<?php wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
					)
				); ?>
			</nav><!-- .site-info -->
</footer><!-- #colophon -->


</body>
</html>
