<footer>
    <div class="left">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'contact'
                )
            );
        ?>
    </div>
    <div class="center">
        <a href="">
            <h6>
                Desarrollado por
                <br>
                <span class="scoodie">Scoodie</span>
            </h6></div>
        </a>
    <div class="right">
        <?php
            wp_nav_menu(    
                array(
                    'theme_location' => 'social-network'
                )
            );
        ?>
    </div>
</footer>
</body>
</html>