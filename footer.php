        <div id="footer">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- shows last edit -->

        <span id="partner_supported_by">
            Proudly supported by
        </span>

		<span id="partner_rise">
          <a href="https://www.rise-world.com/en/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/partner/footer_rise.png" alt="RISE Logo" width="88" height="30" /></a>
        </span>

		<span id="partner_supported_by_and">&</span>

        <span id="partner_world4you">
          <a href="https://www.world4you.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/partner/footer_world4you.png" alt="World4You Logo" width="120" height="30" /></a>
		</span>
		
<?php break; ?>
			<?php endwhile; ?>
			<?php endif; ?>


            <?php wp_nav_menu( array('menu' => 'Menu_Footer' )); ?>
        </div><!-- footer -->

	</div><!-- wrapper -->

    <?php wp_footer(); ?>

    <!--
    ***************** Analyse Tools *************
    <script type="text/javascript">
		st_go({blog:'4315897',v:'ext',post:'362'});
		var load_cmc = function(){linktracker_init(4315897,362,2);};
		if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
		else load_cmc();
	</script>

	<script type='text/javascript'>
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>

	<script type='text/javascript'>
		var pageTracker = _gat._getTracker("UA-4243243-1");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>-->

    </body>
</html>
