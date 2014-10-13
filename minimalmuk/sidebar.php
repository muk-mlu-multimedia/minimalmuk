<?php
/**
 * The Sidebar containing the primary widget area.
 */
?>

	<aside id="sidebar">
		
	
		<ul class="xoxo">

<?php
/* When we call the dynamic_sidebar() function, it'll spit out
 * the widgets for that widget area. If it instead returns false,
 * then the sidebar simply doesn't exist, so we'll hard-code in
 * some default sidebar stuff just in case.
 */
if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
<!-- Retain a minimal sidebar for login and backend links, so students don't get confused -->
		<li>
			<h3><?php _e( 'Meta', 'minimalmuk' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>

	<?php endif; ?>
		</ul>

	</aside>