<?php
    $args = array(
        'posts_per_page' => 3,
        'orderby'        => 'most_recent'
    ); 
    $recentNews = new WP_Query($args);
?>
<?php if($recentNews->have_posts()) : ?>
<h2 class="archive-posts-header">Posts recentes</h2>

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


<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!-- Advertise box -->
<div class="col-12 jumbotron" id="ads-container">
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

<?php dynamic_sidebar('asidewidget'); ?>

<!-- Advertise box -->
<div class="col-12 jumbotron" id="ads-container">
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