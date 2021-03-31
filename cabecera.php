<!-- Para conseguir el menu -->
<?php
    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    }
?>
<header>
    <a href = "/creser">
        <img alt="logo" src="<?php echo $logo[0] ?>">
    </a>
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'social-network'
            )
        );
        wp_nav_menu(
            array(
                'theme_location' => 'main',
            )
        );
    ?>
</header>

