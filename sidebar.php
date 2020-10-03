<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<?php endif; ?>

<!-- Start AWSOM News Announcement Block -->
<div id="announcement" class="sidebar_border">
	<h3>Announcements</h3>
	<?php if (function_exists('display_my_news_announcement')) { display_my_news_announcement(0); } ?>
</div> <!-- End AWSOM News Announcement Block -->

<div id="sidebar_partners" class="sidebar_border">
  <h3>Partners</h3>

  <a href="https://www.rise-world.com/en/" target="_blank"><img alt="Logo of RISE" width="200" height="73" src="<?php bloginfo('template_directory'); ?>/images/partner/rise_color.png" /></a>
  
  <br/><br/>

  <h3>Supporters</h3>
  <a href="https://www.world4you.com/" target="_blank"><img name="world4you" onmouseover="world4you.src='<?php bloginfo('template_directory'); ?>/images/partner/world4you_color.png'" onmouseout="world4you.src='<?php bloginfo('template_directory'); ?>/images/partner/world4you_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/world4you_grey.png" /></a><br/>
  <br/>
  <a href="http://entwicklung.at/" target="_blank"><img name="adc" onmouseover="adc.src='<?php bloginfo('template_directory'); ?>/images/partner/adc_color.png'" onmouseout="adc.src='<?php bloginfo('template_directory'); ?>/images/partner/adc_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/adc_grey.png" /></a><br/>
  <br/>
  <hr />
  <a href="http://worldbank.org/edevelopment" target="_blank"><img name="edev" onmouseover="edev.src='<?php bloginfo('template_directory'); ?>/images/partner/edev_color.png'" onmouseout="edev.src='<?php bloginfo('template_directory'); ?>/images/partner/edev_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/edev_grey.png" /></a><br/>
  <br/>
  <a href="http://www.olpc.at/" target="_blank"><img name="olp" onmouseover="olp.src='<?php bloginfo('template_directory'); ?>/images/partner/olp_color.png'" onmouseout="olp.src='<?php bloginfo('template_directory'); ?>/images/partner/olp_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/olp_grey.png" /></a><br/>
  <br/>
  <a href="http://www.mewe.org.uk/oss/" target="_blank"><img name="mewe" onmouseover="mewe.src='<?php bloginfo('template_directory'); ?>/images/partner/mewe_color.png'" onmouseout="mewe.src='<?php bloginfo('template_directory'); ?>/images/partner/mewe_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/mewe_grey.png" /></a><br/>
  <br/>
  <a href="http://www.inso.tuwien.ac.at/" target="_blank"><img name="tu" onmouseover="tu.src='<?php bloginfo('template_directory'); ?>/images/partner/tu_color.png'" onmouseout="tu.src='<?php bloginfo('template_directory'); ?>/images/partner/tu_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/tu_grey.png" /></a><br/>
  <br/>
  <a href="http://fossfa.net/"><img name="fossfa" onmouseover="fossfa.src='<?php bloginfo('template_directory'); ?>/images/partner/fossfa_color.png'" onmouseout="fossfa.src='<?php bloginfo('template_directory'); ?>/images/partner/fossfa_grey.png'" src="<?php bloginfo('template_directory'); ?>/images/partner/fossfa_grey.png" /></a><br/>
  <br/>
</div>

<div class="sidebar_border">
  <h3>Tags</h3>
  <?php if ( function_exists('wp_tag_cloud') ) : ?>

      <?php wp_tag_cloud('smallest=8&largest=20'); ?>

  <?php endif; ?>
</div>
