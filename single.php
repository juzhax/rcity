<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article class="article" <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="card">
				<div class="date">
					<div class="links">
<?php
			foreach((get_the_category()) as $category) { 
//				$cat_name[] = strtolower($category->cat_name);
?>				
						<a href="<?php echo $category->ID; ?>" class="label label-default" target="_self"><?php echo $category->cat_name; ?></a>
<?php
			}
?>
<!--
						<a href="/different-solutions/facepalm-pictures/59866/2" id="topNextPage" class="btn btn-next page" target="_self">NEXT PAGE <i class="fa fa-chevron-right"></i></a>
-->
<?php
			$next_post = get_previous_post();
			$share_url = urlencode(get_permalink());

?>

						<a href="<?php echo get_permalink( $next_post->ID ); ?>" id="nextOne" class="btn btn-next " target="_self">NEXT POST <i class="fa fa-chevron-right"></i></a>
					<div class="clearfix"></div>
				</div>
				<div class="tileOverlay" style="padding-top: 0.5em;">
					<?php if ( has_post_thumbnail() ): ?>
					<?php 
					$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$thumb_url = urlencode($thumb_url);
					the_post_thumbnail('', array('class' => 'img', 'nopin' => 'nopin'));
					?>
					<?php endif; ?>
					<header>
						<h1 class="entry-title postTitle"><?php the_title(); ?></h1>
						<?php FoundationPress_entry_meta(); ?>
					</header>
					<div style="position:relative; left:-0.4em;">
<script type="text/javascript"> 
	google_ad_client = "ca-pub-7497085109304484";
	if (window.innerWidth >= 800) {
		/* RumorsCity 728x90 */
		google_ad_slot = "9233030651";
		google_ad_width = 728;
		google_ad_height = 90;
	} else {
		/* RumorsCity 300x250 Top */
		google_ad_slot = "6139963453";
		google_ad_width = 300;
		google_ad_height = 250;
	} 
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
					</div>
				</div>
			</div>			
			
			
			<?php do_action('foundationPress_post_before_entry_content'); ?>

						<div id="postSocial">
							<div class="fixedPostBar">
								<div class="whiteBar">
									<div class="socialMenuSlide pull-left">
										<button class="left-off-canvas-toggle" type="button" data-close-nav>
											<i class="fa fa-bars" style="font-size: 1.5em;"></i>
										</button>
									</div>
									<div class="socialCount">
										<span class="sharedZero" style="display: none;">&nbsp;</span><span class="sharedCount"><?php echo rand(10,999);?></span><div>SHARED</div>
									</div>
									<a href="//www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" title="Facebook" 
										class="btn btn-sm btn-bar btn-fb radius socialbar-facebook">
										<i class="fa fa-facebook-square fa-lg"></i></a>
									<a href="//twitter.com/share?url=<?php echo $share_url; ?>&amp;text=<?php echo urlencode(get_the_title()); ?>&amp;related=rumorscity" target="_blank" title="Twitter"
										class="btn btn-sm btn-bar btn-tw socialbar-twitter">
										<i class="fa fa-twitter fa-lg"></i></a>
									
									<a href="//plus.google.com/share?url=<?php echo $share_url; ?>" title="Google+" target="_blank"
										class="btn btn-sm btn-bar btn-gplus socialbar-google">
										<i class="fa fa-google-plus fa-lg"></i></a>
									<a href="//pinterest.com/pin/create/button/?url=<?php echo $share_url; ?>&amp;media=<?php echo get_site_url().$thumb_url; ?>&amp;description=<?php echo urlencode(get_the_title()); ?>" target="_blank" data-pin-do="skipLink" data-pin-config="none" title="Pinterest"
										class="btn btn-sm btn-bar btn-pin socialbar-pin">
										<i class="fa fa-pinterest fa-lg"></i></a>
<!--									
									<a href="/i-love/20-clever-original-couples-halloween-costumes/54643/2" id="socialNextPage"
										class="socialNext page" target="_self">NEXT PAGE <i class="fa fa-chevron-right"></i></a>
-->
									<a href="<?php echo get_permalink( $next_post->ID ); ?>" id="nextTwo" class="socialNext " target="_self" style="display: block;">NEXT POST <i class="fa fa-chevron-right"></i></a>
										
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
								
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
			
					<div class="articlePaging">
							<div class="next-btn">
								<a href="<?php echo get_permalink( $next_post->ID ); ?>" id="nextFour" target="_self">NEXT POST <i class="fa fa-chevron-right fa-lg"></i></a>
							</div>
					</div>	

					<div class="btmSocial">
						<div class="pageCount">Did you remember to share this with your friends?</div>
						<div class="clearfix"></div>
						<div class="">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" title="Facebook" class="btn btn-lg btn-fb btn-bar article-facebook">
								<i class="fa fa-facebook-square fa-lg"></i> Share on Facebook
							</a>
							<a href="https://twitter.com/share?url=<?php echo $share_url; ?>&amp;text=<?php echo urlencode(get_the_title()); ?>&amp;related=rumorscity" target="_blank" title="Twitter" class="btn btn-lg btn-tw btn-bar article-twitter">
								<i class="fa fa-twitter fa-lg"></i> Share on Twitter
							</a>
						</div>
					</div>

			<div style="position:relative; left:-0.4em;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7497085109304484";
	if (window.innerWidth >= 800) {
		/* RumorsCity After Contents 728x90 */
		google_ad_slot = "6000362659/5196738771";
		google_ad_width = 728;
		google_ad_height = 90;
	} else {
		/* RumorsCity After Contents 336x280 */
		google_ad_slot = "6000362659/9544063131";
		google_ad_width = 336;
		google_ad_height = 280;
	}		
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

			</div>
			
			
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>
			</div>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>

	
	
	
	<?php get_sidebar(); ?>
</div>
<div id="last">
</div>
<div id="slidebox">
	<div class="slidebox">
		<button type="button" class="close">&times;</button>
		<p>Never miss a post!</p>
		<hr />
		<div class="fb-like-box" data-href="https://www.facebook.com/rumorscity" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
	</div>
</div>			

<?php get_footer(); ?>
