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
                         <div class="post">
                             <!-- post title -->
                             <h2 class="title"><span><a href="blog_post.html">Lorem Ipsum is simply dummy
                                         text</a></span></h2>
                             <!-- post thumbnail image -->
                             <img src="<?php echo get_template_directory_uri(); ?>/img/blog/1.jpg" alt="" />
                             <!-- post information -->
                             <div class="post_info">
                                 <!-- post date, author and tags -->
                                 <div class="fleft">On <span>12 Nov 2020</span> / By <a href="#">John Smith</a> / Tags
                                     <a href="#">Works</a>, <a href="#">Personal</a></div>
                                 <!-- comments -->
                                 <div class="fright"><a href="#">25</a> Comments</div>
                                 <div class="clear"></div>
                             </div>
                             <!-- post excerpt. total 90 words will display after that will show ... -->
                             <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.
                                 Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada
                                 odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci
                                 ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet
                                 eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum
                                 magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus
                                 eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                                 Integer rutrum ante eu lacus...</p>
                             <!-- post read more button -->
                             <a href="blog_post.html" class="arrow_link">Read more</a>
                         </div>

                         <!-- post pagination -->
                         <div class="pagination">
                             <ul>
                                 <li><a href="#">&larr;</a></li>
                                 <li class="active"><a href="#">10</a></li>
                                 <li class="disabled"><a href="#">...</a></li>
                                 <li><a href="#">20</a></li>
                                 <li><a href="#">&rarr;</a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="span4">
                         <div class="sidebar">
                             <div class="widget">
                                 <form class="form-search">
                                     <input type="text" class="input-medium search-query">
                                     <button type="submit" class="btn dark_btn">Search</button>
                                 </form>
                             </div>
                             <div class="widget">
                                 <h2 class="title"><span>text widjet</span></h2>
                                 <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
                                     porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat
                                     malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas
                                     tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada
                                     orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                     elit.</p>
                                 <p><a href="#" class="arrow_link">Read more</a></p>
                             </div>
                             <div class="widget">
                                 <h2 class="title"><span>recent posts</span></h2>
                                 <ul class="recent_post">
                                     <li>
                                         <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img8.jpg"
                                                 alt="" /></a>
                                         <div><a href="#">It is a long established fact that a reader will be distracted
                                             </a></div>
                                         16th July, 2020
                                         <div class="clear"></div>
                                     </li>
                                     <li>
                                         <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img9.jpg"
                                                 alt="" /></a>
                                         <div><a href="#">It is a long established fact that a reader will be distracted
                                             </a></div>
                                         16th July, 2020
                                         <div class="clear"></div>
                                     </li>
                                     <li>
                                         <a href="#"><img
                                                 src="<?php echo get_template_directory_uri(); ?>/img/img10.jpg"
                                                 alt="" /></a>
                                         <div><a href="#">It is a long established fact that a reader will be distracted
                                             </a></div>
                                         16th July, 2020
                                         <div class="clear"></div>
                                     </li>
                                 </ul>
                                 <p><a href="#" class="arrow_link">Go to the portfolio</a></p>
                             </div>
                             <div class="widget">
                                 <h2 class="title"><span>Latest tweets</span></h2>
                                 <div class="tweet_block"></div>
                             </div>
                             <div class="widget tags">
                                 <h2 class="title"><span>tags</span></h2>
                                 <a href="#">Lorem ipsum</a>
                                 <a href="#">Dolor</a>
                                 <a href="#">Long established</a>
                                 <a href="#">Sit amet</a>
                                 <a href="#">Latin words</a>
                                 <a href="#">Excepteur sint</a>
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