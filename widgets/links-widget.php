<?php

// Register the custom widget
class Links_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'street_links_widget', // Base ID
            __('Links Widget', 'text_domain'), // Name
            array('description' => __('Street Fashioner Links', 'text_domain')) // Args
        );
    }

    // Front-end display of widget
    public function widget($args, $instance) {
        echo $args['before_widget']; // Start of widget HTML

        // Widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Output links
        echo '<div class="widget">';
        echo '<ul class="links">';

        $posts_per_page = get_option('posts_per_page'); // Get the number of posts to display from settings
        // Query for latest posts
        $recent_posts = new WP_Query(array(
            'posts_per_page' => $posts_per_page,
            'post_status' => 'publish',
        ));

        // Check if there are any posts
        if ($recent_posts->have_posts()) {
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                echo '<li><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></li>';
            }
            wp_reset_postdata(); // Reset post data after the query
        } else {
            echo '<li>' . __('No links found.', 'text_domain') . '</li>';
        }

        echo '</ul>'; // End of links ul
        echo '</div>'; // End of widget div

        echo $args['after_widget']; // End of widget HTML
    }

    // Back-end widget form
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Links', 'text_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    // Updating widget
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

// Register the widget
function register_links_widget() {
    register_widget('Links_Widget');
}
add_action('widgets_init', 'register_links_widget');
