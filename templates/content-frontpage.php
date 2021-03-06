<?php
  $custom_bg = get_field('custom_bg') ? 'hp-custom-bg' : '';

  // Set the background image if there is one
  $hero_image = get_field('intro_bg_image');
  $hero_image_style = $hero_image ? 'background-image: url('.$hero_image['url'].');' : '';

  // Set the background color is there is one
  $hero_color = get_field('intro_bg_color');
  if( !empty($hero_color) ) {
    $hero_color_rgb = hex2rgb($hero_color);
    $hero_color_style = 'background: rgba('.$hero_color_rgb['r'].','.$hero_color_rgb['g'].','.$hero_color_rgb['b'].',0.8);';
  }
?>
<article id="<?php echo $post->post_name; ?>" <?php post_class('hp-section ' . $custom_bg); ?> style="<?php echo $hero_image_style; ?>">
  <div class="hp-section-wrap" style="<?php echo $hero_color_style; ?>">
    <div class="container">
      <div class="content row">
        <header>
          <h2 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <div class="col-sm-4 col-sm-push-7 col-sm-offset-1">
            <?php if( $post->post_name == 'contact' ) : ?>
              <div class="fb-page" data-href="https://www.facebook.com/HopeHouseBangor" data-width="390" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/HopeHouseBangor"><a href="https://www.facebook.com/HopeHouseBangor">Hope House Health &amp; Living Center</a></blockquote></div></div>
              <?php
                $the_map = get_field( 'map' );
                echo html_entity_decode($the_map);
              ?>
            <?php else : ?>
              <?php the_post_thumbnail( 'medium', array(
                'class'  =>  'hp-section-image'
              )); ?>
            <?php endif; ?>
          </div>
          <div class="col-sm-7 col-sm-pull-5">
            <?php if( get_field('intro') ) : ?>
              <?php the_field('intro'); ?>
              <a href="<?php the_permalink(); ?>" class="hp-section-button">Learn More</a>
            <?php else : ?>
              <?php the_content(); ?>
            <?php endif; ?>
          </div>
        </div><!-- /.entry-content -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.hp-section-wrap -->
</article><!-- /.hp-section -->
