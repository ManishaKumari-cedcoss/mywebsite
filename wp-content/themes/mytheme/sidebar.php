	<!-- Sidebar Widgets Column -->
	<div class="col-md-4">


<!-- Search Widget -->
<div class="card my-4">
<h5 class="card-header">Search</h5>
<div class="card-body">
<div class="input-group">
<form method="get" action="<?php
/**
 * Description
 *
 * @package mytheme
 */

esc_html( home_url( '/' ) ); ?>"> 
<input type="text"  class="form-control" name="s" placeholder="Search for...">
<span class="input-group-btn">
<!-- <button class="btn btn-secondary" type="button">Go!</button> -->
<input type="submit" class="btn btn-secondary" value="go"/>
</span>
</form>
</div>	
</div>
</div>
<!-- Menu Widget -->
<div class="card my-4">
	<h5 class="card-header">Menu</h5>
	<div class="card-body">
<?php
	wp_nav_menu(
		array(
			'menu'       => 'primary-menu',
			'container'  => '',
			'items_wrap' => '<ul class="nav navbar-nav navbar-right headerMenu">%3$s</ul>',
		)
	);
	?>
</div>
</div>

	<!-- Categories Widget -->
	<div class="card my-4">
	<h5 class="card-header">Categories</h5>
	<div class="card-body">
		<div class="row">
		<div class="col-lg-6">
			<ul class="list-unstyled mb-0">
			<li>
				<a href="#">Web Design</a>
			</li>
			<li>
				<a href="#">HTML</a>
			</li>
			<li>
				<a href="#">Freebies</a>
			</li>
			</ul>
		</div>
		<div class="col-lg-6">
			<ul class="list-unstyled mb-0">
			<li>
				<a href="#">JavaScript</a>
			</li>
			<li>
				<a href="#">CSS</a>
			</li>
			<li>
				<a href="#">Tutorials</a>
			</li>
			</ul>
		</div>
		</div>
	</div>
	</div>

<!-- Side Widget -->
	<div class="card my-4">
	<h5 class="card-header">Side Widget</h5>
	<div class="card-body">
		You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
	</div>
	</div>

	</div>

