<?php
/**
 * Template Name: Our Cars
 */
get_header();
?>

<section class="py-20 bg-[#0a0a0a] text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl md:text-6xl font-extrabold text-white mb-16 relative inline-block">
            Explore Our Luxury Fleet
            <span class="absolute -bottom-3 left-1/2 w-32 h-1 bg-[#da100a] transform -translate-x-1/2"></span>
        </h2>

        <!-- Filter Form -->
        <div class="mb-12">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="GET" class="flex flex-wrap justify-center gap-4">
                <label for="car_price_filter" class="text-white mr-4">Filter by Price:</label>
                <select name="price_range" id="car_price_filter" class="bg-[#121212] text-white border-2 border-[#da100a] rounded-md p-2 w-full sm:w-auto">
                    <option value="">Select Price Range</option>
                    <option value="50000" <?php echo isset($_GET['price_range']) && $_GET['price_range'] == '50000' ? 'selected' : ''; ?>>$50,000+</option>
                    <option value="100000" <?php echo isset($_GET['price_range']) && $_GET['price_range'] == '100000' ? 'selected' : ''; ?>>$100,000+</option>
                    <option value="150000" <?php echo isset($_GET['price_range']) && $_GET['price_range'] == '150000' ? 'selected' : ''; ?>>$150,000+</option>
                </select>

                <label for="car_featured_filter" class="text-white ml-6 mr-4">Filter by Featured:</label>
                <select name="featured" id="car_featured_filter" class="bg-[#121212] text-white border-2 border-[#da100a] rounded-md p-2 w-full sm:w-auto">
                    <option value="">Select Featured</option>
                    <option value="yes" <?php echo isset($_GET['featured']) && $_GET['featured'] == 'yes' ? 'selected' : ''; ?>>Featured Only</option>
                    <option value="no" <?php echo isset($_GET['featured']) && $_GET['featured'] == 'no' ? 'selected' : ''; ?>>Not Featured</option>
                </select>

                <!-- Car Type Filter -->
                <label for="car_type_filter" class="text-white ml-6 mr-4">Filter by Car Type:</label>
                <select name="car_type" id="car_type_filter" class="bg-[#121212] text-white border-2 border-[#da100a] rounded-md p-2 w-full sm:w-auto">
                    <option value="">Select Car Type</option>
                    <?php
                    // Get all car types (taxonomies) from the admin dashboard
                    $car_types = get_terms(array(
                        'taxonomy' => 'car_type', // Name of the taxonomy
                        'orderby'  => 'name',
                        'hide_empty' => false, // Show empty terms
                    ));

                    if ($car_types && !is_wp_error($car_types)) :
                        foreach ($car_types as $car_type) :
                            echo '<option value="' . esc_attr($car_type->term_id) . '" ' . (isset($_GET['car_type']) && $_GET['car_type'] == $car_type->term_id ? 'selected' : '') . '>' . esc_html($car_type->name) . '</option>';
                        endforeach;
                    endif;
                    ?>
                </select>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            <?php
            // Get the filter values
            $price_filter = isset($_GET['price_range']) ? $_GET['price_range'] : '';
            $featured_filter = isset($_GET['featured']) ? $_GET['featured'] : '';
            $car_type_filter = isset($_GET['car_type']) ? $_GET['car_type'] : '';

            // Build the query arguments
            $args = array(
                'post_type' => 'car',
                'posts_per_page' => 9,
                'orderby' => 'date',
                'order' => 'DESC',
                'meta_query' => array(),
                'tax_query' => array(), // For car type filter
            );

            // Add price filter to the query if specified
            if (!empty($price_filter)) {
                $args['meta_query'][] = array(
                    'key'     => '_car_price',
                    'value'   => $price_filter,
                    'compare' => '>=',
                    'type'    => 'NUMERIC',
                );
            }

            // Add featured filter to the query if specified
            if ($featured_filter === 'yes') {
                $args['meta_query'][] = array(
                    'key'     => '_car_is_featured',
                    'value'   => '1',
                    'compare' => '=',
                    'type'    => 'NUMERIC',
                );
            }

            // Add car type filter to the query if specified
            if (!empty($car_type_filter)) {
                $args['tax_query'][] = array(
                    'taxonomy' => 'car_type',
                    'field'    => 'term_id',
                    'terms'    => $car_type_filter,
                    'operator' => 'IN',
                );
            }

            $car_query = new WP_Query($args);

            // Check if there are no posts
            if ($car_query->have_posts()) :
                while ($car_query->have_posts()) : $car_query->the_post();
                    $brand = get_post_meta(get_the_ID(), '_car_brand', true);
                    $production_year = get_post_meta(get_the_ID(), '_car_production_year', true);
                    $color = get_post_meta(get_the_ID(), '_car_color', true);
                    $mileage = get_post_meta(get_the_ID(), '_car_mileage', true);
                    $price = get_post_meta(get_the_ID(), '_car_price', true);
                    $is_featured = get_post_meta(get_the_ID(), '_car_is_featured', true);
                    
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $image_url = !empty($image) ? esc_url($image) : get_template_directory_uri() . '/images/default-car.jpg';

                    // Get the car types (terms from taxonomy)
                    $car_types = wp_get_post_terms(get_the_ID(), 'car_type');
                    $car_types_list = '';
                    if (!empty($car_types)) {
                        $car_types_list = implode(', ', wp_list_pluck($car_types, 'name'));
                    }
                    ?>
                    <div class="group relative bg-[#121212] rounded-3xl overflow-hidden shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                        
                        <!-- Full Width Image -->
                        <div class="relative w-full h-96">
                            <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-center p-6">
                                <!-- Content Overlay on Image -->
                                <div class="z-10 text-white">
                                    <h3 class="text-4xl font-extrabold mb-4"><?php the_title(); ?></h3>
                                    <p class="text-lg mb-2"><?php echo esc_html($brand); ?> | <?php echo esc_html($production_year); ?></p>
                                    <p class="text-lg mb-4"><?php echo esc_html($color); ?> | <?php echo esc_html($mileage); ?> km</p>
                                    <p class="text-lg mb-4">Types: <?php echo esc_html($car_types_list); ?></p>
                                    <p class="text-2xl text-[#da100a] font-semibold mb-6">$<?php echo esc_html($price); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="inline-block px-6 py-3 bg-[#da100a] text-white text-lg font-semibold rounded-lg shadow-md hover:bg-white hover:text-[#da100a] transition duration-300">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else:
                echo '<p class="text-white text-lg">Sorry, no cars available for the selected filters. Please try different filters.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    // Automatically submit the form when a filter option is selected
    document.getElementById('car_price_filter').addEventListener('change', function() {
        this.form.submit();
    });

    document.getElementById('car_featured_filter').addEventListener('change', function() {
        this.form.submit();
    });

    document.getElementById('car_type_filter').addEventListener('change', function() {
        this.form.submit();
    });
</script>
