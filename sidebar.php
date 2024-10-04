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
    
    <div class="widget">
        <h2 class="title"><span>links</span></h2>
        <ul class="links">
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
            <li><a href="#">Adipisicing elit, sed do eiusmod tempor incididunt</a></li>
            <li><a href="#">Ut labore et dolore magna aliqua.</a></li>
            <li><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></li>
            <li><a href="#">Laboris nisi ut aliquip ex ea commodo consequat.</a></li>
            <li><a href="#">Duis aute irure dolor in reprehenderit</a></li>
            <li><a href="#">In voluptate velit esse cillum</a></li>
            <li><a href="#">Excepteur sint occaecat cupidatat non proident</a></li>
        </ul>
    </div>
</div>