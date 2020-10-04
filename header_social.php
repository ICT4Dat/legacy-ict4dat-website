<!--social -->
<div id="header_top">
	<div class="social">
        <a href="http://feeds.feedburner.com/ict4d" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/rssfeed_grey.png" align="absmiddle" alt="rssfeed" name="rssfeed" onmouseover="rssfeed.src='<?php bloginfo('template_directory'); ?>/images/social/rssfeed_color.png';" onMouseOut="rssfeed.src='<?php bloginfo('template_directory'); ?>/images/social/rssfeed_grey.png';"/></a>	
        
        <a href="http://www.new.facebook.com/home.php#/group.php?gid=31033330019" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook_grey.png" align="absmiddle" alt="facebook" name="facebook" onmouseover="facebook.src='<?php bloginfo('template_directory'); ?>/images/social/facebook_color.png';" onMouseOut="facebook.src='<?php bloginfo('template_directory'); ?>/images/social/facebook_grey.png';"/></a>
        
        <a href="https://www.xing.com/net/ict4ddotat/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/xing_grey.png" align="absmiddle" alt="xing" name="xing" onmouseover="xing.src='<?php bloginfo('template_directory'); ?>/images/social/xing_color.png';" onMouseOut="xing.src='<?php bloginfo('template_directory'); ?>/images/social/xing_grey.png';"/></a>
        
        
        
        <a href="http://twitter.com/ict4ddotat" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/twitter_grey.png" align="absmiddle" alt="twitter" name="twitter" onmouseover="twitter.src='<?php bloginfo('template_directory'); ?>/images/social/twitter_color.png';" onMouseOut="twitter.src='<?php bloginfo('template_directory'); ?>/images/social/twitter_grey.png';" /></a>
       
         <a href="http://www.linkedin.com/groups?gid=149868" target="_blank" ><img id="social_linkedin" src="<?php bloginfo('template_directory'); ?>/images/social/in_grey.png" align="absmiddle" alt="linkedin" name="linkedin" onmouseover="linkedin.src='<?php bloginfo('template_directory'); ?>/images/social/in_color.png';" onMouseOut="linkedin.src='<?php bloginfo('template_directory'); ?>/images/social/in_grey.png';" /></a>
       
         <a href="http://www.youtube.com/ict4dat" target="_blank"><img id="social_youtube" src="<?php bloginfo('template_directory'); ?>/images/social/youtube_grey.png" align="absmiddle" alt="youtube" name="youtube" onmouseover="youtube.src='<?php bloginfo('template_directory'); ?>/images/social/youtube_color.png';" onMouseOut="youtube.src='<?php bloginfo('template_directory'); ?>/images/social/youtube_grey.png';" /></a>

		<a href="http://flickr.com/photos/ict4d/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/flickr_grey.png" align="absmiddle" alt="flickr" name="flickr" onmouseover="flickr.src='<?php bloginfo('template_directory'); ?>/images/social/flickr_color.png';" onMouseOut="flickr.src='<?php bloginfo('template_directory'); ?>/images/social/flickr_grey.png';" /></a>

        <a rel="me" href="https://mastodon.social/@spipau" target="_blank"><img height="13px" width="12px" src="<?php bloginfo('template_directory'); ?>/images/social/mastodon_grey.svg" align="absmiddle" alt="mastodon" name="mastodon" onmouseover="mastodon.src='<?php bloginfo('template_directory'); ?>/images/social/mastodon.svg';" onMouseOut="mastodon.src='<?php bloginfo('template_directory'); ?>/images/social/mastodon_grey.svg';" /></a>
    </div>
<!--/social -->

<!--search -->
    <div id="ict4d_search">
        <!-- Old search form (regions)
        <form action="<?php bloginfo('url'); ?>/" method="get" class="regions">
            <?php ict4d_dropdown_categories('show_option_all=Select Region'); ?>
        </form>-->
        <div id="search_archives">
            <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
            </select>
    	</div>
        <?php ict4d_dropdown_authors('show_option_all=Select Author'); ?>
        <?php require('searchform.php'); ?>
    </div>
</div>
<!--/search -->
