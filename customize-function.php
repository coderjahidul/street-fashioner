<?php
// Customize function for social links
function streetfashioner_customize_register( $wp_customize ) {
    // Add a section for Social Links
    $wp_customize->add_section( 'social_links_section', array(
        'title'    => __( 'Social Links', 'streetfashioner' ),
        'priority' => 30,
    ) );

    // Add settings and controls for each social media platform
    $social_networks = array( 'Facebook', 'Vimeo', 'Tumblr', 'Twitter', 'Delicious' );

    foreach ( $social_networks as $network ) {
        $wp_customize->add_setting( strtolower( $network ) . '_link', array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );

        $wp_customize->add_control( strtolower( $network ) . '_link', array(
            'label'    => __( $network . ' URL', 'streetfashioner' ),
            'section'  => 'social_links_section',
            'type'     => 'url',
        ) );
    }
}
add_action( 'customize_register', 'streetfashioner_customize_register' );

// Home page slider
function streetfashioner_customize_register_slider( $wp_customize ) {
    // Add a section for the slider
    $wp_customize->add_section( 'slider_section', array(
        'title'    => __( 'Home Slider', 'streetfashioner' ),
        'priority' => 30,
    ) );

    // Add settings and controls for each slider image
    for ( $i = 1; $i <= 3; $i++ ) {
        $wp_customize->add_setting( 'slider_image_' . $i, array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_' . $i, array(
            'label'    => __( 'Slider Image ' . $i, 'streetfashioner' ),
            'section'  => 'slider_section',
            'settings' => 'slider_image_' . $i,
        ) ) );
    }
}
add_action( 'customize_register', 'streetfashioner_customize_register_slider' );

// Home page planning
function streetfashioner_customize_register_home_planning( $wp_customize ) {
    // Add Home Planning Section
    $wp_customize->add_section( 'home_planning_section', array(
        'title'    => __( 'Home Planning', 'streetfashioner' ),
        'priority' => 35,
    ) );

    // Loop through to add settings for each item (e.g., icon, title, description)
    for ( $i = 1; $i <= 4; $i++ ) {
        // Icon image upload setting
        $wp_customize->add_setting( 'home_planning_icon_' . $i, array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_planning_icon_' . $i, array(
            'label'    => __( 'Icon ' . $i, 'streetfashioner' ),
            'section'  => 'home_planning_section',
            'settings' => 'home_planning_icon_' . $i,
        ) ) );

        // Title setting
        $wp_customize->add_setting( 'home_planning_title_' . $i, array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_planning_title_' . $i, array(
            'label'    => __( 'Title ' . $i, 'streetfashioner' ),
            'section'  => 'home_planning_section',
            'type'     => 'text',
        ) );

        // Description setting
        $wp_customize->add_setting( 'home_planning_description_' . $i, array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_planning_description_' . $i, array(
            'label'    => __( 'Description ' . $i, 'streetfashioner' ),
            'section'  => 'home_planning_section',
            'type'     => 'textarea',
        ) );
    }
}
add_action( 'customize_register', 'streetfashioner_customize_register_home_planning' );


// Gallery section
function streetfashioner_customize_register_featured_works( $wp_customize ) {
    // Gallery Section Title
    $wp_customize->add_setting( 'gallery_section_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'gallery_section_title', array(
        'label'    => __( 'Gallery Section Title', 'streetfashioner' ),
        'section'  => 'featured_works_section',
        'type'     => 'text',
    ));
    
    // Add Featured Works Section
    $wp_customize->add_section( 'featured_works_section', array(
        'title'    => __( 'Gallery Section', 'streetfashioner' ),
        'priority' => 30,
    ) );

    // Loop through to add settings for each featured work (image and link)
    for ( $i = 1; $i <= 10; $i++ ) {
        // Image upload setting
        $wp_customize->add_setting( 'featured_work_image_' . $i, array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_work_image_' . $i, array(
            'label'    => __( 'Featured Image ' . $i, 'streetfashioner' ),
            'section'  => 'featured_works_section',
            'settings' => 'featured_work_image_' . $i,
        ) ) );
    }
}
add_action( 'customize_register', 'streetfashioner_customize_register_featured_works' );

