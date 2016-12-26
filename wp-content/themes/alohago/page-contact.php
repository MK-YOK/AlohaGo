<?php get_header(); ?>
<div class="container">
	<div class="row">
		<p>If you are interested in AlohaGo or other activities of <a href="aboutus/">пeepמind</a>, please feel free to contact us from this form.</p>
		<h3 class="page-header">Send Message</h3>
		<?php if(have_posts()):?>
		<?php while (have_posts()): the_post();?>

		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>