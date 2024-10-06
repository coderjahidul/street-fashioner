<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--header-->
    <div class="header">
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span4">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php 
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                } else {
                                    // Fallback if no logo is set
                                    ?>
                                    <img src="<?php echo esc_url( get_theme_mod( 'custom_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" />
                                    <?php
                                }
                                ?>
                            </a>
                        </div>
                       
                        </div>
                        <div class="span8">
                        	<div class="follow_us">
                            <ul>
                                <?php if ( get_theme_mod( 'facebook_link' ) ) : ?>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'facebook_link' ) ); ?>" class="facebook" target="_blank">Facebook</a></li>
                                <?php endif; ?>
                                
                                <?php if ( get_theme_mod( 'vimeo_link' ) ) : ?>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'vimeo_link' ) ); ?>" class="vimeo" target="_blank">Vimeo</a></li>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'tumblr_link' ) ) : ?>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'tumblr_link' ) ); ?>" class="tumblr" target="_blank">Tumblr</a></li>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'twitter_link' ) ) : ?>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'twitter_link' ) ); ?>" class="twitter" target="_blank">Twitter</a></li>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'delicious_link' ) ) : ?>
                                    <li><a href="<?php echo esc_url( get_theme_mod( 'delicious_link' ) ); ?>" class="delicious" target="_blank">Delicious</a></li>
                                <?php endif; ?>
                            </ul>

                            </div>
                            <div class="clear"></div>
                            <nav id="main_menu">
                                <div class="menu_wrap">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu',
                                        'container'      => false,
                                        'menu_class'     => 'nav sf-menu',
                                        'fallback_cb'    => false, // Remove default menu if no menu is set
                                    ) );
                                    ?>
                                </div>
                            </nav>
                          
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>
    <!--//header-->    