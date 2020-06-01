<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?php
/**
 * This is comment
 *
 * @package mytheme
 */

bloginfo( 'name' ); ?>|<?php bloginfo( 'description' ); ?></title>



<?php
	wp_head();
?>

</head>

<body>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#">Start Bootstrap</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">

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
</nav>

<!-- Search Bar -->
	<!-- <form>
		<label for="SearchFor">SEARCH</label>
		<input type="search" name="s" placeholder="Enter"/>
		<button type="submit">Search</button>
	</form> -->
