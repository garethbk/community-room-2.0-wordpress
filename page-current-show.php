<?php get_header(); ?>

<section id="the-current-show">

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
			<?php echo get_the_post_thumbnail(34, 'full', array('class' => 'current-show-img')); ?>
			</div>
			<div id="current-show-desc" class="col-md-6 col-sm-12 col-xs-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						 the_content();
					endwhile; else :
						_e( 'Sorry, no posts found...' );
					endif;
				?>
			</div>
		</div>
	</div>

	<div class="dummy-spacer">
	</div>

</section>

<?php get_footer(); ?>