<div class="row">
  <div class="col-sm-<?php echo get_field('map') ? '7' : '12'; ?>">
    <?php the_post_thumbnail('medium', array('class' => 'thumbnail alignright')); ?>
    <?php the_content(); ?>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </div>
  <?php if( $post->post_name == 'contact' ) : ?>
    <div class="col-sm-4 col-sm-offset-1">
      <div class="fb-page" data-href="https://www.facebook.com/HopeHouseBangor" data-width="390" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/HopeHouseBangor"><a href="https://www.facebook.com/HopeHouseBangor">Hope House Health &amp; Living Center</a></blockquote></div></div>
      <?php if( get_field('map') ) : ?>
        <?php
          $the_map = get_field( 'map' );
          echo html_entity_decode($the_map);
        ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>
