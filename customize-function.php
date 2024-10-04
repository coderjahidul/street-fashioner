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

// Custom pagination
function custom_pagination() {
    global $wp_query;

    // Get the total number of pages
    $total_pages = $wp_query->max_num_pages;

    // Only paginate if we have more than one page
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo '<div class="pagination">';
        echo '<ul>';

        // Previous page link
        if ($current_page > 1) {
            echo '<li><a href="' . get_pagenum_link($current_page - 1) . '">&larr;</a></li>';
        } else {
            echo '<li class="disabled"><a href="#">&larr;</a></li>'; // Disabled if on the first page
        }

        // Loop through pages and create pagination links
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i === $current_page) {
                echo '<li class="active"><a href="#">' . $i . '</a></li>'; // Current page
            } else {
                echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>'; // Other page links
            }
        }

        // Next page link
        if ($current_page < $total_pages) {
            echo '<li><a href="' . get_pagenum_link($current_page + 1) . '">&rarr;</a></li>';
        } else {
            echo '<li class="disabled"><a href="#">&rarr;</a></li>'; // Disabled if on the last page
        }

        echo '</ul>';
        echo '</div>';
    }
}



