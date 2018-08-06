<?php
function set_excerpt_length(){
  return 50;
}

  add_filter('excerpt_length', 'set_excerpt_length');

  function wpb_theme_setup(){

    add_theme_support('post-thumbnails');

    add_theme_support('post-formats', array('gallery'));
  }
  add_action ('after_setup_theme','wpb_theme_setup');

// widget
function wpb_init_widgets($id){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id'  => 'sidebar',
    'before_widget' => '<div class="container">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="subtitle" style="position: relative; top: 20px;">',
    'after_title'=> '</h1>'
    )
  );
}
  add_action('widgets_init', 'wpb_init_widgets');
