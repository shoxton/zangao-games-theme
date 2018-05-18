<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>

        <nav class="primary-menu">
            <div class="container">
                <div class="menu-con custom-link">
                    <div class="brand">
                        <span><a href="<?php echo home_url() ;?>"><?php bloginfo('name') ; ?></a></span> 
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
        <?php get_template_part('content', 'header') ; ?>
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
                    <button id="search-mobile-icon"><i class="fas fa-search"></i></button> 
                    <div class="search-bar">
                        <?php get_search_form(); ?>
                    </div>                  
                </div>
            </div>
        </nav>
                   
</header>

