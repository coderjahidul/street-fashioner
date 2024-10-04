<?php

class Custom_Recent_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_recent_posts_widget', // Base ID
            __('Recent Posts', 'text_domain'), // Name
            array('description' => __('Street Fashioner Recent Posts Widget', 'text_domain')) // Args
        );
    }

    public function widget($args, $instance) {
        // Output the content of the widget
        echo $args['before_widget']; // This can be used for wrapping your widget

        // Widget Title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Query for recent posts
        $posts_per_page = get_option('posts_per_page'); // Get the number of posts to display from settings
        $recent_posts = new WP_Query(array(
            'posts_per_page' => $posts_per_page, // Use dynamic posts per page count
            'post_status' => 'publish',
        ));
        
        if ($recent_posts->have_posts()) {
            echo '<ul class="recent_post">';
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post(); // Set up post data
                ?>
<li>
    <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div><?php echo get_the_date(); ?></div>
    <div class="clear"></div>
</li>
<?php
            }
            echo '</ul>';
        } else {
            echo '<p>' . __('No recent posts found.', 'text_domain') . '</p>';
        }

        // Reset post data
        wp_reset_postdata();
        
        // Closing the widget
        echo '<p><a href="' . get_permalink(get_option('page_for_posts')) . '" class="arrow_link">Go to the blog</a></p>'; // Adjust the link accordingly

        echo $args['after_widget'];
    }

    public function form($instance) {
        // Widget admin form
        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Posts', 'text_domain');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'text_domain'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
        value="<?php echo esc_attr($title); ?>" />
</p>
<?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

// Register the widget
function register_custom_recent_posts_widget() {
    register_widget('Custom_Recent_Posts_Widget');
}
add_action('widgets_init', 'register_custom_recent_posts_widget');