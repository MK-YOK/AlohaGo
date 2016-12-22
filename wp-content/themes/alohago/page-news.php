<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12 margin-top-md">
			<?php
			$args = array(
					'post_type' => 'news',
					'post_status' => 'publish',
					'posts_per_page' => 5
			);
			$customPosts = get_posts($args);
			?>
			<?php if ($customPosts): ?>
			<?php foreach ($customPosts as $post): setup_postdata( $post );?>
			<div class="well well-lg">
				<div class="media">
					<a class="pull-left"> <?php if(has_post_thumbnail()): ?> <?php the_post_thumbnail('news-thumb'); ?>
						<?php else: ?> <img
						src="<?php echo get_template_directory_uri(); ?>/images/AlohaGo_Icon.png"
						width="64" height="64"> <?php endif; ?>
					</a>
					<div class="media-body">
						<h4 class="media-heading">
							<?php the_title(); ?>
							<small><?php echo get_post_time('F j, Y'); ?> </small>
						</h4>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="col-md-3 col-xs-12">
			<div class="row">
				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="http://www.usgo.org/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/us_go_aso_banner.jpg"
						alt=""> </a>
				</div>

				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="http://e-gobooks.nihonkiin.or.jp/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/egobooks_banner.jpg"
						alt=""> </a>
				</div>
				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="https://deepmind.com/research/alphago/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/AlphaGo_banner.png"
						alt=""> </a>
				</div>

				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="http://www.nihonkiin.or.jp/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/kiin_banner.jpg"
						alt=""> </a>
				</div>

				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="http://u-gen.nihonkiin.or.jp/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/yugen_banner.jpg"
						alt=""> </a>
				</div>

				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="http://starnine.homepage.jp/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/yis_banner.jpg"
						alt=""> </a>
				</div>


				<div class="margin-top-md col-xs-6 col-md-12">
					<a href="http://ausgocongress.com/"><img
						class="img-responsive center-block"
						src="<?php echo get_template_directory_uri(); ?>/images/aussie-congress_banner.jpg"
						alt=""> </a>
				</div>

			</div>
		</div>
	</div>
	<!-- /row-->
</div>
<?php get_footer(); ?>