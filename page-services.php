<?php
/*
Template Name: Service
*/
get_header(); // Include the header
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Hero Section with Video Background -->
        <section class="relative h-screen flex items-center justify-start overflow-hidden">
    <?php
    $video_url = get_template_directory_uri() . '/videos/bg1.mp4';
    ?>
    <!-- Video Background -->
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="<?php echo $video_url; ?>" type="video/mp4">
        <!-- Fallback Image -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/fallback.jpg" alt="Fallback Image" class="absolute inset-0 w-full h-full object-cover z-0">
        Your browser does not support the video tag.
    </video>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
    <!-- Text Content -->
    <div class="relative text-left text-white max-w-2xl px-4 z-20 ml-20">
        <h1 class="text-5xl font-bold mb-6 animate-fade-up">Your Journey Starts Here</h1>
        <p class="text-lg mb-8 animate-fade-up delay-100">Explore the freedom of the open road with our wide range of premium vehicles. Whether it's a weekend getaway or a business trip, we’ve got the perfect ride for you.</p>
        <a href="#services" class="inline-block bg-[#da100a] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#fffcf5] hover:text-[#040404] transition-all duration-300 animate-fade-up delay-200">Browse Our Fleet</a>
    </div>
</section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-[#040404] text-[#fffcf5]">
            <div class="container mx-auto px-4">
                <!-- Section Title -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4 animate-fade-up">Our Fleet</h2>
                    <p class="text-[#da100a] animate-fade-up delay-100">Choose from a variety of vehicles to suit your travel needs.</p>
                </div>
                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Item 1 -->
                    <div class="bg-[#040404] p-8 rounded-lg border border-[#da100a] hover:border-[#fffcf5] hover:shadow-lg hover:scale-105 transition-all duration-300">
                        <div class="text-5xl text-[#da100a] mb-6">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 animate-fade-up delay-200">Luxury Cars</h3>
                        <p class="text-[#fffcf5] animate-fade-up delay-300">Travel in style with our premium selection of luxury vehicles, perfect for business or special occasions.</p>
                        <a href="#" class="text-[#da100a] hover:text-[#fffcf5] transition-all duration-300 mt-4 inline-block animate-fade-up delay-400">Learn More →</a>
                    </div>
                    <!-- Service Item 2 -->
                    <div class="bg-[#040404] p-8 rounded-lg border border-[#da100a] hover:border-[#fffcf5] hover:shadow-lg hover:scale-105 transition-all duration-300">
                        <div class="text-5xl text-[#da100a] mb-6">
                            <i class="fas fa-suv"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 animate-fade-up delay-200">SUVs & Crossovers</h3>
                        <p class="text-[#fffcf5] animate-fade-up delay-300">Ideal for family trips or off-road adventures, our SUVs offer comfort and versatility.</p>
                        <a href="#" class="text-[#da100a] hover:text-[#fffcf5] transition-all duration-300 mt-4 inline-block animate-fade-up delay-400">Learn More →</a>
                    </div>
                    <!-- Service Item 3 -->
                    <div class="bg-[#040404] p-8 rounded-lg border border-[#da100a] hover:border-[#fffcf5] hover:shadow-lg hover:scale-105 transition-all duration-300">
                        <div class="text-5xl text-[#da100a] mb-6">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 animate-fade-up delay-200">Trucks & Vans</h3>
                        <p class="text-[#fffcf5] animate-fade-up delay-300">Need to haul or transport? Our trucks and vans are built for power and reliability.</p>
                        <a href="#" class="text-[#da100a] hover:text-[#fffcf5] transition-all duration-300 mt-4 inline-block animate-fade-up delay-400">Learn More →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Gallery Section -->
        <section class="py-20 bg-[#040404]">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4 text-white animate-fade-up">Our Vehicles</h2>
                    <p class="text-[#da100a] animate-fade-up delay-100">Explore our top-rated fleet of cars, SUVs, and trucks.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Image 1 -->
                    <div class="relative h-64 bg-cover bg-center rounded-lg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/car1.jpg');">
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex items-center justify-center hover:bg-opacity-70 transition-all duration-300">
                            <h3 class="text-white text-2xl font-bold animate-fade-up delay-500">Luxury Sedan</h3>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="relative h-64 bg-cover bg-center rounded-lg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/car2.jpg');">
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex items-center justify-center hover:bg-opacity-70 transition-all duration-300">
                            <h3 class="text-white text-2xl font-bold animate-fade-up delay-600">Family SUV</h3>
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="relative h-64 bg-cover bg-center rounded-lg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/car3.jpg');">
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex items-center justify-center hover:bg-opacity-70 transition-all duration-300">
                            <h3 class="text-white text-2xl font-bold animate-fade-up delay-700">Adventure Truck</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Last Section with Scrolling Video and Service Text -->
        <section class="relative h-screen overflow-hidden">
            <!-- Scrolling Video Background -->
            <div class="absolute inset-0 w-full h-full overflow-hidden z-0">
                <video autoplay muted loop class="w-full h-full object-cover transform scale-150" style="transform: scale(1.5);">
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/bg1.mp4" type="video/mp4">
                    <!-- Fallback Image -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fallback.jpg" alt="Fallback Image" class="absolute inset-0 w-full h-full object-cover">
                    Your browser does not support the video tag.
                </video>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>
            <div class="relative z-10 h-full flex flex-col justify-center items-center text-center text-white px-4">
                <h2 class="text-6xl font-bold mb-3 animate-fade-up">Drive with Confidence</h2>
            </div>
            <!-- Service Text Divs -->
            <div class="absolute inset-0 z-20 flex flex-col md:flex-row justify-center items-center gap-8 px-4">
                <!-- Service 1 -->
                <div class="bg-[#040404] bg-opacity-75 p-6 rounded-lg text-center">
                    <div class="text-4xl text-[#da100a] mb-4 animate-fade-up delay-300">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-[#fffcf5] animate-fade-up delay-400">Luxury Cars</h3>
                    <p class="text-[#fffcf5] animate-fade-up delay-500">Experience elegance and performance on the road.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-[#040404] bg-opacity-75 p-6 rounded-lg text-center">
                    <div class="text-4xl text-[#da100a] mb-4 animate-fade-up delay-300">
                        <i class="fas fa-suv"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-[#fffcf5] animate-fade-up delay-400">SUVs & Crossovers</h3>
                    <p class="text-[#fffcf5] animate-fade-up delay-500">Perfect for family trips and off-road adventures.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-[#040404] bg-opacity-75 p-6 rounded-lg text-center">
                    <div class="text-4xl text-[#da100a] mb-4 animate-fade-up delay-300">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-[#fffcf5] animate-fade-up delay-400">Trucks & Vans</h3>
                    <p class="text-[#fffcf5] animate-fade-up delay-500">Built for power, reliability, and heavy-duty tasks.</p>
                </div>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<style>
    @keyframes fade-up {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-up {
        animation: fade-up 0.8s ease-out forwards;
    }

    .delay-100 {
        animation-delay: 0.1s;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }

    .delay-500 {
        animation-delay: 0.5s;
    }

    .delay-600 {
        animation-delay: 0.6s;
    }

    .delay-700 {
        animation-delay: 0.7s;
    }
</style>

<?php
get_footer(); // Include the footer
?>