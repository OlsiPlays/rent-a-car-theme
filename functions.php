<?php 

// Register Custom Post Type: Car
function create_car_post_type() {
    $args = array(
        'labels' => array(
            'name'          => 'Cars',
            'singular_name' => 'Car',
            'menu_name'     => 'Cars',
            'add_new'       => 'Add New',
            'add_new_item'  => 'Add New Car',
            'edit_item'     => 'Edit Car',
            'new_item'      => 'New Car',
            'all_items'     => 'All Cars',
            'view_item'     => 'View Car',
            'search_items'  => 'Search Cars',
            'not_found'     => 'No cars found',
        ),
        'public'       => true,
        'has_archive'  => true,
        'supports'     => array('title', 'editor', 'thumbnail'),
        'rewrite'      => array('slug' => 'cars', 'with_front' => false),
        'show_in_rest' => true,
    );
    register_post_type('car', $args);
}
add_action('init', 'create_car_post_type');

// Enable Featured Image Support
function add_featured_image_support() {
    add_theme_support('post-thumbnails');
    add_post_type_support('car', 'thumbnail');
}
add_action('after_setup_theme', 'add_featured_image_support');

// Add Meta Box for Car Details (Including features like Brand, Production Year and Images)
function car_custom_meta_boxes() {
    add_meta_box('car_details_meta_box', 'Car Details', 'car_details_meta_box_callback', 'car', 'normal', 'high');
}
add_action('add_meta_boxes_car', 'car_custom_meta_boxes'); // Ensures correct hook for Car post type

// Meta Box Callback Function for Car Details
function car_details_meta_box_callback($post) {
    wp_nonce_field('car_details_nonce', 'car_details_nonce');

    // Fields to be shown
    $fields = array(
        'car_brand'          => 'Brand',
        'car_production_year'=> 'Production Year',
        'car_color'          => 'Color',
        'car_mileage'        => 'Mileage (km)',
        'car_price'          => 'Price'
    );

    // Display each meta field
    foreach ($fields as $field => $label) {
        $value = get_post_meta($post->ID, "_$field", true);
        echo "<p><label for='$field'>$label:</label>";
        echo "<input type='text' id='$field' name='$field' value='" . esc_attr($value) . "' class='widefat' /></p>";
    }

    // Display Multiple Images Upload Fields
    for ($i = 1; $i <= 3; $i++) {
        $image_url = get_post_meta($post->ID, "_car_image_$i", true);
        echo "<p><label for='car_image_$i'>Car Image $i:</label><br />";
        echo "<input type='text' id='car_image_$i' name='car_image_$i' value='" . esc_url($image_url) . "' class='widefat' />";
        echo "<button class='upload_button button' data-field='car_image_$i'>Upload</button>";
        echo "<div class='image_preview' id='image_preview_$i'>" . ($image_url ? "<img src='$image_url' width='100' />" : '') . "</div></p>";
    }
}
add_action('admin_footer', 'car_meta_box_image_uploader_script');

// Enqueue Media Uploader Script for Meta Box
function car_meta_box_image_uploader_script() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Open Media Uploader on button click
            $('.upload_button').click(function(e) {
                e.preventDefault();
                var field_id = $(this).data('field');
                var image_frame;

                if (image_frame) {
                    image_frame.open();
                    return;
                }

                image_frame = wp.media({
                    title: 'Select or Upload Car Image',
                    button: { text: 'Use this image' },
                    multiple: false
                });

                image_frame.on('select', function() {
                    var attachment = image_frame.state().get('selection').first().toJSON();
                    $('#' + field_id).val(attachment.url);
                    $('#image_preview_' + field_id.substring(field_id.length - 1)).html('<img src="' + attachment.url + '" width="100" />');
                });

                image_frame.open();
            });
        });
    </script>
    <?php
}

// Save Car Meta Fields including Image URLs
function save_car_details_meta($post_id) {
    // Nonce verification and check for autosave
    if (!isset($_POST['car_details_nonce']) || !wp_verify_nonce($_POST['car_details_nonce'], 'car_details_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if ('car' !== get_post_type($post_id)) return;

    // Save custom meta fields
    $fields = array('car_brand', 'car_production_year', 'car_color', 'car_mileage', 'car_price');
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, "_$field", sanitize_text_field($_POST[$field]));
        }
    }

    // Save images URLs
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["car_image_$i"])) {
            update_post_meta($post_id, "_car_image_$i", esc_url_raw($_POST["car_image_$i"]));
        }
    }
}
add_action('save_post_car', 'save_car_details_meta');

// Add Featured Image Column in Admin Dashboard
function add_car_featured_image_column($columns) {
    $columns = array_slice($columns, 0, 1, true) +
               array('featured_image' => 'Featured Image') +
               array_slice($columns, 1, count($columns) - 1, true);
    return $columns;
}
add_filter('manage_edit-car_columns', 'add_car_featured_image_column');

// Display Featured Image in Admin Column
function show_car_featured_image_column($column, $post_id) {
    if ($column === 'featured_image') {
        echo get_the_post_thumbnail($post_id, array(80, 80)) ?: 'No Image';
    }
}
add_action('manage_car_posts_custom_column', 'show_car_featured_image_column', 10, 2);

// Flush Rewrite Rules on Theme Activation
function custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'custom_flush_rewrite_rules');



function enqueue_slick_slider() {
    // Enqueue Slick Carousel JS and CSS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');



?>
