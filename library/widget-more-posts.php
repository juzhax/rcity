<?php
// Creating the widget 
class rcity_more_posts_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rcity_more_posts_widget', 

		// Widget name will appear in UI
		__('#:More Posts', 'rcity_more_posts_widget_domain'), 

		// Widget description
		array( 'description' => __( 'Sample widget based on RumorsCity Tutorial', 'rcity_more_posts_widget_domain' ), ) 
		);
	}

// Creating widget front-end
// This is where the action happens
	public function widget( $args, $instance ) {
		global $post;
		if (is_single()) {
			foreach((get_the_category()) as $category) { 
				$cat_name[] = strtolower($category->cat_name);
				$cat_id[] =  $category->cat_ID;
//			    echo '<img src="http://example.com/images/' . $category->cat_ID . '.jpg" alt="' . $category->cat_name . '" />'; 
    		}

			$title = apply_filters( 'widget_title', $instance['title'] );
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title .' <a href="/'.$cat_name[0].'/"> '.$cat_name[0].'</a>'. $args['after_title'];

			// This is where you run the code and display the output
			// echo __( 'Hello, World!', 'rcity_more_posts_widget_domain' );
?>
<div class="list-group recommended-list-group">
<?php
$args = array( 'posts_per_page' => 5, 'orderby' => 'rand', 'category' => $cat_id[0] );
$rand_posts = get_posts( $args );
foreach ( $rand_posts as $post ) : 

	setup_postdata( $post );
	$category = get_the_category($post->ID);
//	echo end($category)->cat_name;	
?>
		<a data-ng-repeat="post in more_posts | limitTo:5" class="list-group-item ng-scope" data-ng-href="<?php the_permalink(); ?>" data-ng-click="SendEvent($index)" href="<?php the_permalink(); ?>">
			<div class="recommended-photo">
<!--
			<img data-pin-no-hover="true" data-ng-src="http://cdn.diply.com/img/b4de0e53-c9a6-42c2-a330-a527f47a8351_t.jpg" src="http://cdn.diply.com/img/b4de0e53-c9a6-42c2-a330-a527f47a8351_t.jpg">
-->
			<?php echo get_the_post_thumbnail($post->ID, 'thumbnail');  ?>
			</div>
			
			<div class="recommended-title ng-binding"><?php the_title(); ?></div>
			<div class="externalPost ng-binding"><?php echo end($category)->cat_name;  ?></div>
			<div class="clearfix"></div>
		</a>
<?php endforeach; 
wp_reset_postdata(); ?>
</div>


<?php
			}
		echo $args['after_widget'];
		}
		
		// Widget Backend 
		public function form( $instance ) {
			if ( isset( $instance[ 'title' ] ) ) {
				$title = $instance[ 'title' ];
			} else {
			$title = __( 'New title', 'rcity_more_posts_widget_domain' );
		}
		// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
		// Updating widget replacing old instances with new
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			return $instance;
		}
} // Class rcity_more_posts_widget ends here

// Register and load the widget
function rcity_more_posts_load_widget() {
	register_widget( 'rcity_more_posts_widget' );
}

add_action( 'widgets_init', 'rcity_more_posts_load_widget' );

?>