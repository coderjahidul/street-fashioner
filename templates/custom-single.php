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
        <div class="wrap">
            <div class="container">
                <section>
                    <div class="row pad5">
                        <div class="span8">
                            <div class="post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                                <div class="post_info">
                                    <div class="fleft">On <span><?php echo get_the_date(); ?></span> / By <a href="#"><?php the_author(); ?></a> / Tags <?php the_tags('', ', ', ''); ?></div>
                                    <div class="fright"><a href="#"><?php comments_number('0', '1', '%'); ?></a> Comments</div>
                                    <div class="clear"></div>
                                </div>
                                <p><?php the_content(); ?></p> 
                                <ul class="links">
                                    <li><a href="#">Etiam vitae felis sit amet libero viverra varius et ut nisi.</a></li>
                                    <li><a href="#">Pellentesque egestas scelerisque turpis, ut dignissim mauris luctus vel.</a></li>
                                    <li><a href="#">Fusce et ante at ligula lobortis congue a in eros.</a></li>
                                    <li><a href="#">In hac habitasse platea dictumst lorem ipsum dolor sit amet, consectetur.</a></li>
                                    <li><a href="#">Phasellus adipiscing varius felis, sit amet feugiat turpis consequat at.</a></li>
                                </ul>
                                <p>Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu...</p>
                            </div>

                            <!-- Comments -->
                            <?php if ( comments_open() || get_comments_number() ) : ?>
                                <?php comments_template(); ?>
                            <?php endif; ?>

                            <!-- Leave a Comment -->
                            <h4>Leave a comment</h4>
                            <?php comment_form(); ?>
                            <!-- //Leave a Comment -->
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
</div>
<!--//page_container-->

<?php
get_footer();
