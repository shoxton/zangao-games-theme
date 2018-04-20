<?php if(is_front_page()) { ?>
    
        <?php 
            $highlights = new WP_Query( array( 'post_type' => 'highlights' ) );
        ?>
        <?php if ($highlights->have_posts()) : ?>

        <div class="highlight-carousel">
            
            <?php while ($highlights->have_posts()) : $highlights->the_post(); ?>
                <div class="highlight-item" style="background: url(<?php the_field('highlightImage') ;?>)">
                    <div class="item-overlay">
                        <div class="container">
                            <div class="item-content">
                                <div class="highlight-title">
                                    <h1><?php the_field('highlightName') ; ?></h1>
                                </div>
                                <div class="highlight-description">
                                    <h4><?php the_field('highlightDescription') ; ?></h4>
                                </div>
                                <div class="highlight-action">
                                    <?php 
                                    $term = get_field('resourceUrl');
                                    $siteUrl = home_url();
                                    if( $term ): ?>
                                        <a href="<?php echo "$siteUrl/tag/$term->slug "; ?>"><button>Veja mais</button></a>
                                    <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

            <?php else : ?> 
                <div class="site-header">
                    <div class="site-header-banner" style="background: url(<?php header_image(); ?>);"></div>
                    <div class="site-header-content custom-link">
                        <div class="site-header-text">
                            <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                            <h5><?php bloginfo('description'); ?></h5>
                        </div>
                    </div>
                </div>
        <?php endif; ?>
    
<?php } else { ?>
    <div class="site-header">
        <div class="site-header-banner" style="background: url(<?php header_image(); ?>);"></div>
        <div class="site-header-content custom-link">
            <div class="site-header-text">
                <?php if( is_category()) { ?>
                    <a href="<?php echo home_url(); ?>"><h1><?php single_cat_title(); ?></h1></a>
                    <h5><?php echo category_description(); ?></h5>
                <?php } elseif (is_page()) { ?>
                    <a href="<?php echo home_url(); ?>"><h1><?php the_title(); ?></h1></a>
                <?php } else { ?>   
                    <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                    <h5><?php bloginfo('description'); ?></h5>
                <?php }  ?>
            </div>
        </div>
    </div>
<?php } ?>