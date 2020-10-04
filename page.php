
<?php get_header(); ?>





        <div id="main">

            <div id="sidebar">
        		<?php get_sidebar(); ?>
        	</div><!-- sidebar -->


            <?php if (have_posts()) : while (have_posts()) : the_post();?>
 				<div id="page_content">
  					<h2 id="page_headline"><?php the_title();?></h2>
  					<div class="page_text">
  						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
  					</div>

 			<?php endwhile; endif; ?>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            </div>
        </div><!-- main -->

<?php get_footer(); ?>
