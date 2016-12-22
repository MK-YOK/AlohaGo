<?php get_header(); ?>

<div class="intro-header jumbotron">

	<img
		src="<?php echo get_template_directory_uri(); ?>/images/AlohaGo_AboutImage.png"
		alt="Main Image" class="mainImage img-responsive" width=100%>

</div>

<div class="container" role="main">
	<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
	<article class="post">
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</article>
	<!-- post -->
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
