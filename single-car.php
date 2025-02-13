<?php get_header(); ?>

<main class="container mx-auto px-6 py-16 bg-gray-100">
    <?php
    while ( have_posts() ) :
        the_post();
        
        // Get custom fields
        $brand = get_post_meta(get_the_ID(), 'brand', true);
        $production_year = get_post_meta(get_the_ID(), 'production_year', true);
        $gallery = get_post_meta(get_the_ID(), '_car_gallery', true);
        $gallery_images = !empty($gallery) ? explode(',', $gallery) : [];
    ?>
    
    <!-- Car Hero Section (Main Image) -->
    <div class="relative mb-12">
        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" class="w-full h-96 object-cover object-center">
        </div>
        <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2 text-center text-white">
            <h1 class="text-4xl font-extrabold drop-shadow-lg"><?php the_title(); ?></h1>
        </div>
    </div>
    
    <!-- Car Information Section -->
    <section class="bg-white p-8 rounded-lg shadow-lg mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Car Details</h2>
        
        <ul class="space-y-4">
            <li class="flex items-center">
                <span class="font-semibold text-gray-600 w-32">Brand:</span>
                <span class="text-gray-800"><?php echo esc_html($brand); ?></span>
            </li>
            <li class="flex items-center">
                <span class="font-semibold text-gray-600 w-32">Production Year:</span>
                <span class="text-gray-800"><?php echo esc_html($production_year); ?></span>
            </li>
        </ul>
    </section>
    
    <!-- Car Gallery Section -->
    <?php if ($gallery_images): ?>
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Car Gallery</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($gallery_images as $image_id): ?>
                <?php
                $image_url = wp_get_attachment_url($image_id);
                if ($image_url):
                ?>
                    <div class="relative group">
                        <img src="<?php echo esc_url($image_url); ?>" alt="Car Image" class="w-full h-60 object-cover rounded-lg shadow-md transform transition duration-300 group-hover:scale-105">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- Car Description Section -->
    <section class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Description</h2>
        <div class="text-gray-700">
            <?php the_content(); ?>
        </div>
    </section>
    
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
