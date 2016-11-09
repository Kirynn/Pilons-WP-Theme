        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-8">
                        <h2>The PiLons</h2>
                        <h3>Oakville - Ontario</h3>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <ul class="nav nav-social">
                            <li><a href="#"><i class="fa fa-facebook-square fa-3x" id="facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square fa-3x" id="twitter"></i></a></li>
                        </ul>
                    </div>
                    <?php
                            wp_nav_menu(array(
                                'menu'            => 'footer-menu',
                                'container'       => 'div',
                                'container_class' => 'col-md-4 col-xs-12',
                                'menu_class'      => 'nav nav-footer'
                            ));
                    ?>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>