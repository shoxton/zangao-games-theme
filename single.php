<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content'); ?>
                    <div class="post-nav">
                        <div class="row">
                            <?php $prev_post = get_previous_post(); ?>
                            <div class="col-sm-6">
                                <div class="item-post-nav" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID)); ?>);">
                                    <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                        <p><i class="fas fa-arrow-left"></i> Anterior</p>
                                        <h3><?php echo get_the_title($prev_post->ID) ; ?></h3>
                                    </a>
                                </div>
                            </div>
                            <?php $next_post = get_next_post(); ?>
                            <div class="col-sm-6">
                                <div class="item-post-nav" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($next_post->ID)); ?>);">
                                    <a href="<?php echo get_permalink($next_post->ID); ?>">
                                        <p>Próximo <i class="fas fa-arrow-right"></i></p>
                                        <h3><?php echo get_the_title($next_post->ID) ; ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php else : ?> 
                    <div class="col-12">
                        <div class="row">
                            <div class="no-results">
                                <p>Nenhum resultado foi encontrado<p>
                                <span>Desculpe pela inconveniência, parece que esta página está vazia.</span>
                                <div class="sad-face">
                                    <i class="far fa-frown"></i>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php endif; ?>
        <?php if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        </div>
        <div class="col-12 col-lg-4 col-xl-3">
            <?php get_template_part('content', 'sidebar'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>


