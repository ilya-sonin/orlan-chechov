<?php

// Enable support for <title> tag.
add_theme_support( 'title-tag' );

// Connect style
add_action( 'wp_enqueue_scripts', 'theme_styles');
function theme_styles(){
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'all.min', get_template_directory_uri() . '/assets/css/all.min.css' );
    wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/assets/css/animate.min.css' );
    wp_enqueue_style( 'jquery.datetimepicker.min', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css' );
    wp_enqueue_style( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
    wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/assets/css/linearicons.css' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
// END

// Connect scripts
add_action( 'wp_footer', 'theme_scripts' );
function theme_scripts(){
    wp_enqueue_script( 'libs.min', get_template_directory_uri() . '/assets/js/libs.min.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
}
// END

// Connected Menu First Menu
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu(){
    register_nav_menu( 'basicMenu', 'Главное меню в шапке' );
}
// END


// Connected Menu Second Menu
add_action( 'after_setup_theme', 'theme_register_nav_menu_two' );
function theme_register_nav_menu_two(){
    register_nav_menu( 'sidebarMenu', 'Сайбар' );
}
// END


// Add class for parent dropdown menu
add_filter('wp_nav_menu_objects', 'css_for_nav_parrent');
function css_for_nav_parrent( $items ){
	foreach( $items as $item ){
		if( __nav_hasSub( $item->ID, $items ) )
			$item->classes[] = 'menu-dropdown';
	}

	return $items;
}
function __nav_hasSub( $item_id, $items ){
	foreach( $items as $item ){
		if( $item->menu_item_parent && $item->menu_item_parent == $item_id )
			return true;
	}

	return false;
}

// Add Age field
add_filter('comment_form_default_fields', 'add_age_field');
function add_age_field($fields){
    $fields['age'] = '<div class="form-group"><input name="age" type="number" placeholder="Ваш возраст" required></div>';
	return $fields;
}

// Sort form
add_filter('comment_form_fields', 'reorder_comment_fields' );
function reorder_comment_fields( $fields ){

	$new_fields = array();
	$myorder = array('author', 'age', 'comment');

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

// Comment POST
add_action( 'comment_post', 'save_extend_comment_meta_data' );

function save_extend_comment_meta_data( $comment_id ){

	if ( !empty( $_POST['age'] ) ){
		$age = sanitize_text_field($_POST['age']);
		add_comment_meta( $comment_id, 'age', $age );
	}

}
