<?php get_header(); ?>

    <div class="page-con container">
        <?php get_template_part('content','ads'); ?>    
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
                    <?php echo paginate_links([
                        "mid_size" => 0,
                        "prev_text" => "&#171;",
                        "next_text" => "&#187;"
                    ]); ?>
                </div>
                
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <?php get_template_part('content', 'sidebar'); ?>
            </div>
        </div>
        <?php get_template_part('content','ads'); ?>
    </div>
    <?php get_template_part('content', 'index'); ?>

<?php get_footer(); ?>




