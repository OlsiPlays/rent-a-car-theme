<?php
/**
 * Template Name: Our Cars
 */
get_header();
?>

<!-- New Section with Background Image and Text -->
<section class="relative h-[500px] flex items-center justify-center text-white text-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/images/background2.jpg" alt="Background Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div> <!-- Overlay for better readability -->
    </div>

 <!-- Content -->
<div class="relative z-10 text-center">
    <h1 class="text-5xl md:text-6xl font-extrabold mb-6 text-white" data-aos="fade-up">
        Welcome to Our <span class="text-red-600">Luxury Car Collection</span>
    </h1>
    <p class="text-lg md:text-xl max-w-2xl mx-auto text-gray-200 mb-8" data-aos="fade-up" data-aos-delay="100">
        Discover the finest selection of luxury cars tailored to meet your needs. Whether you're looking for <span class="text-red-500 font-semibold">performance</span>, <span class="text-red-500 font-semibold">elegance</span>, or both, we have the perfect car for you.
    </p>
    <a href="#explore" class="inline-block bg-red-600 text-white font-semibold py-3 px-8 rounded-full hover:bg-red-700 transition duration-300" data-aos="fade-up" data-aos-delay="200">
        Explore Collection
    </a>
</div>
</section>

<!-- Existing Section -->
<section class="py-20 text-white relative overflow-hidden" data-aos="fade-up">
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-16 relative inline-block" data-aos="fade-up">
            Explore Our Luxury Fleet
            <span class="absolute -bottom-3 left-1/2 w-32 h-1 bg-red-600 transform -translate-x-1/2"></span>
        </h2>

        <!-- Filter Form -->
        <div class="mb-12 flex justify-center">
            <form action="" method="GET" class="flex flex-wrap justify-center gap-4">
                <!-- Price Filter -->
                <label for="car_price_filter" class="mr-4">Filter by Price:</label>
                <select name="price_range" id="car_price_filter" class="bg-gray-800 text-white border-2 border-red-600 rounded-md p-2 w-full sm:w-auto" onchange="this.form.submit()">
                    <option value="">Select Price Range</option>
                    <option value="50000-99999" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '50000-99999') ? 'selected' : ''; ?>>$50,000 - $99,999</option>
                    <option value="100000-149999" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '100000-149999') ? 'selected' : ''; ?>>$100,000 - $149,999</option>
                    <option value="150000-199999" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '150000-199999') ? 'selected' : ''; ?>>$150,000 - $199,999</option>
                    <option value="200000" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '200000') ? 'selected' : ''; ?>>$200,000+</option>
                </select>

                <!-- Car Type Filter -->
                <label for="car_type_filter" class="ml-6 mr-4">Filter by Car Type:</label>
                <select name="car_type" id="car_type_filter" class="bg-gray-800 text-white border-2 border-red-600 rounded-md p-2 w-full sm:w-auto" onchange="this.form.submit()">
                    <option value="">Select Car Type</option>
                    <?php
                    $car_types = get_terms(array(
                        'taxonomy' => 'car_type',
                        'orderby'  => 'name',
                        'hide_empty' => false,
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

        <!-- Grid with 2 columns on large screens and centered cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 justify-center">
            <?php
            $price_filter = isset($_GET['price_range']) ? explode('-', sanitize_text_field($_GET['price_range'])) : '';
            $car_type_filter = isset($_GET['car_type']) ? sanitize_text_field($_GET['car_type']) : '';

            $meta_query = array(); 
            $tax_query = array('relation' => 'AND');

            if (!empty($price_filter)) {
                if (count($price_filter) == 2) {
                    $meta_query[] = array(
                        'key'     => '_car_price',
                        'value'   => array((int) $price_filter[0], (int) $price_filter[1]),
                        'compare' => 'BETWEEN',
                        'type'    => 'NUMERIC',
                    );
                } else {
                    $meta_query[] = array(
                        'key'     => '_car_price',
                        'value'   => (int) $price_filter[0],
                        'compare' => '>=',
                        'type'    => 'NUMERIC',
                    );
                }
            }

            if (!empty($car_type_filter)) {
                $tax_query[] = array(
                    'taxonomy' => 'car_type',
                    'field'    => 'term_id',
                    'terms'    => (int) $car_type_filter,
                );
            }

            $args = array(
                'post_type'      => 'car',
                'posts_per_page' => 9,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'meta_query'     => !empty($meta_query) ? $meta_query : array(),
                'tax_query'      => count($tax_query) > 1 ? $tax_query : array(),
            );

            $car_query = new WP_Query($args);

            if ($car_query->have_posts()):
                while ($car_query->have_posts()): $car_query->the_post();
                    // Fetch custom fields
                    $price = get_post_meta(get_the_ID(), '_car_price', true);
                    $brand = get_post_meta(get_the_ID(), '_car_brand', true);
                    $production_year = get_post_meta(get_the_ID(), '_car_production_year', true);
                    $color = get_post_meta(get_the_ID(), '_car_color', true);
                    $car_image = get_the_post_thumbnail_url(get_the_ID(), 'large');

                    // Sanitize and convert the price to a numeric value
                    $price_numeric = floatval(str_replace(',', '', $price)); // Remove commas and convert to float
            ?>
            <div class="relative w-full max-w-lg mx-auto mb-16">
                <!-- Bigger Image with Zoom Effect on Hover -->
                <div class="overflow-hidden rounded-xl shadow-lg border border-gray-400">
                    <img src="<?php echo esc_url($car_image); ?>" alt="<?php the_title(); ?>" class="w-full h-96 object-cover transform transition-transform duration-500 hover:scale-110">
                </div>

                <!-- Compact Info Div -->
                <div class="absolute bottom-[-60px] left-1/2 transform -translate-x-1/2 bg-black bg-opacity-95 p-5 w-11/12 max-w-md rounded-lg text-white z-10 flex flex-col shadow-xl border border-gray-600 hover:shadow-2xl hover:bg-opacity-100 transition duration-300">
                    <!-- Name on Top -->
                    <h2 class="text-xl font-semibold text-center mb-3"><?php the_title(); ?></h2>

                    <!-- Brand, Production Year, and Color (Compact Layout) -->
                    <div class="text-sm text-gray-400 text-center flex justify-center gap-4">
                        <p>🏷: <?php echo esc_html($brand); ?></p>
                        <p>📅: <?php echo esc_html($production_year); ?></p>
                        <p>🎨: <?php echo esc_html($color); ?></p>
                    </div>

                    <!-- View Details Button with Hover Effect -->
                    <div class="flex justify-between items-center mt-4">
                        <a href="<?php the_permalink(); ?>" class="bg-red-600 hover:bg-white hover:text-red-600 transition-colors duration-300 px-4 py-2 rounded-lg shadow-lg text-sm">View Details</a>
                        <span class="text-xl font-bold text-red-600">$<?php echo esc_html(number_format($price_numeric)); ?><span class="text-sm">/day</span></span>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
            ?>
            <p class="text-center">No cars found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>