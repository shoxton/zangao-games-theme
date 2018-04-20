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

<?php dynamic_sidebar('asidewidget'); ?>