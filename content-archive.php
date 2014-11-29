<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>
<div class="grid-tile small-12 large-4 column"  style="position:relative;padding-bottom:1em;">

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">
	<div class="tileOverlay">
<?php	
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
?>
	<a href="<?php the_permalink(); ?>">
<?php
	the_post_thumbnail('', array('class' => 'img', 'nopin' => 'nopin'));
	$share_url = urlencode(get_permalink());
?>
	</a>
<?php
} 	
?>
	</div>
	<div class="tileButtons" style="margin-top: -2em;">
			<a class="btn btn-xs btn-link ng-isolate-scope" target="_blank" onclick="return!window.open(this.href, 'Facebook', 'width=550, height=420')" href="//www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" post="post"><i class="fa fa-facebook-square fa-lg fa-fw"></i>Share</a><a href="//twitter.com/intent/tweet?url=<?php echo $share_url; ?>&amp;text=<?php echo urlencode(get_the_title()); ?>&amp;related=rumorscity" target="_blank" class="btn btn-xs btn-link ng-isolate-scope" post="post"><i class="fa fa-twitter fa-lg fa-fw"></i>Tweet</a>&nbsp;
<!--
			<a data-ng-click="UserLikes.LikePost(post)" class="btn btn-fav ng-class:UserLikes.LikeStatus(post)"></a>
-->			
	</div>
	<header>
		<div class="tileText">
		<h2 class="gridTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php FoundationPress_entry_meta(); ?>
		</div>
	</header>
<?php
//	<div class="entry-content">
?>	
		<?php // the_content(__('Continue reading...', 'FoundationPress')); ?>
<?php
//	</div>

/*		
		 $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } 
*/
	 ?>
	</div>
</article>
</div>