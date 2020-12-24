<?php 

define('URL_THEME', get_stylesheet_directory());
define('URL_CSS', get_template_directory_uri().'/css');
define('URL_JS', get_template_directory_uri().'/js');
define('URL_IMAGES', get_template_directory_uri().'/images');

if(!function_exists('hoaphat_setup_css')) {
	function hoaphat_setup_css (){


		$name_css = array (
			'style1' => 'style',
			'news' => 'news',
			'font' => 'font-awesome',
			'owl1' => 'owl.carousel.min',
			'jquery1' => 'jquery.fancybox',
			'animate1' => 'animate',
			'light' => 'lightgallery.min',
			
		);

		foreach ($name_css as $key_css => $file) {
			wp_enqueue_style($key_css , URL_CSS . "/" . $file . ".css");
		}

	}
	add_action('wp_enqueue_scripts','hoaphat_setup_css');
}

if(!function_exists('hoaphat_setup_js')) {
	function hoaphat_setup_js (){
		$name_js = array (
			'jquery2' => 'jquery.min',
			'jquery3' => 'jquery.fancybox',
			'light' => 'lightgallery-all.min',
			'script' => 'script',
			'owl2' => 'owl.carousel',
		);
		foreach ($name_js as $key_js => $file) {
			wp_enqueue_script($key_js , URL_JS . "/" . $file . ".js");
		}
	}
	add_action('wp_enqueue_scripts', 'hoaphat_setup_js');
}

 if ( ! function_exists( 'hoaphat_theme_setup' ) ) {
        function hoaphat_theme_setup() {
        	$language_folder = URL_THEME . '/languages';
			load_theme_textdomain( 'thachpham', $language_folder );
 			add_theme_support( 'automatic-feed-links' );
 			add_theme_support( 'post-thumbnails' );
 			add_theme_support( 'title-tag' );
 			add_theme_support( 'post-formats',
				array(
				   'image',
				   'video',
				   'gallery',
				   'quote',
				   'link'
				)
			);
			$default_background = array(
			   'default-color' => '#e8e8e8',
			);
			add_theme_support( 'custom-background', $default_background );
			$sidebar = array(
			   'name' => __('Main Sidebar', 'thachpham'),
			   'id' => 'main-sidebar',
			   'description' => 'Main sidebar for Thachpham theme',
			   'class' => 'main-sidebar',
			   'before_title' => '<h3 class="title">',
			   'after_title' => '</h3>'
			);
			register_sidebar( $sidebar );
        }	
        add_action ( 'init', 'hoaphat_theme_setup' );
 		register_nav_menu ( 'primary-menu', __('Primary Menu', 'thachpham') );
  }

if ( ! function_exists( 'create_menu' ) ) {
  function create_menu( $slug ) {
    $menu = array(
      'theme_location' => $slug,
      'container' => 'nav',
      'container_class' => $slug,
    );
    wp_nav_menu( $menu );
  }
}

