<?php 

get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-sm-9">
            <?php if(have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content'); ?>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php get_template_part('content', 'not-found'); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-3">
            <?php dynamic_sidebar('asidewidget'); ?>
        </div>
    </div>

</div>



<?php get_footer();




