
<?php get_header(); ?>
	
    <div id="main">     
        
        <div id="sidebar">
        	<?php get_sidebar(); ?>
        </div><!-- sidebar -->
        
        
        <div id="posts">
        	
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- Posts -->
            
            	<div class="onePost_post">
            
            		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="entry_post">
                    	<?php the_content(); ?>
                    </div>
                    
                    
                    <div id="meta_post"> <!-- Meta -->
                        <?php the_tags( '<strong>Tags:</strong> ', ', ', ''); ?><br />
                    	<b><?php the_title(); ?></b><br />
						was published on <?php the_date('d.m.Y'); ?> by <?php the_author(); ?>. It files under <?php the_category(', '); ?><br />
                        You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.<br />
                        
                        <?php edit_post_link('Edit', ' | '); ?>
                        
                        <div id="footer_post">
                        	<span><a href="<?php comments_link(); ?>" class="<?php if (get_comments_number()): ?>comments<?php else: ?>nocomments<?php endif; ?>"><?php comments_number(); ?></a></span>
                            
                            <!-- TODO fill in social -->
                            
                            <!-- AddThis Feed Button BEGIN -->
							<a href="http://www.addthis.com/feed.php?pub=martinkonzett&h1=http%3A%2F%2Ffeeds.feedburner.com%2FIct4d&t1=" title="Subscribe using any feed reader!"><img border="0" width="125" alt="AddThis Feed Button" src="http://s9.addthis.com/button1-fd.gif" height="16" style="margin-top:2px;" align="absmiddle" /></a>
							<!-- AddThis Feed Button END -->
                        </div>
					</div>
                 </div>
					<?php endwhile; ?>
                            
                        
                    <?php endif; ?>
            
        </div><!-- posts -->
        
        <?php comments_template(); ?>
        
	</div><!-- main -->      
        
<?php get_footer(); ?>