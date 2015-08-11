<div class="row">
  <div class="col-sm-<?php echo get_field('map') ? '7' : '12'; ?>">
    <?php the_post_thumbnail('medium', array('class' => 'thumbnail alignright')); ?>
    <?php the_content(); ?>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </div>
  <?php if( get_field('map') ) : ?>
    <div class="col-sm-4 col-sm-offset-1">
      <?php
        $the_map = get_field( 'map' );
        echo html_entity_decode($the_map);
      ?>
    </div>
  <?php endif; ?>
</div>
