<?php
  get_header();
  get_template_part('banner-hero');
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
</section>
<?php
  get_footer();
?>