<?php
  get_header();
  get_template_part('banner-hero');
  /**
  *Template Name: Work Experience
  */
?>
<section class="main-content">
  <div class="main-wrap">
    <b><?php echo get_field('top_section'); ?></b>
    <?php if (have_posts()): the_post();?>
    <div class="post-entry">
        <?php the_content();?>
    </div>
    <?php endif;?>
  </div>

  <div class="slider-works shadow-separator">
    <div class="main-wrap">
      
    </div>
  </div>
</section>
<?php
  get_footer();
?>