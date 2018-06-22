<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
    "palette": {
        "popup": {
        "background": "#212121"
        },
        "button": {
        "background": "#e94b3c"
        }
    },
    "theme": "edgeless",
    "content": {
        "message": "Este site utiliza cookies para garantir que você obtenha uma melhor experiência em nosso site.",
        "dismiss": "OK",
        "link": "Saiba mais",
        "href": "https://policies.google.com/technologies/partner-sites"
    }
    })});
    </script>

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

                        <div class="social-links">
                            <a href="https://facebook.com/zangaogamesoficial"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.youtube.com/channel/UC8racR0Ko9HzKpIBAPvifKw"><i class="fab fa-youtube-square"></i></a>
                            <a href="https://twitter.com/3duardoaniceto"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://instagram.com/zangaogames"><i class="fab fa-instagram"></i></a>
                       </div>

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

