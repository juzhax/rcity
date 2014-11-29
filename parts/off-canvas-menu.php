<aside class="left-off-canvas-menu" aria-hidden="true">
		<div class="left-off-canvas-search">
				<div class="navbar-search">
					<form action="/search/" onsubmit="location.href='/search/?q=' + document.getElementById('left-off-canvas-search-text').value; return false;">
					<input id="left-off-canvas-search-text" type="text" name="q" autocomplete="off" class="form-control input-sm ng-pristine ng-valid" placeholder="Search">
					<div class="searchButton" onclick="location.href='/search/?q=' + document.getElementById('left-off-canvas-search-text').value;"><i class="fa fa-search"></i></div>
					</form>
				</div>
		</div>
	<?php foundationPress_mobile_off_canvas(); ?>
</aside>