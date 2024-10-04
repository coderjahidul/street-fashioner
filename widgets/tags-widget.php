<?php

// Register the custom widget
class Tags_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'street_tags_widget', // Base ID
            __('Tags Widget', 'text_domain'), // Name
            array('description' => __('Street Fashioner Tags', 'text_domain')) // Args
        );
    }

    // Front-end display of widget
    public function widget($args, $instance) {
        echo $args['before_widget']; // Start of widget HTML

        // Widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Output tags
        echo '<div class="widget tags">';
        // Removed duplicate title
        // echo '<h2 class="title"><span>' . esc_html($instance['title']) . '</span></h2>';

        // Get all tags
        $tags = get_tags(array(
            'hide_empty' => true, // Show only tags with posts
        ));

        // Check if there are any tags
        if ($tags) {
            foreach ($tags as $tag) {
                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a> ';
            }
        } else {
            echo '<p>' . __('No tags found.', 'text_domain') . '</p>';
        }
        echo '</div>'; // End of widget tags div

        echo $args['after_widget']; // End of widget HTML
    }

    // Back-end widget form
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Tags', 'text_domain');
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
function register_tags_widget() {
    register_widget('Tags_Widget');
}
add_action('widgets_init', 'register_tags_widget');
