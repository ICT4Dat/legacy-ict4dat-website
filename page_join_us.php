<?php
/*
Template Name: Join Us
*/
?>
<?php get_header(); ?>

<div id="main_join_us">
    <iframe id="wufooFormm7x3p9" scrolling="no" height="1218" frameborder="0" src="http://adoy33.wufoo.com/embed/m7x3p9/def/embedKey=m7x3p9206049&referrer=http%3Awuslashwuslashict4d.atwuslash%3Fpage%3D1" style="width:100%;border:none" allowtransparency="true"></iframe>
    
    
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="post_home">
                        
                            <div class="entrytext_home">
                                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                            </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>  
</div>

<?php get_footer(); ?>