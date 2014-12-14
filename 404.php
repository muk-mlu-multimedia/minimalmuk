<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package minimalMuk
 * @since minimalMuk 1.1.1
 */
get_header(); ?>



				<h1><?php _e( 'Not Found', 'minimalmuk' ); ?></h1>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'minimalmuk' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
