<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        // echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('Posted on %s at %s.', 'FoundationPress'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
		$category = get_the_category(); 
		$category_name = '';
		if ($category[0]) {
			$category_name = '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
		}
        echo '<span class="byline author">'. __('by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a> from '.$category_name.'</span>';
    }
endif;
?>