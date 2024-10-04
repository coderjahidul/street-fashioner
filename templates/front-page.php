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
                    <div class="span3">
                        <a href="#">
                        	<span class="img_icon icon1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/icon1.png);"></span>
                            <span class="link_title">egestas dolor</span>
                        	Nunc vel arcu arcu. Nulla mollis feugiat dui id tincidunt. Aenean ac lobortis elit.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="#">
                        	<span class="img_icon icon2" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/icon2.png);"></span>
                            <span class="link_title">lorem ipsum</span>
                        	Nunc vel arcu arcu. Nulla mollis feugiat dui id tincidunt. Aenean ac lobortis elit.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="#">
                        	<span class="img_icon icon3" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/icon3.png);"></span>
                            <span class="link_title">vestilum eget</span>
                        	Nunc vel arcu arcu. Nulla mollis feugiat dui id tincidunt. Aenean ac lobortis elit.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="#">
                        	<span class="img_icon icon4" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/icon4.png);"></span>
                            <span class="link_title">nulla feugiat</span>
                        	Nunc vel arcu arcu. Nulla mollis feugiat dui id tincidunt. Aenean ac lobortis elit.
                        </a>
                    </div>                           	
                </div>
            </div>
        </div>
        <!--//planning-->
        
        <!--Welcome-->
        <div class="wrap block">
            <div class="container welcome_block">
            	<div class="welcome_line welcome_t"></div>
            	Cras vulputate pretium massa gravida egestas consectetur?<span>Lorem ipsum dolor sit amet &amp; consectetur adipiscing elit!</span>
                <div class="welcome_line welcome_b"></div>
            </div>
        </div>
        <!--//Welcome-->         
        
        <!--featured works-->
        <div class="wrap block carousel_block">
            <div class="container">
            	<h2 class="upper">featured works</h2>
            	<div class="row">
                    <div class="span12">
                        <ul id="mycarousel" class="jcarousel-skin-tango">
                            <li>
                            	<div class="hover_img">
                                	<a href="<?php echo get_template_directory_uri(); ?>/img/featured_works/1.jpg" rel="prettyPhoto[portfolio1]"><img src="<?php echo get_template_directory_uri(); ?>/img/featured_works/1.jpg" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                                </div>
                            </li>
                            <li>
                            	<div class="hover_img">
                                	<a href="<?php echo get_template_directory_uri(); ?>/img/featured_works/2.jpg" rel="prettyPhoto[portfolio1]"><img src="<?php echo get_template_directory_uri(); ?>/img/featured_works/2.jpg" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                                </div>
                            </li>
                            <li>
                                <div class="hover_img">
                                	<a href="<?php echo get_template_directory_uri(); ?>/img/featured_works/3.jpg" rel="prettyPhoto[portfolio1]"><img src="<?php echo get_template_directory_uri(); ?>/img/featured_works/3.jpg" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                                </div>
                            </li> 
                            <li>
                                <div class="hover_img">
                                	<a href="<?php echo get_template_directory_uri(); ?>/img/featured_works/4.jpg" rel="prettyPhoto[portfolio1]"><img src="<?php echo get_template_directory_uri(); ?>/img/featured_works/4.jpg" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                                </div>
                            </li>
                            <li>
                            	<div class="hover_img">
                                	<a href="<?php echo get_template_directory_uri(); ?>/img/featured_works/1.jpg" rel="prettyPhoto[portfolio1]"><img src="<?php echo get_template_directory_uri(); ?>/img/featured_works/1.jpg" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                                </div>
                            </li>
                            <li>
                            	<div class="hover_img">
                                	<a href="<?php echo get_template_directory_uri(); ?>/img/featured_works/2.jpg" rel="prettyPhoto[portfolio1]"><img src="<?php echo get_template_directory_uri(); ?>/img/featured_works/2.jpg" alt="" /><span class="portfolio_zoom1"></span></a>                                    
                                </div>
                            </li>                                                       
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
                    	<h2 class="title">egestas sed convallis metus!</h2>
                        <p>Vestibulum tincidunt ultricies aliquam. Donec porta mi nec tortor sagittis rhoncus. Nunc ante arcu, ornaresit gravida rutrum ut, facilisis et lacus. Aliquam mauris arcu, interdum eu fermentum tincidunt.</p>
                        <ul class="the-icons grey">
                        	<li><i class="icon-time"></i> Curabitur eu placerat massa.</li>
                            <li><i class="icon-star"></i> Integer adipiscing velit nec purus facilisis ut pharetra!</li>
                            <li><i class="icon-camera"></i> Nunc mollis, nisl vel tincidunt vestibulum, lacus libero mollis urna, eu dapibus lacus nisi et nulla.</li>
                            <li><i class="icon-qrcode"></i> Curabitur veltpat magna. Pellentesque pellentesque dapibus dictum. </li>
                            <li><i class="icon-user"></i> Nulla ut erat ut massa molestie commodo.</li>
                        </ul>
                        <p>Duis vel ligula et libero iaculis facilisis in vel justo. Duis lacinia orci ut tellus interdum dignissim. Fusce eugei scelerisque enim. Phasellus nec libero lectus. Quisque posuere mi non nibh facilisis semper. Donec lorem suscipit est sed mauris eleifend congue. Class taciti sociosqu litora torquent <a href="#" class="arrow_link">per conubia.</a></p>
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
