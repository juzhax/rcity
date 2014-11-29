<?php
function FoundationPress_theme_support() {
    // Add language support
    load_theme_textdomain('FoundationPress', get_template_directory() . '/languages');

    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
}

function rcity_infinite_scroll_init() {
	add_theme_support( 'infinite-scroll', array(
		'type'           => 'scroll',
		'footer_widgets' => false,
		'container'      => 'content',
		'wrapper'        => true,
		'render'         => 'rcity_infinite_scroll_render',
		'posts_per_page' => 6,
	) );
}

function rcity_infinite_scroll_render() {
	while( have_posts() ) {
		the_post();
		if (is_front_page()) {
			get_template_part( 'content', get_post_format() );
		} else {
			get_template_part( 'content', 'archive' );
		}
	}
}

add_action('after_setup_theme', 'FoundationPress_theme_support'); 
add_action('after_setup_theme', 'rcity_infinite_scroll_init' );
add_filter('infinite_scroll_credit','lc_infinite_scroll_credit');
 
function lc_infinite_scroll_credit(){
 $content = '';
 return $content;
}
?>