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
                        <?php wp_list_categories(); ?>
                    </nav>
                </div>
                <div class="footer-item col-md-4">
                    <?php dynamic_sidebar('footerwidget'); ?>
                    <!-- <ul>
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
                    </ul> -->
                </div>
                <div class="footer-item col-md-4">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGTA.easter.egg%2F&tabs&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
        <div class="bottom-footer text-center">
            <span>Created by kaiteN | <?php bloginfo('name'); ?> - &copy; <?= date('Y'); ?></span>
        </div>

    </footer>

<?php wp_footer(); ?>
</body>
</html>