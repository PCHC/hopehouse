<?php
// WP_Query arguments
$args = array (
	'meta_key'               => 'show_on_front_page',
	'meta_value'             => true,
	'post_type'              => array( 'page' ),
	'order'                  => 'ASC',
	'orderby'                => 'menu_order',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) : ?>
	<div class="wrap" role="document">
		<main role="main">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php get_template_part('templates/content', 'frontpage'); ?>
			<?php endwhile; ?>
		</main><!-- /.main -->
	</div><!-- /.wrap -->
<?php endif; ?>

<?php
the_posts_navigation();
// Restore original Post Data
wp_reset_postdata();

?>
