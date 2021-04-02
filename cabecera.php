<!-- Para conseguir el menu -->
<?php
    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    }
?>
<header>
    <div class="left">
        <a href = "/">
            <img alt="logo" src="<?php echo $logo[0] ?>">
        </a>
    </div>
    <div class="right">
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
        <!--movil-->
        <div class="movil">
            <span class="dashicons dashicons-menu"></span>
        </div>
    </div>
</header>

<!-- 1._ GENERAR template_part menu movil
    2._ hacer con html y darle estilos
    3._ display: none;
    4._ funcionalidad con javascrit que al presionar se hace display: flex; y cuando no display: none;
