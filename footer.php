<?php
/**
 * The template for displaying the footer.
 */
?>
	
		<footer id="unten">
			<p><small>
				<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> | 
				<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Gebaut mit WordPress</a> und dem <a href="https://github.com/dotdotfx/minimalmuk">minimalMuk Theme</a>
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
