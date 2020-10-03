<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>


    <div id="slideshow_home">
      	<?php do_action('slideshow_deploy', '3831'); ?>
    </div>


    <div id="main_home">

        <div id="lastBlogPost_home">
        	<p>FROM OUR BLOG</p>
        	<?php
				global $post;
					$args = array( 'numberposts' => 1 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<h3><?php the_title(); ?></h3>
                        <?php // wswwpx_content_extract ( '...<br />Read on', 80, 42 );?>
                        <?php echo substr(wp_strip_all_tags(get_the_content()), 0, 160); ?>...<br /><a href="<?php echo the_permalink() ?>">Read on</a>
                        | <a href="<?php  echo get_permalink(get_option('page_for_posts')); ?>" >See our blog</a>
			<?php endforeach; ?>
        </div>

        <div id="content_home">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="post_home">

                            <div class="entrytext_home">
                                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                            </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
         </div>
    </div><!-- main -->


<?php get_footer(); ?>
