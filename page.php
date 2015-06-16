<?php get_header(); ?>

	<section id="page-content">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					 the_content();
				endwhile; else :
					_e( 'Sorry, no posts found...' );
				endif;
			?>
		</div>
		<div class="dummy-spacer">
		</div>
	</section>

<?php get_footer(); ?>