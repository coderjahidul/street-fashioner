<?php 
// Template Name: Front Page
get_header(); ?>
    <!--page_container-->
    <div class="page_container">
        <!--slider-->
        <div id="main_slider">
            <div class="camera_wrap" id="camera_wrap_1">
                <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
                    <?php if ( get_theme_mod( 'slider_image_' . $i ) ) : ?>
                        <div data-src="<?php echo esc_url( get_theme_mod( 'slider_image_' . $i ) ); ?>"></div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->

                       
        <!--planning-->
        <div class="wrap planning">
            <div class="container">
            <div class="row">
                <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                    <div class="span3">
                        <a href="#">
                            <?php if ( get_theme_mod( 'home_planning_icon_' . $i ) ) : ?>
                                <span class="img_icon icon<?php echo $i; ?>" style="background-image:url(<?php echo esc_url( get_theme_mod( 'home_planning_icon_' . $i ) ); ?>);"></span>
                            <?php endif; ?>
                            <span class="link_title"><?php echo esc_html( get_theme_mod( 'home_planning_title_' . $i ) ); ?></span>
                            <p><?php echo esc_html( get_theme_mod( 'home_planning_description_' . $i ) ); ?></p>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>

            </div>
        </div>
        <!--//planning-->
        
        <!--Welcome-->
        <!-- <div class="wrap block">
            <div class="container welcome_block">
            	<div class="welcome_line welcome_t"></div>
            	Cras vulputate pretium massa gravida egestas consectetur?<span>Lorem ipsum dolor sit amet &amp; consectetur adipiscing elit!</span>
                <div class="welcome_line welcome_b"></div>
            </div>
        </div> -->
        <!--//Welcome-->         
        
        <!--featured works-->
        <div class="wrap block carousel_block">
            <div class="container">
                <h2 class="upper"><?php echo esc_html( get_theme_mod( 'gallery_section_title' ) ); ?></h2>
                <div class="row">
                    <div class="span12">
                        <ul id="mycarousel" class="jcarousel-skin-tango">
                            <?php for ( $i = 1; $i <= 10; $i++ ) : ?>
                                <?php $image = get_theme_mod( 'featured_work_image_' . $i ); ?>
                                <?php if ( $image ) : ?>
                                    <li>
                                        <div class="hover_img">
                                            <a href="<?php echo esc_url( $image ); ?>" rel="prettyPhoto[portfolio1]">
                                                <img src="<?php echo esc_url( $image ); ?>" alt="Featured Work" />
                                                <span class="portfolio_zoom1"></span>
                                            </a>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
        <!--//featured works-->
        
        <!--Latest news-->
        <div class="wrap block">
        	<div class="container">
        		<div class="row news_block">
                <div class="span6">
                    <h2 class="title"><?php echo esc_html( get_theme_mod( 'short_about_title', 'Site Short About Section' ) ); ?></h2>
                    <p><?php echo wp_kses_post( get_theme_mod( 'short_about_content', 'Vestibulum tincidunt ultricies aliquam. Donec porta mi nec tortor sagittis rhoncus.' ) ); ?></p>
                </div>

                    <div class="span6">
                    	<h2 class="title">Latest news</h2>
                        <ul id="newscarousel" class="jcarousel-skin-tango">
                            <li>
                            	<div class="news_date">15 apr<span>2019</span></div>
                                <div class="news_t"><a href="#">Sed massa dui, porta corper ac varius!</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a>  /  In <a href="#">City</a><br/>Tags: <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info">Tristique tincidunt cursus sed, ornare ncidunt eque a tristique. Phasellus porttitor mollis tortor etoq vestibulum. Quisque non lacus tortor, quis cumsan nibh. Lorem ipsum dolor sit amet, consectetur icing elit. Nullam pulvinarteses lorem sed dui euismod eget. <a href="#">Read more...</a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                            	<div class="news_date">05 apr<span>2019</span></div>
                                <div class="news_t"><a href="#">eget &amp; massa viviamu marius mas</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a>  /  In <a href="#">City</a><br/>Tags: <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info">Cursus sed, aliquet nec odio. Integer ornare tincidunt neque a tristique. Phasellus porttitor millis tortor etoq vestibulum. Quisque ont lacus toirtor uis accumsan nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ulvinarteses em sed. <a href="#">Read more...</a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                            	<div class="news_date">15 apr<span>2019</span></div>
                                <div class="news_t"><a href="#">Sed massa dui, porta corper ac varius!</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a>  /  In <a href="#">City</a><br/>Tags: <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info">Tristique tincidunt cursus sed, ornare ncidunt eque a tristique. Phasellus porttitor mollis tortor etoq vestibulum. Quisque non lacus tortor, quis cumsan nibh. Lorem ipsum dolor sit amet, consectetur icing elit. Nullam pulvinarteses lorem sed dui euismod eget. <a href="#">Read more...</a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                            	<div class="news_date">05 apr<span>2019</span></div>
                                <div class="news_t"><a href="#">eget &amp; massa viviamu marius mas</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a>  /  In <a href="#">City</a><br/>Tags: <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info">Cursus sed, aliquet nec odio. Integer ornare tincidunt neque a tristique. Phasellus porttitor millis tortor etoq vestibulum. Quisque ont lacus toirtor uis accumsan nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ulvinarteses em sed. <a href="#">Read more...</a></div>
                                <div class="clear"></div>
                            </li>
                         </ul> 
                    </div>       		
            	</div>
        	</div>
        </div>
        <!--Latest news-->
        
        <!--latest posts-->
        <div class="wrap block carousel_block">
            <div class="container">
            	<h2 class="upper">latest posts</h2>
            	<div class="row">
                    <div class="span12">
                        <ul id="mycarousel2" class="jcarousel-skin-tango">
                            <li>
                            	<div class="post_carousel">
                                	<img src="<?php echo get_template_directory_uri(); ?>/img/home_blog/1.jpg" alt="" />
                                	<div class="title_t"><a href="#">ipsum dolor ac egestas mas</a></div>
                                    <div class="post_meta">
                                		Posted by <a href="#">John Doe</a>  /  15 apr  / In <a href="#">Vacation</a>
                                    </div>
                                    Ut nisl turpis, tristique tincidunt cursus sed, aliquet nec odio. Integer ornare tincidunt neque a ristiquet phasellus mollis tortor. <a href="#" class="arrow_link">Read more...</a>
                                </div>	
                            </li>
                            <li>
                            	<div class="post_carousel">
                                	<img src="<?php echo get_template_directory_uri(); ?>/img/home_blog/2.jpg" alt="" />
                                	<div class="title_t"><a href="#">vestibulum egestas tortor</a></div>
                                    <div class="post_meta">
                                		Posted by <a href="#">John Doe</a>  /  15 apr  / In <a href="#">Vacation</a>
                                    </div>
                                    Ut nisl turpis, tristique tincidunt cursus sed, aliquet nec odio. Integer ornare tincidunt neque a ristiquet phasellus mollis tortor. <a href="#" class="arrow_link">Read more...</a>
                                </div>	
                            </li>
                            <li>
                            	<div class="post_carousel">
                                	<img src="<?php echo get_template_directory_uri(); ?>/img/home_blog/3.jpg" alt="" />
                                	<div class="title_t"><a href="#">Quisque sodales dolor</a></div>
                                    <div class="post_meta">
                                		Posted by <a href="#">John Doe</a>  /  15 apr  / In <a href="#">Vacation</a>
                                    </div>
                                    Ut nisl turpis, tristique tincidunt cursus sed, aliquet nec odio. Integer ornare tincidunt neque a ristiquet phasellus mollis tortor. <a href="#" class="arrow_link">Read more...</a>
                                </div>	
                            </li>
                            <li>
                            	<div class="post_carousel">
                                	<img src="<?php echo get_template_directory_uri(); ?>/img/home_blog/4.jpg" alt="" />
                                	<div class="title_t"><a href="#">ipsum dolor ac egestas mas</a></div>
                                    <div class="post_meta">
                                		Posted by <a href="#">John Doe</a>  /  15 apr  / In <a href="#">Vacation</a>
                                    </div>
                                    Ut nisl turpis, tristique tincidunt cursus sed, aliquet nec odio. Integer ornare tincidunt neque a ristiquet phasellus mollis tortor. <a href="#" class="arrow_link">Read more...</a>
                                </div>	
                            </li> 
                            <li>
                            	<div class="post_carousel">
                                	<img src="<?php echo get_template_directory_uri(); ?>/img/home_blog/1.jpg" alt="" />
                                	<div class="title_t"><a href="#">Tristique cursus tincidunt</a></div>
                                    <div class="post_meta">
                                		Posted by <a href="#">John Doe</a>  /  15 apr  / In <a href="#">Vacation</a>
                                    </div>
                                    Ut nisl turpis, tristique tincidunt cursus sed, aliquet nec odio. Integer ornare tincidunt neque a ristiquet phasellus mollis tortor. <a href="#" class="arrow_link">Read more...</a>
                                </div>	
                            </li>
                            <li>
                            	<div class="post_carousel">
                                	<img src="<?php echo get_template_directory_uri(); ?>/img/home_blog/2.jpg" alt="" />
                                	<div class="title_t"><a href="#">ipsum dolor ac egestas mas</a></div>
                                    <div class="post_meta">
                                		Posted by <a href="#">John Doe</a>  /  15 apr  / In <a href="#">Vacation</a>
                                    </div>
                                    Ut nisl turpis, tristique tincidunt cursus sed, aliquet nec odio. Integer ornare tincidunt neque a ristiquet phasellus mollis tortor. <a href="#" class="arrow_link">Read more...</a>
                                </div>	
                            </li>                                                                                   
                        </ul>                        
                    </div>                
                </div>                
            </div>
        </div>        
        <!--//latest posts--> 
    </div>
    <!--//page_container-->
<?php get_footer(); ?>
