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
	register_nav_menus(
			array(
				'main' => 'Menú Principal',
                'social-network' => 'Redes Sociales'
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
}
add_action('wp_enqueue_scripts', 'add_assets');
?>
