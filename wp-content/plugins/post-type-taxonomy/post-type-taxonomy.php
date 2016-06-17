<?php

/*
Plugin Name: Post Type Taxonomy
Version: 1.0
Author: Trausti Dagsson/CDH
Author URI: http://www.traustidagsson.com/
*/

class post_type_taxonomy extends WP_Widget {
	// constructor
	function post_type_taxonomy() {
		parent::WP_Widget(false, $name = __('Post Type Taxonomy', 'post_type_taxonomy') );
	}

	// widget form creation
	function form($instance) {

		// Check values
		if( $instance) {
			$widget_title = esc_attr($instance['widget_title']);
		} else {
			$widget_title = '';
		}

		if( $instance) {
			$taxonomy_name = esc_attr($instance['taxonomy_name']);
		} else {
			$taxonomy_name = '';
		}

		?>

		<p>
			<label for="<?php echo $this->get_field_id('widget_title'); ?>"><?php _e('Title', 'post_type_taxonomy'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('widget_title'); ?>" name="<?php echo $this->get_field_name('widget_title'); ?>" type="text" value="<?php echo $widget_title; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('taxonomy_name'); ?>"><?php _e('Taxonomy name', 'post_type_taxonomy'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('taxonomy_name'); ?>" name="<?php echo $this->get_field_name('taxonomy_name'); ?>" type="text" value="<?php echo $taxonomy_name; ?>" />
		</p>

		<?php

	}

	// update widget
	function update($new_instance, $old_instance) {
		$instance = $old_instance;

		// Fields
		$instance['widget_title'] = strip_tags($new_instance['widget_title']);
		$instance['taxonomy_name'] = strip_tags($new_instance['taxonomy_name']);
		
		return $instance;
	}

	// widget display
	function widget($args, $instance) {
		$widget_title = $instance['widget_title'];
		$taxonomy_name = $instance['taxonomy_name'];

//		print_r(get_categories('taxonomy='.$taxonomy_name.'&orderby=name'));

		$terms = get_terms($taxonomy_name);
		echo '<div class="post-type-taxonomy">';
		echo '<div class="widget-title">'.$widget_title.'</div>';
		echo '<ul class="ul-buttons">';
		foreach ($terms as $term) {
		    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
		}
		echo '</ul>';
		echo '</div>';

	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("post_type_taxonomy");'));



?>