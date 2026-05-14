<footer class="footer">
    <div class="container">

        <nav class="footer__nav">
            <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container'      => false,
                    'menu_class'     => 'footer__menu',
                    'fallback_cb'    => false,
                ]);
            ?>
        </nav>

        <p class="footer__copy">
            © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </p>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>