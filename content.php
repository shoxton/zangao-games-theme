<?php if (is_page()) { ?>
    <p><?php the_content(); ?></p>

<?php } elseif (is_single()) { ?>
    <article class="single">
        <div class="single-banner">
            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('banner_image'); ?>
                </a>
                <?php else : ?>
                    
            <?php endif; ?>
        </div>
        <div class="single-header">
            <h2><?php the_title(); ?></h2>
            <div class="single-meta">
                <span><?php the_time('j \d\e F'); ?> | por <?php the_author_posts_link(); ?> </span><span class="category-link"><?php the_category(' ');?></span>
            </div>
        </div>
        <div class="single-text">
            <?php the_content(); ?>
            <?php the_tags() ; ?>
        </div>

    </article>
<?php } else { ?>
    <article class="post">
        <div class="post-thumbnail">
            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('small_thumbnail'); ?>
                </a>
                <?php else : ?>

            <?php endif; ?>
            <div class="post-categories">
                <span class="category-link"><?php the_category(' ');?></span>
            </div>
        </div>
        <div class="post-meta">
            <span><?php the_time('j \d\e F'); ?> | por <?php the_author_posts_link(); ?> </span>
        </div>                            
        <div class="post-text">
            <a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <p>
                <?= get_the_excerpt(); ?><br>
                <a class="post-excerpt" href="<?php the_permalink(); ?>">Leia mais &raquo;</a>
            </p>
        </div>
    </article>
<?php }; ?>

