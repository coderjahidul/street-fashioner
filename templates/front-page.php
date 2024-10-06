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
                            <?php 
                            // Get all posts
                            $args = array(
                                'numberposts' => 4,
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'post_type' => 'post',
                                'post_status' => 'publish',
                            );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) {
                                setup_postdata($post);
                                ?>
                                <li>
                                    <div class="news_date"><?php echo get_the_date('d'); ?> <?php echo get_the_date('M');?><span><?php echo get_the_date('Y');?></span></div>
                                    <div class="news_t"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></div>
                                    <div class="news">Posted by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author();?></a><br/>Tags: <a href="<?php echo get_tag_link( $tag->term_id );?>"><?php the_tags( '', ', ' );?></a></div>
                                    <!-- post content 30 word and after add read more button -->
                                    <div class="news_info"><?php echo wp_trim_words( get_the_content(), 30, '<a href="' . esc_url( get_permalink() ) . '"> Read more...</a>' );?></div>
                                    <div class="clear"></div>
                                </li>
                            <?php
                                
                            }
                            ?>
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
                            <?php 
                            // Get all posts
                            $args = array(
                                'numberposts' => 10,
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'post_type' => 'post',
                                'post_status' => 'publish',
                            );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) {
                                setup_postdata($post);
                            ?>
                            <li>
                                <div class="post_carousel">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                    <div class="title_t">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="post_meta">
                                        Posted by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> 
                                        / <?php echo get_the_date('d M Y'); ?>
                                    </div>
                                    <div class="post_excerpt">
                                        <?php echo wp_trim_words( get_the_content(), 30, '<a href="' . esc_url( get_permalink() ) . '"> Read more...</a>' ); ?>
                                    </div>
                                </div>  
                            </li>
                            <?php
                            }
                            wp_reset_postdata(); // Reset the global $post object to avoid conflicts
                            ?>                                                                                
                        </ul>                  
                    </div>                
                </div>                
            </div>
        </div>        
        <!--//latest posts--> 
    </div>
    <!--//page_container-->
<?php get_footer(); ?>
