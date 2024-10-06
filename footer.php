 <!--footer-->
<div id="footer">
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h2 class="title">Latest tweets</h2>
                <div class="tweet_block"></div>                       
            </div>
            <div class="span3">
                <h2 class="title">Get in touch!</h2>
                <form action="#" method="post">
                    <input class="span3" type="text" name="name" id="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
                    <input class="span3" type="text" name="email" id="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
                    <textarea name="message" id="message" class="span3" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';" >Message</textarea>
                    <div class="clear"></div>
                    <input type="reset" class="btn dark_btn" value="Clear form" />
                    <input type="submit" class="btn send_btn" value="Send!" />
                    <div class="clear"></div>
                </form>
            </div> 
            <div class="span3">
                <h2 class="title">Testimonials</h2>
                <ul>
                    <li>
                        <span class="testimonials_arrow"></span>Orci nisi, luctus vitae imperdiet a, iquam vel urna. Pellentesque tincidunt laoreet est, in tristique sapien consequat a purus at ullamcorper pulvinar, massa libero magna.
                        <div class="clear"></div>
                        <div class="author">Anna Smith, Company inc.</div>
                    </li>
                    <li>
                        <span class="testimonials_arrow"></span>Luctus vitae imperdiet a, iquamorci nisi lorem. Pellentesque tincidunt laoreet est, in tristique sapien consequat a purus at ullam pulvinar, massa libero consequat egestas mas.
                        <div class="clear"></div>
                        <div class="author">John Doe, Company inc.</div>
                    </li>
                </ul>                     
            </div>
            <div class="span3">
                <h2 class="title">flickr photostream</h2>
                <div class="flickrs">
                    <div class="FlickrImages">
                        <ul></ul>
                        <div class="clear"></div>
                    </div>
                </div> 
            </div>         	
        </div>
    </div>            
</div>
<div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        	<div class="foot_logo"><a href="index.html"><img src="img/foot_logo.png" alt="" /></a></div>    
                        	<div class="copyright">&copy; 2020 Jessica White. Professional Fashion Photography. All Rights Reserved.</div>                        
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	<form action="#" method="post">
                                        <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                                    </form>
                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                        <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                        <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                        <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                        <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="index.html" class="current">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="scaffolding.html">features</a></li>
                                        <li><a href="portfolio_2columns.html">Portfolio</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/camera.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/superfish.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
    <?php wp_footer(); ?>
</body>
</html>

