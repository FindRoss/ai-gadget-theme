<?php 

function enqueue_theme_styles() {  
  wp_enqueue_style( 'build-styles', get_template_directory_uri() . '/build/style-index.css', array(), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles');


function register_bullet_points_block() {
    register_block_type('your-theme/bullet-points', array(
        'render_callback' => 'render_bullet_points_block',
        'attributes'      => array(
            'gadget' => array(
                'type'    => 'number',
                'default' => null,
            ),
        ),
    ));
}
add_action('init', 'register_bullet_points_block');

function render_bullet_points_block($attributes) {
    if (empty($attributes['gadget'])) {
        return '<p>' . __('No gadget selected.', 'your-theme') . '</p>';
    }

    $gadget_id = $attributes['gadget'];
    $bullet_points = get_field('bullet_points', $gadget_id); // Replace 'bullet_points' with your ACF field key.

    if (empty($bullet_points)) {
        return '<p>' . __('No bullet points found for the selected gadget.', 'your-theme') . '</p>';
    }

    $output = '<div class="wp-block-your-theme-bullet-points"><ul>';
    foreach ($bullet_points as $point) {
        $output .= '<li>' . esc_html($point) . '</li>';
    }
    $output .= '</ul></div>';

    return $output;
}