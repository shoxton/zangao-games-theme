<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9">
            <?php if (have_posts()) : ?>
            <h2 class="archive-posts-header">Resultados para <?php the_search_query();?></h2>
            <div class="d-flex row">
                    
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 col-margin">
                    <?php get_template_part('content'); ?>
                </div>
                <?php endwhile; ?>

            </div>
                <?php else : ?>
                <div class="row">
                    <div class="col-12">
                        <?php get_template_part('content', 'not-found'); ?>
                    </div>
                </div> 

            <?php endif; ?>
            
            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-3">
            <?php get_template_part('content', 'sidebar'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>




