<?php
function create_car_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Car',
            'edit_item' => 'Edit Car',
            'new_item' => 'New Car',
            'all_items' => 'All Cars',
            'view_item' => 'View Car',
            'search_items' => 'Search Cars',
            'not_found' => 'No cars found',
            'not_found_in_trash' => 'No cars found in Trash',
            'parent_item_colon' => '',
            'menu_name' => 'Cars',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
        'rewrite' => array(
            'slug' => 'cars',  // This is the base slug for the car posts
            'with_front' => false,  // Removes the default 'blog' base
            'pages' => true,  // Makes sure pagination works
        ),
    );
    register_post_type('car', $args);
}

add_action('init', 'create_car_post_type');

// Register Car Type Taxonomy
function create_car_type_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Car Types',
            'singular_name' => 'Car Type',
            'all_items' => 'All Car Types',
            'edit_item' => 'Edit Car Type',
            'view_item' => 'View Car Type',
            'update_item' => 'Update Car Type',
            'add_new_item' => 'Add New Car Type',
            'new_item_name' => 'New Car Type Name',
            'menu_name' => 'Car Types',
        ),
        'hierarchical' => true, // Like categories, supports parent-child relationships
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'car-type'),
        'show_in_rest' => true, // Enable for Gutenberg block editor
    );
    register_taxonomy('car_type', 'car', $args);
}
add_action('init', 'create_car_type_taxonomy');

// Register Custom Fields for Car Post Type
function car_custom_meta_boxes() {
    add_meta_box(
        'car_details_meta_box', // ID of the meta box
        'Car Details', // Title of the meta box
        'car_details_meta_box_callback', // Callback function to render the form fields
        'car', // The custom post type where this meta box will appear
        'normal', // Context (where the box will appear - normal or side)
        'high' // Priority (high, low)
    );
}
add_action('add_meta_boxes', 'car_custom_meta_boxes');

// Callback function to render the fields
function car_details_meta_box_callback($post) {
    // Add nonce field for security
    wp_nonce_field('car_details_meta_box_nonce', 'car_details_meta_box_nonce');

    // Get existing values from the database
    $brand = get_post_meta($post->ID, '_car_brand', true);
    $production_year = get_post_meta($post->ID, '_car_production_year', true);
    $color = get_post_meta($post->ID, '_car_color', true);
    $mileage = get_post_meta($post->ID, '_car_mileage', true);

    // Render the form fields
    ?>
    <p>
        <label for="car_brand">Brand:</label>
        <input type="text" id="car_brand" name="car_brand" value="<?php echo esc_attr($brand); ?>" class="widefat" />
    </p>
    <p>
        <label for="car_production_year">Production Year:</label>
        <input type="number" id="car_production_year" name="car_production_year" value="<?php echo esc_attr($production_year); ?>" class="widefat" />
    </p>
    <p>
        <label for="car_color">Color:</label>
        <input type="text" id="car_color" name="car_color" value="<?php echo esc_attr($color); ?>" class="widefat" />
    </p>
    <p>
        <label for="car_mileage">Mileage (km):</label>
        <input type="number" id="car_mileage" name="car_mileage" value="<?php echo esc_attr($mileage); ?>" class="widefat" />
    </p>
    <?php
}

// Save custom fields when the post is saved
function save_car_details_meta_box($post_id) {
    // Check nonce for security
    if (!isset($_POST['car_details_meta_box_nonce']) || !wp_verify_nonce($_POST['car_details_meta_box_nonce'], 'car_details_meta_box_nonce')) {
        return;
    }

    // Check if this is an autosave, and if so, do nothing
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check if the user has permission to edit the post
    if ('car' !== get_post_type($post_id)) {
        return;
    }

    // Sanitize and save the custom field values
    if (isset($_POST['car_brand'])) {
        update_post_meta($post_id, '_car_brand', sanitize_text_field($_POST['car_brand']));
    }
    if (isset($_POST['car_production_year'])) {
        update_post_meta($post_id, '_car_production_year', sanitize_text_field($_POST['car_production_year']));
    }
    if (isset($_POST['car_color'])) {
        update_post_meta($post_id, '_car_color', sanitize_text_field($_POST['car_color']));
    }
    if (isset($_POST['car_mileage'])) {
        update_post_meta($post_id, '_car_mileage', sanitize_text_field($_POST['car_mileage']));
    }
}
add_action('save_post', 'save_car_details_meta_box');


// Register Custom Gallery Metabox for Car Post Type
function car_gallery_meta_box() {
    add_meta_box(
        'car_gallery_meta_box', // ID of the meta box
        'Car Gallery', // Title of the meta box
        'car_gallery_meta_box_callback', // Callback function to render the form fields
        'car', // The custom post type where this meta box will appear
        'normal', // Context (where the box will appear - normal or side)
        'high' // Priority (high, low)
    );
}
add_action('add_meta_boxes', 'car_gallery_meta_box');

