<div class="top-bar-container contain-to-grid sticky show-for-medium-up" role="navigation">
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l(); ?>
            <?php foundationPress_top_bar_r(); ?>
            <ul class="right">
				<li class="navbar-search">
					<form action="/search/" onsubmit="location.href='/search/?q=' + document.getElementById('search-text').value; return false;">
					<input id="search-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Search">
					<div class="searchButton" onclick="location.href='/search/?q=' + document.getElementById('search-text').value;"><i class="fa fa-search"></i></div>
					</form>
				</li>
            </ul>
        </section>
    </nav>
</div>