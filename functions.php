<?php
function add_support(){
    $default = [
        'height' => 150,
		'width' => 275,
		'flex-height' => true,
		'flex-width' => true,
		'unlink-homepage-logo' => true,
    ];
    add_theme_support("custom-logo", $default);
}
add_action("after_setup_theme", "add_support");
// Eliminar panel de comentarios en el panel de administracion (escritorio)
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
//Iniciar template con los menus
function init_template(){
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
			array(
				'main' => 'Main',
                'social-network' => 'Social networks',
				'contact' => 'Contact',
			)
	);
}
add_action('init', 'init_template');
//Agregando assets
function add_assets(){
	//css
	wp_enqueue_style(
		'main', 
		get_template_directory_uri().'/assets/css/main.css',
		'all'
	);
	//iconos wordpress
	wp_enqueue_style( 'dashicons' );
	//Scripts
	wp_enqueue_script('otro', get_template_directory_uri().'/assets/js/main-slider.js', true, true);
}
add_action('wp_enqueue_scripts', 'add_assets');

//Contenido destacado
function featured_content(){
	$labels = array(
		'name' => 'Featured content',
		'singular_name' => 'featured-content',
		'manu_name' => 'Featured content',
	);
	$args = array(
			'label'  => 'featured-content', 
			'description' => 'Featured content in the main slider',
			'labels'       => $labels,
			'supports'   => array('title','thumbnail'),
			'public'    => true,
			'show_in_menu' => true,
			'menu_position' => 1,
			'menu_icon'     => 'dashicons-format-image',
			'can_export' => true,
			'publicly_queryable' => true,
			'rewrite'       => true,
			'show_in_rest' => true
	);  
	//Nombre de post types en singular es recomendado  
	register_post_type('featured-content', $args);
}

add_action('init', 'featured_content');

?>
