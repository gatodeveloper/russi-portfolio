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

  <section class="slider-works-section shadow-separator">
    <div class="main-wrap">
      <ul class="slider-works bxslider">
        <li>
          <h3>TM Latin America: Digital Marketing Manager</h3>
          <p class="time">November 2013 - Currently</p>

          <p>As Social Media Chief Consultant and head of Digital Marketing, I'm in charge of creating effective and innovative digital marketing solutions for tourism marketing within the Latin American markets so as to maximize the return on investment for our customers.</p>

          <p>Some of my tasks include launch and monitoring of Facebook Ads and Google AdWords campaigns, development of e-mail marketing campaigns, occasional Graphic Design work, editing and promotion of corporate blogs and prepare Digital Marketing proposals for current and new clients.</p>
        </li>
        <li>
          <h3>TM Latin America: Digital Marketing Manager</h3>
          <p class="time">November 2013 - Currently</p>

          <p>As Social Media Chief Consultant and head of Digital Marketing, I'm in charge of creating effective and innovative digital marketing solutions for tourism marketing within the Latin American markets so as to maximize the return on investment for our customers.</p>

          <p>Some of my tasks include launch and monitoring of Facebook Ads and Google AdWords campaigns, development of e-mail marketing campaigns, occasional Graphic Design work, editing and promotion of corporate blogs and prepare Digital Marketing proposals for current and new clients.</p>
        </li>
      </ul>
    </div>
  </section>
</section>
<?php
  get_footer();
?>