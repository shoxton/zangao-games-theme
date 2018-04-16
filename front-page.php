<?php get_header(); ?>
    <div class="call-to-channel">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="first-col">
                            <div class="condense">
                                <div class="iframe-card">
                                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/Sqk2eQWGpgw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <div class="iframe-text">
                                        <h5>Titulo do vídeo</h5>
                                        <a href="">Assistir no youtube</a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="last-col">
                            <div class="condense">
                                <div class="section-title">
                                    <h2>Fique por dentro das novidades do canal</h2>
                                </div>
                                <div class="yt-button">
                                    <div class="button-img">
                                        <img src="" alt="" width="100%" height="100%">
                                    </div>
                                    <div class="button-action">
                                        <a href="https://www.youtube.com/channel/UC8racR0Ko9HzKpIBAPvifKw?sub_confirmation=1" target="_blank"><button class="button-custom">Increver-se</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="videos">
        <div class="container">
            <div class="wrapper">
                <div class="section-title">
                    <h2>No canal</h2>
                </div>
                <div class="videos-container">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-eb7c57ae-e918-43fe-a9cb-2cbf0c561b59"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="wrapper">
                <div class="section-title">
                    <h2>No blog</h2>
                </div>
                <div class="news-container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row full-height-posts-row">
                                <?php 
                                    $recentUpdates = new WP_Query('cat=6&posts_per_page=6');
                                ?>
                                <?php if($recentUpdates->have_posts()) : ?>
                                    <?php while ($recentUpdates->have_posts()) : $recentUpdates->the_post(); ?>
                                        <div style="background: url(<?php the_post_thumbnail_url(); ?>);" class="post-box-full-height post-box">
                                            <div class="post-box-overlay">
                                                <div class="post-categories">
                                                    <span class="category-link"><?php the_category(' ');?></span>
                                                </div>
                                                <div class="post-box-title">
                                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php else : ?> 
                                            <div class="col-12">
                                                <?php get_template_part('content', 'not-found'); ?>
                                            </div>

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row aside-news-col">
                                <?php 
                                    $recentNews = new WP_Query('cat=10&posts_per_page=3');
                                ?>
                                <?php if($recentNews->have_posts()) : ?>
                                    <?php while ($recentNews->have_posts()) : $recentNews->the_post(); ?>
                                    <div style="background: url(<?php the_post_thumbnail_url(); ?>);" class="post-box">
                                        <div class="post-box-overlay">
                                            <div class="post-categories">
                                                <span class="category-link"><?php the_category(' ');?></span>
                                            </div>
                                            <div class="post-box-title">
                                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php else : ?> 
                                            <div class="col-12">
                                                <?php get_template_part('content', 'not-found'); ?>
                                            </div>

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>




