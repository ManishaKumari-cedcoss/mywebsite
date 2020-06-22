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
    <!-- /.container -->
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
