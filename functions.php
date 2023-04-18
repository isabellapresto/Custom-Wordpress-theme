<?php 
//lägger till support
function theme_support() {
 add_theme_support ('title_tag');
 add_theme_support ('custom-logo');
 add_theme_support ('post-thumbnails');
 add_theme_support ('menus');
 add_theme_support ('widges');
} 

add_action('after_setup_theme','theme_support');

//skapar menyer
function menus (){

 $locations = array(
  'primary' => "Nav menu",
  'footer' => "Footer menu items",
  'side-menu' => "Sidebar menu"
 );
//registrerar menyer - nav meny och sido meny
register_nav_menus($locations);
}

add_action ('init','menus');

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


//Köar in mina js filer
function load_js(){
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-bella.js', array(), false, true);
    wp_enqueue_script('jquery');
    
 wp_register_script('script-bella', get_template_directory_uri() . '/assets/js/script-bella.js', array('jquery'), true, true);
    
   wp_enqueue_script('script-bella');
    
}

 add_action('wp_enqueue_scripts', 'load_js');

//funktion för att skapa widgets i footer
function register_footer() {
 register_sidebar(
     array(
         'name'          => 'Footer', 
         'id'            => 'footer1',
         'description'   => 'Widgets i detta område visas i footern.', 
         'before_widget' => '',
         'after_widget'  => '',
         'before_title'  => '<h4 class="widget-title">',
         'after_title'   => '</h4>',
     )
 );
}

add_action( 'widgets_init', 'register_footer' );

//skapar pagination
function custom_pagination() {
    global $wp_query;
    
    $total_pages = $wp_query->max_num_pages;
    
    if ( $total_pages > 1 ) {
        $current_page = max( 1, get_query_var( 'paged' ) );
        
        echo '<div class="pagination">';
        echo '<h2 class="screen-reader-text">Inläggsnavigering</h2>';
        
        echo '<a class="prev page-numbers" href="'.get_pagenum_link( $current_page - 1 ).'">Föregående</a>';
        
        for ( $i = 1; $i <= $total_pages; $i++ ) {
            if ( $i == $current_page ) {
                echo '<span class="page-numbers current">'.$i.'</span>';
            } else {
                echo '<a class="page-numbers" href="'.get_pagenum_link( $i ).'">'.$i.'</a>';
            }
        }
        
        echo '<a class="next page-numbers" href="'.get_pagenum_link( $current_page + 1 ).'">Nästa</a>';
        echo '</div>';
    }
}




