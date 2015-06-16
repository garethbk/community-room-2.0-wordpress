<?php 

/* Template Name: Show Template */

get_header(); ?>

<section id="the-show">

		<?php 
			//grabs the featured image's url to use as the background image for the show banner
			$bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
		?>
		<div id="show-banner" style="background-image: url('<?php echo $bg_image[0]; ?>');">
			<div class="container">
				<div id="show-info" class="row">

					<h1><?php the_title(); ?></h1>
					<h3>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							 echo get_post_meta($post->ID, "_theDate", true);
							endwhile; else :
								_e( 'Please add a title!' );
							endif;
						?>
					</h3>

					<div id="show-text" class="col-md-12 col-sm-12 col-xs-12">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							 the_content();
							endwhile; else :
								_e( 'Please add a date!' );
							endif;
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="container">


			<div id="show-gallery">
				
				<ul class="row">

					<?php
						$page_slug = basename(get_permalink());
						$args = array( 'post_type' => 'cr_docu', 'posts_per_page' => -1 );
						$docu_loop = new WP_query( $args );
						while ( $docu_loop->have_posts() ) : $docu_loop->the_post();
							$image_slug = get_post_meta($post->ID, "showname_slug", true);
							if ($image_slug === $page_slug) {
								echo '<li class="col-md-3 col-sm-6 col-xs-12 animated zoomIn">';
								echo the_post_thumbnail('full', array('class' => 'img-responsive', 'alt' => get_post_meta($post->ID, "alt_text", true)));
								echo '</li>';
							}
						endwhile;
					?>

				</ul>

			</div>

		</div>

	</section>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body"> </div>
	    </div>
	  </div>
	</div>

	<div class="dummy-spacer">
	</div>

<?php get_footer(); ?>