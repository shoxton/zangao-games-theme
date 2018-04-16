<?php 
    $recentNews = new WP_Query('cat=10&posts_per_page=4');
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

<?php dynamic_sidebar('asidewidget'); ?>