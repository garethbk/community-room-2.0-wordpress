<?php get_header(); ?>

<section id="about">

	<div id="info">
		<div class="info-text">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					 the_content();
				endwhile; else :
					_e( 'Sorry, no posts found...' );
				endif;
			?>
		</div>
	</div>

	<div id="grachel" class="row">
		<div id="grace" class="col-md-6">
			<div class="grachel-text">
				<h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					 echo get_post_meta($post->ID, "left_name", true);
					endwhile; else :
						_e( 'Please add a name!' );
					endif;
				?>
				</h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					 echo get_post_meta($post->ID, "left_bio", true);
					endwhile; else :
						_e( 'Please add a bio!' );
					endif;
				?>
			</div>
		</div>

		<div id="rachel" class="col-md-6">
			<div class="grachel-text">
				<h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					 echo get_post_meta($post->ID, "right_name", true);
					endwhile; else :
						_e( 'Please add a name!' );
					endif;
				?>
				</h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					 echo get_post_meta($post->ID, "right_bio", true);
					endwhile; else :
						_e( 'Please add a bio!' );
					endif;
				?>
			</div>
		</div>
	</div>

</section>

<section id="artists">

	<div class="container">

		<h1>Folks We've Worked With</h1>

		<ul id="artist-gallery" class="row">

		<?php
			$args = array( 'post_type' => 'cr_folk', 'posts_per_page' => -1 );
			$folks_loop = new WP_query( $args );
			while ( $folks_loop->have_posts() ) : $folks_loop->the_post();
				echo '<li class="col-lg-2 col-md-2 col-sm-10 col-xs-10"><figure class="artist-box">';
				echo the_post_thumbnail();
				echo '<figcaption class="artist-name"><a href="';
				echo get_post_meta($post->ID, "_url", true);
				echo '" target="_blank">';
				echo get_post_meta($post->ID, "_name", true);
				echo '</a></figcaption>';
				echo '</figure></li>';
			endwhile;
		?>

		</ul>

	</div>

	<div class="dummy-spacer">
	</div>

</section>

<?php get_footer(); ?>