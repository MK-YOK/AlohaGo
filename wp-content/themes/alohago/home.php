<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>>
	<title>
	<?php bloginfo('name'); ?> <?php wp_title('|'); ?>


</title>
<link rel="shortcut icon"
	href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<script
	src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.js"></script>
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
	crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head();?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
						aria-expanded="false">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navigation">
					<?php
					wp_nav_menu(array(
							'menu' => 'mainnavi',
							'container' => false,
							'menu_class' => 'nav navbar-nav'
					));
					?>
					<?php
					wp_nav_menu(array(
							'menu' => 'rightnavi',
							'container' => false,
							'menu_class' => 'nav navbar-nav navbar-right'
					));
					?>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>

	<div class="intro-header jumbotron">

		<img
			src="<?php echo get_template_directory_uri(); ?>/images/AlohaGo_MainImage.png"
			alt="Main Image" class="mainImage img-responsive" width=100%>

	</div>
	<div class="container" role="main">
		<h2 class="titleType1">
			AlohaGo
		</h2>
		AlohaGo
	</div>

	<footer>
		<div class="container">
			<p class="text-muted">
				<mini>© 2016 AlohaGo by <a href="">дeepףind</a></mini>
			</p>
		</div>
	</footer>
	<?php wp_footer();?>
</body>
</html>
