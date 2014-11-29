<?php
// Creating the widget 
class rcity_next_post_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rcity_next_post_widget', 

		// Widget name will appear in UI
		__('#:Next Post', 'rcity_next_post_widget_domain'), 

		// Widget description
		array( 'description' => __( 'Sample widget based on RumorsCity Tutorial', 'rcity_next_post_widget_domain' ), ) 
		);
	}

// Creating widget front-end
// This is where the action happens
	public function widget( $args, $instance ) {

			$title = apply_filters( 'widget_title', $instance['title'] );
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

			// This is where you run the code and display the output
			// echo __( 'Hello, World!', 'rcity_next_post_widget_domain' );
		if (is_single()) {
			$next_post = get_previous_post();
?>


<?php		if (!empty( $next_post )): ?>					
		<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="sideNextPost nextThree visible-lg" title="Next Post" target="_self">
			<div class="nextTitle">NEXT POST</div>
			<div class="clearfix"></div>
			<span class="bar"><i class="fa fa-chevron-right fa-lg"></i></span>
			<?php
							echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array("class" => "nextImage")); 
			?>
			<div class="postTitle"><p><?php echo $next_post->post_title; ?></p></div>
			<div class="clearfix"></div>
		</a>
<?php 		endif; 
		} else {
?>

<?php
		}
?>
	<div class="row" style="height: 300px; position: relative;margin: 1em 0 0 0;">
		<div class="columns">
			<div style="">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7497085109304484";
/* RumorsCity Side 336x280 */
google_ad_slot = "7616696657/6673446651";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			</div>
		</div>
	</div>			

<?php
		echo $args['after_widget'];
		}
		
		// Widget Backend 
		public function form( $instance ) {
			if ( isset( $instance[ 'title' ] ) ) {
				$title = $instance[ 'title' ];
			} else {
			$title = __( 'New title', 'rcity_next_post_widget_domain' );
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
} // Class rcity_next_post_widget ends here

// Register and load the widget
function rcity_next_post_load_widget() {
	register_widget( 'rcity_next_post_widget' );
}

add_action( 'widgets_init', 'rcity_next_post_load_widget' );

?>