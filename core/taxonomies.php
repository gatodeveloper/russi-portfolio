<?php

  add_action('init', 'workExperience');

  function workExperience(){
    $labelp = array(
      'name' => _x('Work Experience','post type general name'),
    );
    $args = array(
      'labels' => $labelp,
      'public' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'show_in_nav_menus' => false,
      '_builtin' => false,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array("slug" => "work-experiences"),
      'supports' => array('title', 'editor'),
      'taxonomies' => array('post_tag')
    );
    
    register_post_type('work-experiences', $args);
    flush_rewrite_rules();
  };
  
  /*add_action('init', 'emergeFAQTaxo', 0);
  
  function emergeFAQTaxo(){
    $labelt = array(
      'name' => _x('Categories FAQ', 'taxonomy general name'),
    );
    register_taxonomy('faqs', array('faq'), array(
      'public' => true,
      'hierarchical' => true,
      'labels' => $labelt,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array("slug" => "faqs") 
    ));
    
    flush_rewrite_rules();
  };*/