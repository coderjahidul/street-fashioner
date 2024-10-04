<?php 
get_header();
?>
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
                <div class="row">
                    <div class="span8">
                        <!-- loop post -->
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <!-- post title -->
                            <h2 class="title"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                            </h2>
                            <!-- post thumbnail image -->
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            <!-- post information -->
                            <div class="post_info">
                                <!-- post date, author and tags -->
                                <div class="fleft">On <span><?php echo get_the_date(); ?></span> / By <a
                                        href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                    / Tags <?php the_tags('', ', '); ?></div>
                                <!-- comments -->
                                <div class="fright"><a
                                        href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a>
                                    Comments</div>
                                <div class="clear"></div>
                            </div>
                            <!-- post excerpt -->
                            <p><?php the_excerpt(); ?></p>
                            <!-- post read more button -->
                            <a href="<?php the_permalink(); ?>" class="arrow_link">Read more</a>
                        </div>
                        <?php endwhile; else : ?>
                        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                        <!-- /loop post -->

                        <!-- post pagination -->
                        <?php custom_pagination(); ?>
                        <!-- /post pagination -->

                    </div>

                    <div class="span4">
                        <!-- get sidebar -->
                        <?php get_sidebar(); ?>
                        <!-- /get sidebar -->
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--//page_container-->
<?php
get_footer();
?>