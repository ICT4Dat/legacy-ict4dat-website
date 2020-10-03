<?php get_header(); ?>

<div id="main">

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- sidebar -->
	<div id="error_404">
		<h2>Error 404 - Not Found</h2>
		<p>We are sorry, but the requested page could not be found.<br />You can go back to <a href="<?php  echo site_url(); ?>">Home</a></p>
	</div>
</div><!-- main -->

<?php get_footer(); ?>