<?php
// WP_Query arguments
$args = array (
	'pagename'               => array(
    'health-and-living-center',
    'transitional-housing',
    'shelter',
    'contact'
  ),
	'post_type'              => array( 'page' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main" role="main">
      		<?php get_template_part('templates/content', 'frontpage'); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
	<?php endwhile; ?>
<?php endif; ?>

<?php
the_posts_navigation();
// Restore original Post Data
wp_reset_postdata();
?>
