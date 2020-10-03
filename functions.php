<?php
/**
 * @version $Id: functions.php 991 2008-11-26 17:31:56Z humator $
 */

add_action( 'init', 'register_my_menus' );
   
function register_my_menus() {
	register_nav_menus(array('menu-1' => __( 'MainMenu_Header' )));
}

if ( function_exists('wp_register_sidebar') )
	wp_register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));


wp_register_sidebar_widget(
	'tag_cloud',        // your unique widget id
    'Tag Cloud',          // widget name
    'ict4d_tag_cloud_widget',  // callback function
    array(                  // options
        'description' => 'ICT4D.at Tag Cloud'
    )
	);

function ict4d_tag_cloud()
{
	wp_tag_cloud('smallest=10&largest=14&unit=px');
}

function ict4d_tag_cloud_widget($args)
{
	extract($args);
	echo $before_widget . $before_title . 'Top tags' . $after_title;
	ict4d_tag_cloud();
	echo $after_widget;
}

/*
	Adds a Loginlink to the footer menu
*/
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args) {
	if( $args->menu == 'Menu_Footer' ) {		
	 	ob_start();
    	$loginoutlink = wp_loginout('index.php', false);
    	$items .= '<li>'. $loginoutlink .'</li>';
	}	
	return $items;;
}


/**
 * Dropdown with all authors of the blog, with several options available.
 *
 * exclude_admin (boolean) (true): Exclude the 'admin' user that is installed by
 *		default.
 * show_fullname (boolean) (false): Show their full names.
 * hide_empty (boolean) (true): Don't show authors without any posts.
 * echo (boolean) (true): Set to false to return the output, instead of echoing.
 * show_option_none (string) ('')
 * name (string) ('authors')
 * class (string) ('postform')
 *
 * Based on @see wp_list_authors() and @see wp_dropdown_categories()
 *
 * @param array $args The argument array.
 * @return null|string The output, if echo is set to false.
 */
function ict4d_dropdown_authors($args = '') {
	global $wpdb;

	$defaults = array(
		'exclude_admin' => true, 'show_fullname' => false, 'hide_empty' => true,
		'echo' => true,
		'show_option_all' => '', 'name' => 'authors', 'class' => 'postform'
	);

	$r = wp_parse_args( $args, $defaults );
	extract($r, EXTR_SKIP);

	$return = "<select name='$name' id='$name' class='$class' onchange=\"document.location.href=this.value;\">\n";
	if ( $show_option_all) {
		$show_option_all = apply_filters('list_cats', $show_option_all);
		$return .= "\t<option value=\"" . get_bloginfo('url') . "\">$show_option_all</option>\n";
	}

	/** @todo Move select to get_authors(). */
	$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users " . ($exclude_admin ? "WHERE user_login <> 'admin' " : '') . "ORDER BY display_name");

	$author_count = array();
	foreach ((array) $wpdb->get_results("SELECT DISTINCT post_author, COUNT(ID) AS count FROM $wpdb->posts WHERE post_type = 'post' AND " . get_private_posts_cap_sql( 'post' ) . " GROUP BY post_author") as $row) {
		$author_count[$row->post_author] = $row->count;
	}

	foreach ( (array) $authors as $author ) {
		$author = get_userdata( $author->ID );
		$posts = (isset($author_count[$author->ID])) ? $author_count[$author->ID] : 0;
		$name = $author->display_name;

		if ( $show_fullname && ($author->first_name != '' && $author->last_name != '') )
			$name = "$author->first_name $author->last_name";

		if ( !($posts == 0 && $hide_empty) )
		{
			$selected = is_author($author->ID);
			$return .= "\t<option value=\"" . get_author_posts_url($author->ID, $author->user_nicename) . "\"" . ($selected ? ' selected="selected"' : '') . ">$name</option>\n";
		}
	}
	$return .= "</select>\n";
	if ( !$echo )
		return $return;
	echo $return;
}

/**
 * Displays modified categories dropdown
 *
 * Modification - form submit on selection.
 * For parameters see @see wp_dropdown_categories()
 *
 * @param string $args
 */
function ict4d_dropdown_categories($args = '')
{
	//remember echo parameter
	$defaults = array(
		'echo' => true
	);
	$r = wp_parse_args( $args, $defaults );
	extract($r, EXTR_SKIP);

	//prepare parameters
	if (strpos($args, 'echo='))
	{
		$args = str_replace('echo=1', 'echo=0', $args);
	}
	else
		$args .= (empty($args) ? '' : '&') . 'echo=0';

	//get html
	$select = wp_dropdown_categories($args);
	
	$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);

	if ( !$echo )
		return $select;
	echo $select;
}

/**
 * Get digg count
 *
 * @return int
 */
function get_digg_count($story_id)
{
/*	ini_set('user_agent', 'Ict4d.at Wordpress');
	$apicall = "http://services.digg.com/story/$story_id";
	$apicall .= '?appkey='.urlencode('http://'.$_SERVER['HTTP_HOST']);
	$result = (array) simplexml_load_file($apicall);
	if (!empty($result['story']))
	{
		$result['story'] = (array) $result['story'];
		return (!empty($result['story']['@attributes']['diggs']))? intval($result['story']['@attributes']['diggs']) : 0;
	}
	else
	{
		return 0;
	}*/
return 2;
}
