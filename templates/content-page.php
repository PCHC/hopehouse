<?php the_post_thumbnail('medium', array('class' => 'thumbnail alignright')); ?>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
