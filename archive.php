<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" style="position:relative;">

	<h1 class="archive-title"><?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?></h1>
	</div>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" style="position:relative;" role="main">
	<?php if ( have_posts() ) : ?>

				<ul class="tiles">
		<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'archive' ); ?>
		<?php endwhile; ?>
				</ul>
				<div class="tiles" id="content">
<!--
				<div  class="small-12 large-4 columns" style="position:relative;" ></div>
-->
				</div>

<!--		
		<div id="content"></div>
-->
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; // end have_posts() check ?>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
