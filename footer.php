    <footer class="site-footer">

        <div class="container">
            <div class="row">
                <div class="footer-item col-md-4">
                    <nav>
                        <?php 
                            $args = array(
                                'theme_location' => 'footer'
                            );
                        ?>
                        <?php wp_nav_menu( $args ); ?>
                    </nav>
                    <?php dynamic_sidebar('footerwidget1'); ?>
                </div>
                <div class="footer-item col-md-4">
                    <ul>
                        <li>
                            <p>Ajude o canal</p>
                            <button>Donate</button>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>Anuncie sua marca ou produto</p>
                            <button>Saiba mais</button>
                        </li>
                    </ul>
                </div>
                <div class="footer-item col-md-4">
                    <?php dynamic_sidebar('footerwidget3'); ?>
                </div>
            </div>
        </div>
        <div class="bottom-footer text-center">
            <span>Created by <a href="https://github.com/shoxton" target="_blank">kaiteN</a> | <a href="https://www.youtube.com/channel/UC8racR0Ko9HzKpIBAPvifKw" target="_blank"><?php bloginfo('name'); ?></a> &copy; <?= date('Y'); ?></span>
        </div>

    </footer>

<?php wp_footer(); ?>
</body>
</html>