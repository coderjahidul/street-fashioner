<?php 
/**
 * Sidebar Template
 */
?>

<div class="sidebar">
    <div class="widget">
        <!-- search form -->
        <?php get_search_form();?>
        <!-- /search form -->
    </div>

    <?php if (is_active_sidebar('blog-sidebar')) : ?>
    <div id="secondary" class="widget-area">
        <?php dynamic_sidebar('blog-sidebar'); ?>
    </div>
    <?php endif; ?>

    <div class="widget">
        <h2 class="title"><span>Latest tweets</span></h2>
        <div class="tweet_block"></div>
    </div>

    
</div>