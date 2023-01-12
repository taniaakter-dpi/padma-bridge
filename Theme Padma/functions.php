<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot',  get_template_directory_uri() .'/assest/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assest/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );
add_theme_support( 'post-thumbnails' );
/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'BD logo', 'themepadma' ),
		'id'            => 'bdlogo',
		'before_widget' => '',
		'after_widget'  => '',
		
	) );
	register_sidebar( array(
		'name'          => __( 'Hero Title', 'themepadma' ),
		'id'            => 'herotitle',
		'before_widget' => '',
		'after_widget'  => '',
		) );
		register_sidebar( array(
			'name'          => __( 'Hero Card-1', 'themepadma' ),
			'id'            => 'herocard1',
			'before_widget' => '',
			'after_widget'  => '',
			) );
			register_sidebar( array(
				'name'          => __( 'Hero Card-2', 'themepadma' ),
				'id'            => 'herocard2',
				'before_widget' => '',
				'after_widget'  => '',
				) );
				register_sidebar( array(
					'name'          => __( 'Hero Card-2', 'themepadma' ),
					'id'            => 'herocard2',
					'before_widget' => '',
					'after_widget'  => '',
					) );
}
   add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

   register_nav_menus( array(
	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
   ) );









?>