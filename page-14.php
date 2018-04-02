<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-lg-9">

            <?php if (have_posts()) : ?>
                
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                    <?php the_content(); ?>
                </div>

                <?php endwhile; ?>

                <?php else : ?> 
                    <div class="col-12">
                        <?php get_template_part('content', 'not-found'); ?>
                    </div>

            <?php endif; ?>

        </div>
        <div class="col-lg-3">
            <?php dynamic_sidebar('asidewidget'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>




