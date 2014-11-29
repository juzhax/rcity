<?php
// Creating the widget 
class rcity_recommended_posts_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rcity_recommended_posts_widget', 

		// Widget name will appear in UI
		__('#:Recommended Posts', 'rcity_recommended_posts_widget_domain'), 

		// Widget description
		array( 'description' => __( 'Sample widget based on RumorsCity Tutorial', 'rcity_recommended_posts_widget_domain' ), ) 
		);
	}

// Creating widget front-end
// This is where the action happens
	public function widget( $args, $instance ) {
		global $post;

			$title = apply_filters( 'widget_title', $instance['title'] );
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

			// This is where you run the code and display the output
			// echo __( 'Hello, World!', 'rcity_recommended_posts_widget_domain' );

?>
	<div class="list-group related-list-group">
<?php
$args = array( 'posts_per_page' => 3, 'orderby' => 'rand');
$rand_posts = get_posts( $args );
foreach ( $rand_posts as $post ) : 

	setup_postdata( $post );
	$category = get_the_category($post->ID);
	$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
//	echo end($category)->cat_name;	
?>
		<a class="list-group-item full ng-scope" data-ng-repeat="post in recommended_posts | limitTo:3" href="<?php the_permalink(); ?>" data-ng-click="SendEvent($index)">
			<div class="hp-black">
				<div class="hp-img" data-ng-style="{ 'background-image': 'url(' + <?php echo $thumb_url; ?> +')' }" style="background-image: url('<?php echo $thumb_url; ?>');"></div>
			</div>
			<div class="hp-overlay">
				<div class="contain">
					<div class="hp-userPost ng-binding"><?php the_title(); ?></div>
					<!--<div class="hp-userPost"><span data-ng-if="post.OriginalPostId">by {{ PostUsername(post) }} </span>from {{ BrandName(post.BrandId) }}</div>
					<div class="hp-userPost">{{ CategoryName(post) }}</div>-->
				</div>
			</div>
		</a>
<?php endforeach; 
wp_reset_postdata(); ?>
	</div>	

<?php
		echo $args['after_widget'];
		}
		
		// Widget Backend 
		public function form( $instance ) {
			if ( isset( $instance[ 'title' ] ) ) {
				$title = $instance[ 'title' ];
			} else {
			$title = __( 'New title', 'rcity_recommended_posts_widget_domain' );
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
} // Class rcity_recommended_posts_widget ends here

// Register and load the widget
function rcity_recommended_posts_load_widget() {
	register_widget( 'rcity_recommended_posts_widget' );
}

add_action( 'widgets_init', 'rcity_recommended_posts_load_widget' );

?>