<?php
/**
 * Register Custom Text Widget
 */

class Text_Widget extends WP_Widget {
    
    // Constructor
    public function __construct() {
        parent::__construct(
            'text_widget', // Base ID
            __('Text Widget', 'text_domain'), // Name
            array('description' => __('Street Fashioner Theme Text Widget', 'text_domain')) // Args
        );
    }

    // Front-end display of widget
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        ?>
<p><?php echo esc_html($instance['content']); ?></p>
<p><a href="<?php echo esc_url($instance['link_url']); ?>"
        class="arrow_link"><?php echo esc_html($instance['link_text']); ?></a></p>
<?php
        echo $args['after_widget'];
    }

    // Back-end widget form
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Text Widget', 'text_domain');
        $content = !empty($instance['content']) ? $instance['content'] : '';
        $link_url = !empty($instance['link_url']) ? $instance['link_url'] : '#';
        $link_text = !empty($instance['link_text']) ? $instance['link_text'] : __('Read more', 'text_domain');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'text_domain'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
        value="<?php echo esc_attr($title); ?>">
</p>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php _e('Content:', 'text_domain'); ?></label>
    <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>"
        name="<?php echo esc_attr($this->get_field_name('content')); ?>"><?php echo esc_textarea($content); ?></textarea>
</p>
<p>
    <label
        for="<?php echo esc_attr($this->get_field_id('link_url')); ?>"><?php _e('Link URL:', 'text_domain'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_url')); ?>"
        name="<?php echo esc_attr($this->get_field_name('link_url')); ?>" type="text"
        value="<?php echo esc_attr($link_url); ?>">
</p>
<p>
    <label
        for="<?php echo esc_attr($this->get_field_id('link_text')); ?>"><?php _e('Link Text:', 'text_domain'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_text')); ?>"
        name="<?php echo esc_attr($this->get_field_name('link_text')); ?>" type="text"
        value="<?php echo esc_attr($link_text); ?>">
</p>
<?php
    }

    // Sanitize widget form values as they are saved
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['content'] = (!empty($new_instance['content'])) ? wp_kses_post($new_instance['content']) : '';
        $instance['link_url'] = (!empty($new_instance['link_url'])) ? esc_url($new_instance['link_url']) : '';
        $instance['link_text'] = (!empty($new_instance['link_text'])) ? strip_tags($new_instance['link_text']) : '';

        return $instance;
    }
}

// Register the widget
function street_register_text_widget() {
    register_widget('Text_Widget');
}
add_action('widgets_init', 'street_register_text_widget');
?>