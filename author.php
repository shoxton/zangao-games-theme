<?php get_header(); ?>

<div class="page-con container">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="about-author col-12">
                    <?php
                        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                    ?>
                    <div class="author-info">
                        <a href="<?php echo $curauth->user_url; ?>" target="_blank" ><h4><?php echo $curauth->nickname; ?></h4></a>
                        
                        <?php echo $curauth->user_description; ?>
                    </div>

                </div>
            </div>
            <h2 class="archive-posts-header">Postagens de <?php echo $curauth->nickname; ?></h2>
            <div class="d-flex row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-12 col-md-6 col-lg-6 col-margin">
                        <article class="post">
                            <div class="row">
                                <div class="post-thumbnail col-4">
                                    <?php if ( has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                                            <?php the_post_thumbnail('small_thumbnail'); ?>
                                        </a>
                                        <?php else : ?>
                                            
                                    <?php endif; ?>
                                </div>
                                <div class="post-text col-8">
                                    <a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <?php endwhile; ?>

                    <?php else : ?> 
                        <?= '<p>No content found</p>'; ?>

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




