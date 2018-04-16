    <footer class="site-footer">

        <div class="container">
            <div class="row">
                <div class="footer-item col-md-4">
                    <?php dynamic_sidebar('footerwidget1'); ?>
                </div>
                <div class="footer-item col-md-4">
                    <?php dynamic_sidebar('footerwidget2'); ?>
                </div>
                <div class="footer-item col-md-4">
                    <?php dynamic_sidebar('footerwidget3'); ?>
                </div>
            </div>
        </div>

        <div class="footer-meta page-con">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="footer-nav horizontal-menu">
                            <?php 
                                $args = array(
                                    'theme_location' => 'footer'
                                );
                            ?>
                            <?php wp_nav_menu( $args ); ?>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <span class="site-meta"><?php bloginfo('name'); ?> &copy; <?php date('Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>


    </footer>

<?php wp_footer(); ?>
</body>
</html>