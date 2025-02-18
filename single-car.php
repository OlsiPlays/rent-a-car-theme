<?php
// Include header
get_header();

// Fetch Custom Fields
$car_brand = get_post_meta(get_the_ID(), '_car_brand', true);
$car_production_year = get_post_meta(get_the_ID(), '_car_production_year', true);
$car_color = get_post_meta(get_the_ID(), '_car_color', true);
$car_mileage = get_post_meta(get_the_ID(), '_car_mileage', true);
$car_price = get_post_meta(get_the_ID(), '_car_price', true);

// Fetch Car Images (Multiple Images)
$car_image_1 = get_post_meta(get_the_ID(), '_car_image_1', true);
$car_image_2 = get_post_meta(get_the_ID(), '_car_image_2', true);
$car_image_3 = get_post_meta(get_the_ID(), '_car_image_3', true);

// Featured Image (for the main image)
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div style="padding: top 100px;" class="container mx-auto pt-8 p-8 bg-fffcf5 shadow-xl rounded-xl">
    <!-- Car Featured Image and Info Section -->
    <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 lg:space-x-8">
        <!-- Featured Image -->
        <div class="w-full lg:w-1/2">
            <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php the_title(); ?>" class="w-full h-80 object-cover rounded-xl shadow-lg">
        </div>

        <!-- Car Information -->
        <div class="w-full lg:w-1/2 p-6 border-2 border-[#da100a] rounded-lg shadow-lg">
            <h1 class="text-3xl font-extrabold text-[#da100a] mb-4"><?php the_title(); ?></h1>
            <ul class="space-y-3 text-lg text-[#da100a]">
                <li><strong>Brand:</strong> <?php echo esc_html($car_brand); ?></li>
                <li><strong>Production Year:</strong> <?php echo esc_html($car_production_year); ?></li>
                <li><strong>Color:</strong> <?php echo esc_html($car_color); ?></li>
                <li><strong>Mileage:</strong> <?php echo esc_html($car_mileage); ?> km</li>
                <li class="text-xl font-bold text-[#da100a]"><strong>Price:</strong> $<?php echo esc_html($car_price); ?></li>
            </ul>

            <!-- Buy Now Button -->
            <a href="#" class="mt-6 inline-block px-6 py-3 text-lg font-semibold text-[#da100a] bg-white border-2 border-[#da100a] rounded-xl shadow-lg transition duration-200 hover:bg-[#da100a] hover:text-white hover:border-white transform hover:scale-105">Buy Now</a>
        </div>
    </div>

    <!-- Image Carousel -->
    <div class="car-carousel mt-8">
        <div class="slick-slider">
            <?php if ($car_image_1): ?>
                <div><img src="<?php echo esc_url($car_image_1); ?>" alt="Car Image 1" class="w-full h-64 object-cover rounded-xl shadow-lg"></div>
            <?php endif; ?>
            <?php if ($car_image_2): ?>
                <div><img src="<?php echo esc_url($car_image_2); ?>" alt="Car Image 2" class="w-full h-64 object-cover rounded-xl shadow-lg"></div>
            <?php endif; ?>
            <?php if ($car_image_3): ?>
                <div><img src="<?php echo esc_url($car_image_3); ?>" alt="Car Image 3" class="w-full h-64 object-cover rounded-xl shadow-lg"></div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Newest Car Section -->
    <div class="mt-8 bg-[#da100a] text-fffcf5 p-6 rounded-xl shadow-xl">
        <h2 class="text-2xl font-extrabold text-center">This is the Newest Car in our Collection!</h2>
        <p class="text-center mt-4">Experience the latest model with advanced features, sleek design, and exceptional performance.</p>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        // Initialize Slick Carousel
        $('.slick-slider').slick({
            dots: true,           // Show dots for navigation
            infinite: true,       // Enable infinite looping
            speed: 500,           // Set the transition speed (in milliseconds)
            fade: true,           // Enable fade transition effect
            cssEase: 'linear',    // Use linear transition easing
            autoplay: true,       // Enable autoplay
            autoplaySpeed: 3000   // Set autoplay speed to 3 seconds
        });
    });
</script>

<?php
// Include footer
get_footer();
?>
