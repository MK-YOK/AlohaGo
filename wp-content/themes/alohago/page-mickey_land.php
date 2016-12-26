<?php get_header(); ?>

<div class="container" role="main">
	<h2 class="titleType1">Mickey Land</h2>
	<p>
		<input type="button" value="Call Mickey" onClick="mickeyAction()" />
	</p>

	<div class="row">
		<div class="col-md-3 col-xs-12 margin-top-md">
			<div id="MickeyBalloon" class="balloon"></div>
		</div>
		<div class="col-md-9 col-xs-12 margin-top-md">

			<img
				src="<?php echo get_template_directory_uri(); ?>/images/Mickey_im.gif"
				alt="Main Image" class="mainImage img-responsive" id="MickeyImage">
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-xs-12 margin-top-md"></div>

		<div class="col-md-9 col-xs-12 margin-top-md"></div>

	</div>

</div>

<?php get_footer(); ?>
