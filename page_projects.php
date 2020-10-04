<?php
/*
Template Name: Projects
*/

$cutoffValue = 580; // the amount of this varaiable represents the length of one project description. Everything higher than this will be cut off.

?>

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

			<?php edit_post_link('Edit this entry.', '<div>', '</div>'); ?>

	            <?php
					// Set up the objects needed
					$my_wp_query = new WP_Query();
					$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

					// Get the page as an Object
					$project_main_page =  get_page_by_title('Projects');

					// Filter through all pages and find Portfolio's children
					$projects = get_page_children($project_main_page->ID, $all_wp_pages);
					$projects = array_reverse($projects);

					// echo what we get back from WP to the browser
					//echo '<pre>'.print_r($projects,true).'</pre>';

					foreach ($projects as &$one_project) {
	    				$page_data = get_page( $one_project->ID ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error.

						$content = apply_filters('the_content', $page_data->post_content); // Get Content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
						if(strlen($content) > $cutoffValue+1) {
              //$content = substr($content,0, $cutoffValue);
              $content = truncate($content, $cutoffValue);
            }

						$title = $page_data->post_title; // Get title

						echo '<div class="one_project">';
						echo '<h3><a href="'.$page_data->guid.'">'.$title.'</a></h3>';
						echo $content; // Output Content
						echo '</div>';
						echo '<a style="display:block" href="'.$page_data->guid.'">Read on</a>';
					}
				?>
           </div>
        </div><!-- main -->

<?php get_footer(); ?>

<?php

function truncate($text, $length = 100, $ending = '...', $exact = false, $considerHtml = true) {
    if ($considerHtml) {
      // if the plain text is shorter than the maximum length, return the whole text
      if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
        return $text;
      }
      // splits all html-tags to scanable lines
      preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);
      $total_length = strlen($ending);
      $open_tags = array();
      $truncate = '';
      foreach ($lines as $line_matchings) {
        // if there is any html-tag in this line, handle it and add it (uncounted) to the output
        if (!empty($line_matchings[1])) {
          // if it's an "empty element" with or without xhtml-conform closing slash
          if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
            // do nothing
            // if tag is a closing tag
          } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
            // delete tag from $open_tags list
            $pos = array_search($tag_matchings[1], $open_tags);
            if ($pos !== false) {
              unset($open_tags[$pos]);
            }
            // if tag is an opening tag
          } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
            // add tag to the beginning of $open_tags list
            array_unshift($open_tags, strtolower($tag_matchings[1]));
          }
          // add html-tag to $truncate'd text
          $truncate .= $line_matchings[1];
        }
        // calculate the length of the plain text part of the line; handle entities as one character
        $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
        if ($total_length+$content_length> $length) {
          // the number of characters which are left
          $left = $length - $total_length;
          $entities_length = 0;
          // search for html entities
          if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
            // calculate the real length of all entities in the legal range
            foreach ($entities[0] as $entity) {
              if ($entity[1]+1-$entities_length <= $left) {
                $left--;
                $entities_length += strlen($entity[0]);
              } else {
                // no more characters left
                break;
              }
            }
          }
          $truncate .= substr($line_matchings[2], 0, $left+$entities_length);
          // maximum lenght is reached, so get off the loop
          break;
        } else {
          $truncate .= $line_matchings[2];
          $total_length += $content_length;
        }
        // if the maximum length is reached, get off the loop
        if($total_length>= $length) {
          break;
        }
      }
    } else {
      if (strlen($text) <= $length) {
        return $text;
      } else {
        $truncate = substr($text, 0, $length - strlen($ending));
      }
    }
    // if the words shouldn't be cut in the middle...
    if (!$exact) {
      // ...search the last occurance of a space...
      $spacepos = strrpos($truncate, ' ');
      if (isset($spacepos)) {
        // ...and cut the text in this position
        $truncate = substr($truncate, 0, $spacepos);
      }
    }
    // add the defined ending to the text
    $truncate .= $ending;
    if($considerHtml) {
      // close all unclosed html-tags
      foreach ($open_tags as $tag) {
        $truncate .= '</' . $tag . '>';
      }
    }
    return $truncate;
  }

?>
