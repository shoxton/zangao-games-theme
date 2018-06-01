<?php get_header(); ?>

    <div class="page-con container">
        <div class="row">
            <!-- Advertise box -->
            <div class="ads-container">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- General Ads Block -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-2749150033363966"
                    data-ad-slot="7203047923"
                    data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-9">
                <h2 class="archive-posts-header">Postagens</h2>
                <div class="d-flex row">
                    <?php if (have_posts()) : ?>
                        
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="col-12 col-sm-6 col-lg-6 col-xl-4 col-margin">
                            <?php get_template_part('content'); ?>
                        </div>

                        <?php endwhile; ?>

                        <?php else : ?> 
                            <div class="col-12">
                                <?php get_template_part('content', 'not-found'); ?>
                            </div>

                    <?php endif; ?>
                </div>
                
                <div class="pagination">
                    <?php echo paginate_links(); ?>
                </div>
                
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <?php get_template_part('content', 'sidebar'); ?>
            </div>
        </div>
        <div class="row">
            <!-- Advertise box -->
            <div class="ads-container">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- General Ads Block -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-2749150033363966"
                    data-ad-slot="7203047923"
                    data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
    <?php get_template_part('content', 'index'); ?>

<?php get_footer(); ?>




