<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );

function register_theme_menus() {
    register_nav_menus(
        array (
                'primary-menu' => _('Primary Menu')
            )
        );
}

add_action ('init', 'register_theme_menus');


//enques the external bxSlider stylesheet & scripts

function enqueue_bxslider_stylesandscripts() {
    wp_enqueue_style('bxslidercss', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');
    wp_enqueue_script( 'bxsliderjs', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'enqueue_bxslider_stylesandscripts');

//enqueues the external font awesome stylesheet
function enqueue_fontawesome_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_fontawesome_stylesheets');



function wpt_theme_styles() {
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Lato:400,900|Libre+Baskerville:400,400i');
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function tasha_dibiagio_theme_js() {
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/tasha-site.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'tasha_dibiagio_theme_js' );

//Utility function to return tag list, with or without links 

function comma_tags($tags, $show_links = true)
{
  if($tags)
  {
    $t = array();
    foreach($tags as $tag)
    {
      $t[] = (!$show_links) ? $tag->name : '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
    }
    return implode(", ", $t);
  }
  else
  {
    return false;
  }
};

?>