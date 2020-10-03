<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" class="search_string" value="<?php echo get_search_query() != '' ? get_search_query() : 'Search our website…'; ?>" name="s" id="s" onFocus="if (this.value == 'Search our website…') { this.value = ''; }" onBlur="if (this.value == '') { this.value = 'Search our website…'; }" />
	<input class="search_btn" type=submit id="searchsubmit" value="OK"/ >
</form>
