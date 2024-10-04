<?php
// Customize function for social links
function mytheme_customize_register( $wp_customize ) {
    // Add a section for Social Links
    $wp_customize->add_section( 'social_links_section', array(
        'title'    => __( 'Social Links', 'mytheme' ),
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
            'label'    => __( $network . ' URL', 'mytheme' ),
            'section'  => 'social_links_section',
            'type'     => 'url',
        ) );
    }
}
add_action( 'customize_register', 'mytheme_customize_register' );
