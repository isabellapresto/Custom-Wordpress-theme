<?php 

//support för tema 
function theme_support() {
 add_theme_support ('title_tag');
} 

add_action('after_setup_theme','theme_support');

// menu
function menus (){

 $locations = array(
  'primary' => "Nav menu",
  'footer' => "Footer menu items"
 );

 register_nav_menus($locations);
}

add_action ('init','menus');

//Hämtar alla css-filer
function register_css_styles(){
//all css ligger i style.css och även i .bootstarp och i .fontawsome - fixa detta!
wp_enqueue_style ('bootstarp_css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1.0, 'all'); //gör inget nu
wp_enqueue_style ('fontawsome', get_template_directory_uri() . '/assets/css/font-awsome.css', array(), 1.0, 'all'); //gör inget nu
wp_enqueue_style ('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1.0, 'all');
}

add_action ('wp_enqueue_scripts', 'register_css_styles');

//hämtar JS
function register_script(){
 wp_enqueue_script ('script', get_template_directory_uri() . 'assets/js/script.js', array(), 1.0, true );
 wp_enqueue_script ('script', get_template_directory_uri() . 'assets/js/jquery.js', array(), 1.0, true );
}

add_action ('wp_enqueue_scripts', 'register_script');


