<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-12 col-lg-9">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content'); ?>
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

            

        </div>
        <div class="col-12 col-lg-3">
            <?php dynamic_sidebar('asidewidget'); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row comments-con">
        <div class="col-9">
            <?php if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>


