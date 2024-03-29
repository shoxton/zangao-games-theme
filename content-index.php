
    <div class="call-to-channel">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="first-col">
                            <div class="condense">
                                <div id ="live-container" class="iframe-card">
                                    <div class="iframe-text"></div>    
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
                                    <div id="channel-thumb" class="button-img">
                                        
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
                <div id="videos-container" class="row">
                
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
                        <div class="col-lg-4">
                            <h3 class="lighted-posts-title">Notícias</h3>
                            
                            <?php 
                                $recentUpdates = new WP_Query( array( 'category_name' => 'news', 'posts_per_page' => 3 ) );
                            ?>
                            <?php if($recentUpdates->have_posts()) : ?>
                                <?php while ($recentUpdates->have_posts()) : $recentUpdates->the_post(); ?>
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
                                <div class="row">
                                    <div class="col-12">
                                        <a href="<?php echo home_url() ;?>/category/news"><button class="watch-more-btn">Veja mais notícias</button></a>
                                    </div>
                                </div>
                                <?php else : ?> 
                                        <div class="col-12">
                                            <?php get_template_part('content', 'not-found'); ?>
                                        </div>

                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                            
                        </div>
                        <div class="col-lg-4">
                            <h3 class="lighted-posts-title">Tutoriais</h3>
                            <?php 
                                $recentUpdates = new WP_Query( array( 'category_name' => 'tutorials', 'posts_per_page' => 3 ) );
                            ?>
                            <?php if($recentUpdates->have_posts()) : ?>
                                <?php while ($recentUpdates->have_posts()) : $recentUpdates->the_post(); ?>
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
                                <div class="row">
                                    <div class="col-12">
                                        <a href="<?php echo home_url() ;?>/category/tutorials"><button class="watch-more-btn">Veja mais tutoriais</button></a>
                                    </div>
                                </div>
                                <?php else : ?> 
                                        <div class="col-12">
                                            <?php get_template_part('content', 'not-found'); ?>
                                        </div>

                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                            
                        </div>
                        <div class="col-lg-4">
                            <h3 class="lighted-posts-title">Atualizações</h3>
                            <?php 
                                $recentUpdates = new WP_Query( array( 'category_name' => 'updates', 'posts_per_page' => 3 ) );
                            ?>
                            <?php if($recentUpdates->have_posts()) : ?>
                                <?php while ($recentUpdates->have_posts()) : $recentUpdates->the_post(); ?>
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
                                <div class="row">
                                    <div class="col-12">
                                        <a href="<?php echo home_url() ;?>/category/updates"><button class="watch-more-btn">Veja mais atualizações</button></a>
                                    </div>
                                </div>

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




