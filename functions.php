<?php 
//support för tema 
function theme_support() {
 add_theme_support ('title_tag');
 //gör att man kam lägga till ny logga i wp (anländs inte nu men för framtiden)
 add_theme_support ('custom-logo');
 //bilder
 add_theme_support ('post-thumbnails');
 add_theme_support ('menus');
 add_theme_support ('widges');

} 

add_action('after_setup_theme','theme_support');

// nav meny och footer

// add_action ('after_setup_theme' , 'register_my_menu');


function menus (){

 $locations = array(
  'primary' => "Nav menu",
  'footer' => "Footer menu items",
  'side-menu' => "Sidebar menu"
 );

 register_nav_menus($locations);
}

add_action ('init','menus');

// register_sidebar();
// dynamic_sidebar();

//Köar in alla css-filer
function register_css_styles(){
$version = wp_get_theme() -> get('Version');
wp_register_style ('bootstarp_bella', get_template_directory_uri() . '/assets/css/bootstrap-bella.css', array(), '3.3.7', 'all'); 
wp_enqueue_style ('bootstarp_bella');

wp_register_style ('style', get_template_directory_uri() . '/assets/css/style-bella.css', array('bootstarp_bella'), $version, 'all');
wp_enqueue_style ('style');

wp_register_style ('fontawsome_bella', get_template_directory_uri() . '/assets/css/font-awsome-bella.css', array(), '4.6.3', 'all'); 
wp_enqueue_style ('fontawsome_bella');
}

add_action ('wp_enqueue_scripts', 'register_css_styles');

//Köar in JS
function register_script(){
wp_register_style ('jquery_bella', get_template_directory_uri() . 'assets/js/jquery-bella.js', array(), false, true);
wp_enqueue_script ('jquery_bella');
wp_register_style ('js_bella', get_template_directory_uri() . 'assets/js/script-bella.js', array('jquery_bella'), true, true);
wp_enqueue_script ('js_bella');
}

add_action ('wp_enqueue_scripts', 'register_script');


function register_footer() {
 register_sidebar(
     array(
         'name'          => __( 'Footer', 'labb1' ),
         'id'            => 'footer',
         'description'   => __( 'Widgets i detta område visas i footern.', 'labb1' ),
         'before_widget' => '<div id="%1$s" class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget-title">',
         'after_title'   => '</h4>',
     )
 );
}
add_action( 'widgets_init', 'register_footer' );

dynamic_sidebar('testwidget');

function pagination(){
    echo "<ul>";
    if (get_previous_posts_link()){
        echo "<li>"; previous_posts_link("Föregående inlägg"); echo "</li>";
    }
    if (get_next_posts_link()){
        echo "<li>"; next_posts_link("Föregående inlägg"); echo "</li>" ; }
        echo "<ul>";
  
    }

