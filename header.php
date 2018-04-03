<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>

        <nav class="primary-menu">
            <div class="container">
                <div class="menu-con custom-link">
                    <div class="brand">
                        <span><a href="http://zangaogames.local/"><i class="fas fa-arrow-left"></i>&nbsp;Voltar ao site</a></span>
                    </div>
                    
                    <div class="menu-links horizontal-menu">
                        <?php 
                            $args = array(
                                'theme_location' => 'primary'
                            );
                        ?>
                        <?php wp_nav_menu( $args ); ?>
                    </div>
                    <a id="mobile-menu-icon" href="#"><i class="fas fa-bars"></i></a>
                </div>
            </div>
        </nav>
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
        <nav id="sticky-nav" class="category-menu custom-link">
            <div class="container">
                <div class="menu-con">
                    <div class="menu-links">
                        <?php 
                            $args = array(
                                'theme_location' => 'category'
                            );
                        ?>
                        <?php wp_nav_menu( $args ); ?> 
                    </div>
                    <button id="search-mobile-icon" href=""><i class="fas fa-search"></i></button> 
                    <div class="search-bar">
                        <?php get_search_form(); ?>
                    </div>                  
                </div>
            </div>
        </nav>                    
    </header>

