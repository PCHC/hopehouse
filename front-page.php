<?php
// WP_Query arguments
$post_array = (WP_ENV == 'development') ? array( 10, 15, 16, 17 ) : array( 4, 6, 8, 10 );
$args = array (
	'post__in'               => $post_array,
	'post_type'              => array( 'page' ),
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

function hex2rgb( $color ) {
	if ( $color[0] == '#' ) {
		$color = substr( $color, 1 );
	}
	if ( strlen( $color ) == 6 ) {
		list( $r, $g, $b ) = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	} elseif ( strlen( $color ) == 3 ) {
		list( $r, $g, $b ) = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	} else {
		return false;
	}
	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );
	return array( 'r' => $r, 'g' => $g, 'b' => $b );
}

?>
