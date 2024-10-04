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