// Callback function to render the gallery field
function car_gallery_meta_box_callback($post) {
    // Add nonce field for security
    wp_nonce_field('car_gallery_meta_box_nonce', 'car_gallery_meta_box_nonce');

    // Get existing gallery images from the database
    $gallery = get_post_meta($post->ID, '_car_gallery', true);
    ?>
    <p>
        <label for="car_gallery">Select Gallery Images (Maximum 3 images):</label>
        <input type="hidden" id="car_gallery" name="car_gallery" value="<?php echo esc_attr($gallery); ?>" />
        <button type="button" class="button" id="car_gallery_button">Select Images</button>
        <div id="car_gallery_preview" class="gallery-preview">
            <?php
            // Display the existing gallery images
            if ($gallery) {
                $image_ids = explode(',', $gallery);
                foreach ($image_ids as $image_id) {
                    $image_url = wp_get_attachment_url($image_id);
                    echo '<img src="' . esc_url($image_url) . '" style="width: 100px; height: 100px; margin: 5px;" />';
                }
            }
            ?>
        </div>
    </p>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            var maxImages = 3; // Set the maximum number of images

            $('#car_gallery_button').click(function() {
                var frame = wp.media({
                    title: 'Select Gallery Images',
                    button: { text: 'Add to Gallery' },
                    multiple: true,
                    library: { type: 'image' },
                    selection: wp.media.query({ post_type: 'attachment', mime_type: 'image' }),
                });

                frame.on('select', function() {
                    var selection = frame.state().get('selection');
                    var imageIds = [];
                    selection.each(function(attachment) {
                        if (imageIds.length < maxImages) {
                            imageIds.push(attachment.id);
                        }
                    });

                    var imageIdsString = imageIds.join(',');
                    $('#car_gallery').val(imageIdsString);

                    // Update the preview
                    $('#car_gallery_preview').empty();
                    imageIds.forEach(function(id) {
                        var imageUrl = wp.media.attachment(id).get('url');
                        $('#car_gallery_preview').append('<img src="' + imageUrl + '" style="width: 100px; height: 100px; margin: 5px;" />');
                    });
                });

                frame.open();
            });
        });
    </script>
    <?php
}

// Save custom gallery images when the post is saved
function save_car_gallery_meta_box($post_id) {
    // Check nonce for security
    if (!isset($_POST['car_gallery_meta_box_nonce']) || !wp_verify_nonce($_POST['car_gallery_meta_box_nonce'], 'car_gallery_meta_box_nonce')) {
        return;
    }

    // Check if this is an autosave, and if so, do nothing
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check if the user has permission to edit the post
    if ('car' !== get_post_type($post_id)) {
        return;
    }

    // Save the gallery images
    if (isset($_POST['car_gallery'])) {
        update_post_meta($post_id, '_car_gallery', sanitize_text_field($_POST['car_gallery']));
    }
}
add_action('save_post', 'save_car_gallery_meta_box');
function custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'custom_flush_rewrite_rules');


// Add Meta Boxes for the custom post type
function add_car_meta_boxes() {
    add_meta_box(
        'car_details_meta_box',
        'Car Details',
        'display_car_details_meta_box',
        'car',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_car_meta_boxes');

function display_car_details_meta_box($post) {
    // Retrieve existing values if available
    $brand = get_post_meta($post->ID, 'brand', true);
    $production_year = get_post_meta($post->ID, 'production_year', true);
    $gallery = get_post_meta($post->ID, '_car_gallery', true);

    // Display the input fields for Brand and Production Year
    ?>
    <label for="brand">Brand:</label>
    <input type="text" name="brand" value="<?php echo esc_attr($brand); ?>" class="widefat" />

    <label for="production_year" style="margin-top: 10px;">Production Year:</label>
    <input type="text" name="production_year" value="<?php echo esc_attr($production_year); ?>" class="widefat" />

    <label for="_car_gallery" style="margin-top: 10px;">Gallery (image IDs separated by commas):</label>
    <input type="text" name="_car_gallery" value="<?php echo esc_attr($gallery); ?>" class="widefat" />
    <?php
}

// Save the custom field data
function save_car_details_meta($post_id) {
    // Check if it's our custom post type
    if ('car' !== get_post_type($post_id)) {
        return;
    }

    // Save the custom fields
    if (isset($_POST['brand'])) {
        update_post_meta($post_id, 'brand', sanitize_text_field($_POST['brand']));
    }

    if (isset($_POST['production_year'])) {
        update_post_meta($post_id, 'production_year', sanitize_text_field($_POST['production_year']));
    }

    if (isset($_POST['_car_gallery'])) {
        update_post_meta($post_id, '_car_gallery', sanitize_text_field($_POST['_car_gallery']));
    }
}
add_action('save_post', 'save_car_details_meta');

?>