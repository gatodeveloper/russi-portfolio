<?php
  get_header();
  get_template_part('banner-hero');
  /**
  *Template Name: Home
  */
?>
<section class="main-content">
  <div class="main-wrap">
    <b><?php echo get_field('top_section'); ?></b>
    <?php if (have_posts()): the_post();?>
    <div class="gs gutters sticky-sides">
      <div class="layout-70">
          <?php the_content();?>
      </div>
      <div class="layout-30">
        <figure class="avatar">
          <?php echo get_the_post_thumbnail(get_the_ID(), 'full');?>
        </figure>
      </div>
    </div>
    <?php endif;?>
  </div>

  <div class="home-info shadow-separator">
    <div class="main-wrap">
      <?php echo get_field('bottom_section'); ?>
    </div>
  </div>
</section>
<?php
  get_footer();
?>