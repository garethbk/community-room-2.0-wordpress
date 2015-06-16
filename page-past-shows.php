<?php get_header(); ?>

<section id="past-shows">

	<div class="container">
		
		<?php
			$args = array( 'post_type' => 'cr_past_show', 'posts_per_page' => -1 );
			$shows_loop = new WP_query( $args );
			while ( $shows_loop->have_posts() ) : $shows_loop->the_post();
				echo '<figure class="past-show">';
				echo the_post_thumbnail();
				echo '<figcaption class="past-show-caption"><a href="';
				echo get_post_meta($post->ID, "_slug", true);
				echo '">';
				echo strtoupper(get_the_title());
				echo ' | ';
				echo get_post_meta($post->ID, "_date", true);
				echo '</a></figcaption>';
				echo '</figure>';
			endwhile;
		?>

	</div>

	<div class="dummy-spacer">
	</div>

</section>

<?php get_footer(); ?>