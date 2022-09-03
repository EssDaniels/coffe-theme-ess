<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__col">
            <h2>GROUND</h2>
            <?php wp_nav_menu([
                'theme_location' => 'mark_menu',
                'menu_class' => 'mark'
            ]); ?>
        </div>
        <div class="footer__col">
            <h2>Sklep</h2>
            <?php wp_nav_menu([
                'theme_location' => 'extra_menu',
                'menu_class' => 'policy'
            ]); ?>
        </div>
        <div class="footer__col">
            <?php wp_nav_menu([
                'theme_location' => 'secondary_menu',
                'menu_class' => 'social'
            ]); ?>
        </div>
        <div class="footer__col">
            <div class="footer__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="footer__contact">
                <?= $args['kontakt']; ?>
            </div>
        </div>
    </div>
</footer>