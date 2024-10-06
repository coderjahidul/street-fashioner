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

// Add Short About Section
function custom_theme_customize_register( $wp_customize ) {

    // Add About Section
    $wp_customize->add_section( 'short_about_section', array(
        'title'       => __( 'Short About Section', 'your-theme-textdomain' ),
        'description' => __( 'Add a title and description for the short about section.', 'your-theme-textdomain' ),
        'priority'    => 30,
    ));

    // Add Setting for About Title
    $wp_customize->add_setting( 'short_about_title', array(
        'default'   => __( 'Site Short About Section', 'your-theme-textdomain' ),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Control for About Title
    $wp_customize->add_control( 'short_about_title_control', array(
        'label'    => __( 'About Title', 'your-theme-textdomain' ),
        'section'  => 'short_about_section',
        'settings' => 'short_about_title',
        'type'     => 'text',
    ));

    // Add Setting for About Content
    $wp_customize->add_setting( 'short_about_content', array(
        'default'   => __( 'Vestibulum tincidunt ultricies aliquam. Donec porta mi nec tortor sagittis rhoncus.', 'your-theme-textdomain' ),
        'sanitize_callback' => 'wp_kses_post', // Sanitizes HTML content
    ));

    // Add Control for About Content
    $wp_customize->add_control( 'short_about_content_control', array(
        'label'    => __( 'About Content', 'your-theme-textdomain' ),
        'section'  => 'short_about_section',
        'settings' => 'short_about_content',
        'type'     => 'textarea',
    ));

}
add_action( 'customize_register', 'custom_theme_customize_register' );


