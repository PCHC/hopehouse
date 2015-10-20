<?php while (have_posts()) : the_post(); ?>

  <?php
    $custom_bg = get_field('custom_bg') ? 'hp-page-custom-bg' : '';

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

  <?php if( $custom_bg ) : ?>
    <div class="page-custom-bg-wrap">
      <div class="page-custom-bg" style="<?php echo $hero_image_style; ?>">
        <div class="page-custom-bg-color" style="<?php echo $hero_color_style; ?>"></div>
      </div>
  <?php endif; ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php if( $custom_bg ) : ?>
  </div><!-- /.page-custom-bg-wrap -->
  <?php endif; ?>
<?php endwhile; ?>
