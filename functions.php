<?php

// add styling naf javascript files
function add_theme_scripts() {
    
    wp_enqueue_style('langlo_bootstrap' , "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" , array() ,'1.0','all');
    // wp_enqueue_style('langlo_google_nunito_suns_playfair_display' , "https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Playfair+Display&display=swap" , array() ,'1.0','all');
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/langlostyle.css', array(), '1.1', 'all');

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
    
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  
// theme supports
function theme_setup(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ), 
));
}
add_action('after_setup_theme' , 'theme_setup');

// register menu
function langlo_menus(){
  register_nav_menu('primary' , __('Primary Menu', 'theme-slug' ));
}
add_action('after_setup_theme' , 'langlo_menus');

//hide confirmation MSG - wyslanyformularz
function hideFormularz(){
  if(is_page(62)){
  ?>
  <script type="text/javascript">
    let banner = document.getElementById('sentMsgAlert');
    console.log(typeof banner);
    if(banner !== null){
        // alert('JavaScript w footer dla Page-62');
        setTimeout(() =>{
            // alert('OK, chowam banner');
            banner.style.display = "none";
        }, "5000")
    }
  </script>
<?php
  }
}
add_action('wp_footer' , 'hideFormularz');


