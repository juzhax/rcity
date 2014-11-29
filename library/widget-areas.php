<?php

function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-post-widgets',
      'name' => __('Sidebar Post widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article class="article" id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6 class="hp-listHeader">',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'sidebar-post-fix-widgets',
      'name' => __('Sidebar Post Fix widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article class="article" id="%1$s" class="row widget %2$s"><div class="small-12 columns detailsSide"><div class="fixScroll">',
      'after_widget' => '</div></div></article>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
  ));

  register_sidebar(array(
      'id' => 'sidebar-front-page-widgets',
      'name' => __('Sidebar Front Page widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article class="article" id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
  ));

  register_sidebar(array(
      'id' => 'sidebar-front-page-fix-widgets',
      'name' => __('Sidebar Front Page Fix widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article class="article" id="%1$s" class="row widget %2$s"><div class="small-12 columns detailsSide"><div class="fixScroll">',
      'after_widget' => '</div></div></article>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
  ));

  
  register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article class="article" id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'      
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>