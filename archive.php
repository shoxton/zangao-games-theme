<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-lg-9">
            <h2 class="archive-posts-header"><?php
                if ( is_category()) { ?>
                    Postagens de <?php single_cat_title();
                } elseif ( is_tag()) { ?>
                    Postagens de <?php single_tag_title();
                } elseif ( is_day()) {
                    echo "Postagens de " . get_the_date();
                } elseif ( is_month()) {
                    echo "Postagens de " . get_the_date('F \d\e Y');
                } elseif ( is_year()) {
                    echo "Postagens de " . get_the_date('Y');
                } else {
                    
                }
            ;?></h2>
            <div class="d-flex row">
                <?php if (have_posts()) : ?>
                    
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-margin">
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
        <div class="col-lg-3">
            <?php dynamic_sidebar('asidewidget'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>




