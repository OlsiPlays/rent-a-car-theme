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

<!-- Hero Section with Featured Image as Background -->
<div class="relative h-[500px] bg-cover bg-center flex items-center justify-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container mx-auto text-center relative z-10">
        <h1 class="text-6xl font-bold text-white mb-4 animate-fade-in"><?php the_title(); ?></h1>
        <p class="text-xl text-red-600 animate-fade-in delay-200">Experience the pinnacle of luxury and performance</p>
    </div>
</div>

<!-- Car Details Section -->
<div class="container mx-auto py-16 px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- Car Details -->
        <div class="p-8 bg-[#121212] rounded-lg shadow-lg border border-[#2a2a2a] hover:border-[#da100a] transition-all duration-300">
            <p class="text-3xl font-bold text-red-500 mb-6 animate-fade-in">$<?php echo esc_html($car_price); ?></p>

            <ul class="mt-6 space-y-4 text-gray-300 text-lg">
                <li class="flex items-center space-x-3 animate-fade-in delay-100">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </span>
                    <strong>Brand:</strong> <?php echo esc_html($car_brand); ?>
                </li>
                <li class="flex items-center space-x-3 animate-fade-in delay-200">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </span>
                    <strong>Production Year:</strong> <?php echo esc_html($car_production_year); ?>
                </li>
                <li class="flex items-center space-x-3 animate-fade-in delay-300">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </span>
                    <strong>Color:</strong> <?php echo esc_html($car_color); ?>
                </li>
                <li class="flex items-center space-x-3 animate-fade-in delay-400">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </span>
                    <strong>Mileage:</strong> <?php echo esc_html($car_mileage); ?> km
                </li>
            </ul>

            <a href="<?php echo get_template_directory_uri(); ?>/page-rent-now.php" class="inline-block bg-[#da100a] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#fffcf5] hover:text-[#040404] transition-all duration-300 mt-6 animate-fade-in delay-500">Rent Now</a>
        </div>

        <!-- Car Specifications (Optional) -->
        <div class="p-8 bg-[#121212] rounded-lg shadow-lg border border-[#2a2a2a] hover:border-[#da100a] transition-all duration-300">
            <h3 class="text-3xl font-bold text-white mb-6 animate-fade-in">Specifications</h3>
            <ul class="space-y-4 text-gray-300 text-lg">
                <li class="flex items-center space-x-3 animate-fade-in delay-100">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </span>
                    <strong>Engine:</strong> V8 Twin Turbo
                </li>
                <li class="flex items-center space-x-3 animate-fade-in delay-200">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </span>
                    <strong>Transmission:</strong> 8-Speed Automatic
                </li>
                <li class="flex items-center space-x-3 animate-fade-in delay-300">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </span>
                    <strong>Fuel Type:</strong> Premium Gasoline
                </li>
                <li class="flex items-center space-x-3 animate-fade-in delay-400">
                    <span class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </span>
                    <strong>Top Speed:</strong> 250 km/h
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Carousel Section for Additional Car Images -->
<div class="container mx-auto py-16 px-6">
    <h2 class="text-4xl font-bold text-white text-center mb-12 animate-fade-in">Gallery</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach ($car_images as $index => $image) : 
            if (!empty($image)) : ?>
            <div class="relative group cursor-pointer overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 animate-fade-in delay-<?php echo ($index + 1) * 100; ?>">
                <!-- Centered Image Container -->
                <div class="w-full h-64 flex items-center justify-center overflow-hidden">
                    <img src="<?php echo esc_url($image); ?>" alt="Car Image" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-6">
                    <p class="text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-500">View Image <?php echo $index + 1; ?></p>
                </div>
                <!-- Magnifying Glass Icon -->
                <div class="absolute top-4 right-4 bg-black/50 rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        <?php endif; 
        endforeach; ?>
    </div>
</div>

<!-- Lightbox Modal -->
<div id="lightboxModal" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50 p-6">
    <div class="relative max-w-6xl w-full">
        <!-- Lightbox Image -->
        <img id="lightboxImage" src="" alt="Full Size Car Image" class="w-full h-auto max-h-[90vh] rounded-xl shadow-2xl transform transition-transform duration-500 scale-95 hover:scale-100">

        <!-- Close Button -->
        <button onclick="closeLightbox()" class="absolute top-4 right-4 bg-red-500 text-white rounded-full p-2 hover:bg-red-600 transition duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Navigation Buttons -->
        <button onclick="prevImage()" class="absolute top-1/2 left-4 bg-black/50 text-white rounded-full p-3 hover:bg-black/70 transition duration-300 transform -translate-y-1/2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button onclick="nextImage()" class="absolute top-1/2 right-4 bg-black/50 text-white rounded-full p-3 hover:bg-black/70 transition duration-300 transform -translate-y-1/2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>
<?php

get_footer();
?>
<script>
    // JavaScript for Lightbox
    let currentImageIndex = 0;
    const carImages = <?php echo json_encode(array_values(array_filter($car_images))); ?>;

    function openLightbox(imageUrl) {
        currentImageIndex = carImages.indexOf(imageUrl);
        document.getElementById('lightboxImage').src = imageUrl;
        document.getElementById('lightboxModal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + carImages.length) % carImages.length;
        document.getElementById('lightboxImage').src = carImages[currentImageIndex];
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % carImages.length;
        document.getElementById('lightboxImage').src = carImages[currentImageIndex];
    }

    // Keyboard Navigation
    document.addEventListener('keydown', (e) => {
        if (document.getElementById('lightboxModal').classList.contains('hidden')) return;

        if (e.key === 'ArrowLeft') prevImage();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'Escape') closeLightbox();
    });
</script>

<style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #da100a;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #b50d08;
    }

    /* Animations */
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }

    .animate-fade-in.delay-200 {
        animation-delay: 0.2s;
    }

    /* Hover Effects */
    .group:hover .group-hover\:scale-105 {
        transform: scale(1.05);
    }

    .group:hover .group-hover\:opacity-100 {
        opacity: 1;
    }

    .hover\:scale-105:hover {
        transform: scale(1.05);
    }

    /* Typography */
    h1, h2, h3, h4, h5, h6, p, span, a, li {
        font-feature-settings: "smcp", "zero";
    }

    * {
        font-feature-settings: "smcp", "zero";
    }
</style>