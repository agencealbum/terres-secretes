<?php

	add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles' );

	function custom_enqueue_styles() {
	 
	    $parent_style = 'parent-style';

	    wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
	    //wp_enqueue_script('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery') );
	    wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery') );

	   	wp_enqueue_script( 'chartjs', get_stylesheet_directory_uri() . '/js/Chart.min.js', array('jquery') );
	   	wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery') );

	   	//wp_enqueue_style( 'fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
	   	wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
	   	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css');
	    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/fonts.css');

	    wp_enqueue_style( 'open-sans-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;300;400;500;600&display=swap');
	    wp_enqueue_style( 'barlow-font', 'https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;600&display=swap');

	    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/custom.css', array( $parent_style, 'understrap-styles' ),'v2b');
	    wp_enqueue_style( 'revelis-style', get_stylesheet_directory_uri() . '/css/revelis.css', array( $parent_style, 'understrap-styles' ), 1.0);
	    wp_enqueue_style( 'cerco-style', get_stylesheet_directory_uri() . '/css/cerco.css', array( $parent_style, 'understrap-styles' ), 1.0);
	}

	// Menu Hamburger
	function wp_hamburger_menu() {
	  register_nav_menu('hamburger-menu',__( 'Menu Hamburger' ));
	}
	add_action( 'init', 'wp_hamburger_menu' );

    function wp_footer_left_menu() {
        register_nav_menu('left-footer-menu',__( 'Left footer menu' ));
    }
    add_action( 'init', 'wp_footer_left_menu' );

    function wp_footer_center_menu() {
        register_nav_menu('center-footer-menu',__( 'Center footer menu' ));
    }
    add_action( 'init', 'wp_footer_center_menu' );

    function wp_footer_right_menu() {
        register_nav_menu('right-footer-menu',__( 'Right footer menu' ));
    }
    add_action( 'init', 'wp_footer_right_menu' );


	// Our custom post type function
	function create_posttype() {
	 
	    register_post_type( 'vins',
	        array(
	            'labels' => array(
	                'name' => __( 'Nos Vins' ),
	                'singular_name' => __( 'Nos Vins' )
	            ),
	            'public' => true,
	            'has_archive' => true,
	            'show_in_rest' => true,
	 			'supports' => array( 'title', 'editor', 'thumbnail'),
	 			'menu_icon' => 'dashicons-color-picker',
	 			'taxonomies' => array('vins_categories')
	        )
	    );

	    register_taxonomy('vins_categories',array('vins'), array(
	        'hierarchical' => true,
	        'show_ui' => true,
	        'show_in_rest' => true,
	        'show_admin_column' => true,
	        'query_var' => true,
	    ));

	}

	// Hooking up our function to theme setup
	add_action( 'init', 'create_posttype' );


	/**
	 * Disable the emoji's
	 */
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );	
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		
		// Remove from TinyMCE
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	}
	add_action( 'init', 'disable_emojis' );

	/**
	 * Filter out the tinymce emoji plugin.
	 */
	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}

	function ts_widgets_init(){
        register_sidebar(array(

            'name' => 'search zone',
            'id' => 'search-zone-widget-area',
            'before_widget' => '<div class="search-content-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="search-content-title">',
            'after_title' => '</h2>',
        ));

    }

add_action('widgets_init', 'ts_widgets_init');