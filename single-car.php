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
$car_images = [
    get_post_meta(get_the_ID(), '_car_image_1', true),
    get_post_meta(get_the_ID(), '_car_image_2', true),
    get_post_meta(get_the_ID(), '_car_image_3', true),
];

// Featured Image
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

// Get the permalink of the "Our Cars" page
$our_cars_page_url = get_permalink(get_page_by_path('our-cars'));
?>

<div class="container mx-auto py-16 px-6 bg-black text-white rounded-xl shadow-xl">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="<?php echo esc_url($our_cars_page_url); ?>" class="inline-flex items-center text-gray-400 hover:text-red-500 transition">
            ← Back to Our Cars
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- Car Image -->
        <div>
            <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php the_title(); ?>" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <!-- Car Details -->
        <div class="p-8 bg-[#121212] rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-white"><?php the_title(); ?></h1>
            <p class="text-2xl text-red-500 font-semibold mt-2">$<?php echo esc_html($car_price); ?></p>

            <ul class="mt-6 space-y-4 text-gray-300 text-lg">
                <li><strong>Brand:</strong> <?php echo esc_html($car_brand); ?></li>
                <li><strong>Production Year:</strong> <?php echo esc_html($car_production_year); ?></li>
                <li><strong>Color:</strong> <?php echo esc_html($car_color); ?></li>
                <li><strong>Mileage:</strong> <?php echo esc_html($car_mileage); ?> km</li>
            </ul>

            <a href="#" class="mt-6 inline-block px-6 py-3 text-lg font-semibold text-white bg-red-600 rounded-lg shadow-md transition hover:bg-red-700">
                Buy Now
            </a>
        </div>
    </div>

    <!-- Additional Car Images -->
    <div class="mt-12">
        <h2 class="text-3xl font-bold text-white text-center">More Views</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
            <?php foreach ($car_images as $image) : 
                if (!empty($image)) : ?>
                <div>
                    <img src="<?php echo esc_url($image); ?>" alt="Car Image" class="w-full h-56 object-cover rounded-lg shadow-lg">
                </div>
            <?php endif; 
            endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
