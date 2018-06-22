<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9">
            <div class="row">
                <div class="about-author col-12">
                    <?php
                        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                    ?>
                    <div class="author-info">
                        <div class="author-pic">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?>
                        </div>
                        <div class="author-desc">
                            <h4><?php echo $curauth->display_name; ?></h4>
                            <?php echo $curauth->user_description; ?>
                        </div>
                    </div>

                </div>
            </div>
            <h2 class="archive-posts-header">Postagens de <?php echo $curauth->display_name; ?></h2>
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
</div>

<?php get_footer(); ?>




