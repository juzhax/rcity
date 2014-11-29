<aside id="sidebar" class="small-12 large-4 columns">
<?php 
do_action('foundationPress_before_sidebar');

if (is_single()) {
	dynamic_sidebar("sidebar-post-widgets");
	dynamic_sidebar("sidebar-post-fix-widgets");
}

if (is_front_page()) {
	dynamic_sidebar("sidebar-front-page-widgets");
	dynamic_sidebar("sidebar-front-page-fix-widgets");
}
do_action('foundationPress_after_sidebar');
?>
</aside>
