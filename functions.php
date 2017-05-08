<?php 

  //Adding menus to admin page
  add_theme_support( 'menus' );

  //Register menus here
  function register_my_menus() {
    register_nav_menus(
      array(
        'nav-menu' => __( 'Nav Menu' ),
        'mobile-menu' => __( 'Mobile Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  add_action( 'load-widgets.php', 'my_custom_load' );

  //Add color picker to widgets
  function my_custom_load() {    
    wp_enqueue_style( 'wp-color-picker' );        
    wp_enqueue_script( 'wp-color-picker' );    
  }

  //All widgets
  include "widgets/colors/widget.php";
  include "widgets/images/widget.php";
  include "widgets/interests/widget.php";
  include "widgets/education/widget.php";
  include "widgets/knowledge/widget.php";
  include "widgets/employment/widget.php";

  //Disable all default widgets
  add_action("widgets_init", function() {
      unregister_widget("WP_Nav_Menu_Widget");
      unregister_widget("WP_Widget_Archives");
      unregister_widget("WP_Widget_Calendar");
      unregister_widget("WP_Widget_Categories");
      unregister_widget("WP_Widget_Links");
      unregister_widget("WP_Widget_Meta");
      unregister_widget("WP_Widget_Pages");
      unregister_widget("WP_Widget_Recent_Comments");
      unregister_widget("WP_Widget_Recent_Posts");
      unregister_widget("WP_Widget_RSS");
      unregister_widget("WP_Widget_Search");
      unregister_widget("WP_Widget_Tag_Cloud");
      unregister_widget("WP_Widget_Text");
  });

  //Colors widget
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'id' => 'colors_block',
  'name' => 'Colors',
  'before_widget' => '<ul>',
  'after_widget' => '</ul>',
  'before_title' => '<li>',
  'after_title' => '</li>',
  ));

  //Images widget
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'id' => 'images_block',
  'name' => 'Images',
  'before_widget' => '<ul>',
  'after_widget' => '</ul>',
  'before_title' => '<li>',
  'after_title' => '</li>',
  ));

  //Interests widget
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'id' => 'interests_block',
  'name' => 'Interests',
  'before_widget' => '<ul>',
  'after_widget' => '</ul>',
  'before_title' => '<li>',
  'after_title' => '</li>',
  ));

  //Education widget
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'id' => 'education_block',
  'name' => 'Educations',
  'before_widget' => '<ul>',
  'after_widget' => '</ul>',
  'before_title' => '<li>',
  'after_title' => '</li>',
  ));

  //Knowledge widget
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'id' => 'knowledge_block',
  'name' => 'Knowledges',
  'before_widget' => '<ul>',
  'after_widget' => '</ul>',
  'before_title' => '<li>',
  'after_title' => '</li>',
  ));

  //Employment widget
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'id' => 'employment_block',
  'name' => 'Employments',
  'before_widget' => '<ul>',
  'after_widget' => '</ul>',
  'before_title' => '<li>',
  'after_title' => '</li>',
  ));

?>