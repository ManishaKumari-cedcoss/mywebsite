<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
	</div>
	<?php 
	 $data=get_option('setting_options1');
	 $data1=get_option('setting_options2');
	 
	?>
	<a href=http://<?php echo $data; ?>>Facebook</a></br>
	<a href=http://<?php echo $data1; ?>>Twitter</a>
<<<<<<< HEAD
<!-- /.container -->
=======
    <!-- /.container -->
>>>>>>> 68dde4f2d8e0906aeb6f2933d8e4816587a06ac5
</footer>



<?php
/**
 * This is comment
 *
 * @package mytheme
 */

	wp_footer();
	
?>
</body>

</html>
