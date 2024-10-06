<?php
get_header(); ?>

<!--page_container-->
<div class="page_container">
    <!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="wrap">
            <div class="container">
                <a href="<?php echo home_url(); ?>">Home</a><span>/</span>
                <?php if (is_home()) : ?>
                    Blog
                <?php elseif (is_single()) : ?>
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a><span>/</span>
                    <?php the_title(); ?>
                <?php elseif (is_category()) : ?>
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a><span>/</span>
                    <?php single_cat_title(); ?>
                <?php elseif (is_tag()) : ?>
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a><span>/</span>
                    Tag: <?php single_tag_title(); ?>
                <?php elseif (is_search()) : ?>
                    Search results for: "<?php echo get_search_query(); ?>"
                <?php elseif (is_404()) : ?>
                    Page not found
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="container">
            <section>
                <div class="row pad5">
                    <div class="span8">
                        <div class="post">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                            <div class="post_info">
                                <div class="fleft">On <span><?php echo get_the_date('d M Y'); ?></span> / By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> / Tags <a href="#"><?php the_tags('', ', '); ?></a></div>
                                <div class="fright"><a href="<?php echo get_comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a> <?php echo get_comments_number() > 1 ? ' Comments' : ' Comment'; ?></div>
                                <div class="clear"></div>
                            </div>
                            <?php echo the_content(); ?>
                        </div>
                        <?php
                        // Display comment form
                        if (comments_open()) :
                            comment_form();
                        endif;

                        ?>


                    </div>
                    <div class="span4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--//page_container-->

<?php
get_footer();
