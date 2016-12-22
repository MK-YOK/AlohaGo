
<footer class="margin-top-md" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="text-center">
				<?php
				wp_nav_menu(array(
						'menu' => 'mainnavi',
						'container' => false,
						'menu_class' => 'list-inline'
				));
				?>
				<small>&copy; AlohaGo by <a href="aboutus">пeepמind</a></small>
			</div>
			<!-- /.text-center -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</footer>
<?php wp_footer();?>
</body>
</html>
