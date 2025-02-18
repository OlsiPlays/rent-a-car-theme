<?php include 'header.php'; ?>

<section class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center px-6" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background.jpg');">
    <div class="absolute inset-0 bg-[#040404]/70"></div> <!-- Dark overlay for better readability -->

    <div class="relative z-10 container mx-auto flex flex-col items-center">
        <!-- Small Subheading -->
        <span class="text-[#da100a] uppercase tracking-widest font-medium text-sm md:text-base">Luxury & Performance</span>

        <!-- Main Heading -->
        <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mt-2">
            Your Dream Ride Awaits
        </h1>

        <!-- Short Description -->
        <p class="mt-4 text-lg text-gray-300 max-w-lg">
            Find the perfect rental car with unbeatable service and prices. Experience comfort, style, and performance in one ride.
        </p>

        <!-- Action Buttons -->
        <div class="mt-6 flex space-x-4">
            <a href="#" class="px-6 py-2 text-sm font-medium bg-[#da100a] text-white rounded-lg shadow-md transition-all duration-300 hover:bg-white hover:text-[#da100a]">
                Browse Cars
            </a>
            <a href="#" class="px-6 py-2 text-sm font-medium border border-white text-white rounded-lg transition-all duration-300 hover:bg-white hover:text-[#040404]">
                Contact Us
            </a>
        </div>
    </div>
</section>


<!-- Second Section: Why Choose Us -->
<section class="w-full bg-[#040404] py-16">
    <div class="container mx-auto px-6 md:px-12 text-white text-center">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Why Choose RoadRunner?</h2>
        <p class="text-lg md:text-xl opacity-80 max-w-2xl mx-auto mb-12">
            Discover the advantages of renting with us – luxury, affordability, and convenience at your fingertips.
        </p>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="relative group">
                <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Luxury Cars" class="h-64 w-full object-cover rounded-lg transition-all duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex justify-center items-center transition-all duration-300 rounded-lg">
                    <h3 class="text-2xl font-semibold text-white">Luxury & Comfort</h3>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="relative group">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="Affordable Prices" class="h-64 w-full object-cover rounded-lg transition-all duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex justify-center items-center transition-all duration-300 rounded-lg">
                    <h3 class="text-2xl font-semibold text-white">Affordable Prices</h3>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="relative group">
                <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="24/7 Support" class="h-64 w-full object-cover rounded-lg transition-all duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex justify-center items-center transition-all duration-300 rounded-lg">
                    <h3 class="text-2xl font-semibold text-white">24/7 Support</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative py-20 bg-[#040404] text-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <!-- Left Content Section -->
            <div class="flex flex-col justify-center space-y-6">
                <h2 class="text-4xl font-semibold leading-tight">
                    Experience Comfort & Luxury with RoadRunner Rental
                </h2>
                <p class="text-lg opacity-90">
                    Our fleet includes the most luxurious and reliable vehicles. Whether you're traveling for business or leisure, we have the perfect ride for you.
                </p>
                <p class="text-lg opacity-90">
                    Choose from a wide variety of models, all carefully maintained to ensure top-notch performance and comfort.
                </p>
                <a href="#services" class="inline-block px-8 py-3 bg-[#da100a] text-white text-lg font-semibold rounded-lg shadow-md hover:bg-white hover:text-[#da100a] transition-all">
                    See Our Cars
                </a>
            </div>

            <!-- Right Image Section -->
            <div class="relative group">
                <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="Luxury Car" class="w-full h-auto rounded-lg shadow-lg group-hover:scale-105 transition-all duration-500">
                <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-center items-center">
                    <h3 class="text-white text-2xl font-semibold opacity-100">Luxury at Your Fingertips</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative w-full min-h-screen bg-fixed bg-cover bg-center flex items-center justify-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/5.jpg');">
    <!-- Background Overlay -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

    <!-- Content Container -->
    <div class="relative z-10 text-center text-white px-6 max-w-2xl mx-auto">
        <!-- Animated Heading -->
        <h2 class="text-4xl md:text-6xl font-bold leading-tight mb-6 animate__animated animate__fadeInDown opacity-100">
            Discover The Power of Precision
        </h2>

        <!-- Subheading -->
        <p class="text-lg md:text-xl mb-6 animate__animated animate__fadeInUp animate__delay-1s opacity-100">
            Unlock a new level of driving experience with our premium vehicles designed for the road ahead.
        </p>

        <!-- Glassmorphism Box -->
        <div class="bg-white/10 backdrop-blur-md rounded-lg p-6 shadow-lg animate__animated animate__zoomIn animate__delay-2s opacity-100">
            <p class="text-lg md:text-xl text-gray-200">
                Experience the perfect blend of luxury, power, and technology.
            </p>
        </div>

        <!-- Button -->
        <a href="#" class="inline-block mt-6 px-8 py-4 bg-[#da100a] text-white text-lg font-semibold rounded-lg shadow-md transition-all duration-300 transform hover:scale-105 hover:shadow-lg hover:bg-white hover:text-[#da100a] animate__animated animate__fadeInUp animate__delay-3s opacity-100">
            Book Your Ride
        </a>
    </div>
</section>



<section class="py-16 bg-[#040404] text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-12 relative inline-block">
            Explore Our Cars
            <span class="absolute -bottom-2 left-1/2 w-24 h-1 bg-[#da100a] transform -translate-x-1/2"></span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'car',
                'posts_per_page' => 6,
            );
            $car_query = new WP_Query($args);

            if ($car_query->have_posts()):
                while ($car_query->have_posts()): $car_query->the_post();
                    $brand = get_post_meta(get_the_ID(), '_car_brand', true);
                    $production_year = get_post_meta(get_the_ID(), '_car_production_year', true);
                    $color = get_post_meta(get_the_ID(), '_car_color', true);
                    $mileage = get_post_meta(get_the_ID(), '_car_mileage', true);
                    $price = get_post_meta(get_the_ID(), '_car_price', true);
                    
                    $image_1 = get_post_meta(get_the_ID(), '_car_image_1', true);
                    $image_2 = get_post_meta(get_the_ID(), '_car_image_2', true);
                    $image_3 = get_post_meta(get_the_ID(), '_car_image_3', true);
                    
                    $first_image_url = !empty($image_1) ? esc_url($image_1) : get_template_directory_uri() . '/images/default-car.jpg';
                    $second_image_url = !empty($image_2) ? esc_url($image_2) : $first_image_url;
                    $third_image_url = !empty($image_3) ? esc_url($image_3) : $first_image_url;
                    ?>
                    <div class="group bg-[#1c1c1c] rounded-xl overflow-hidden shadow-lg transform transition duration-300 hover:scale-[1.05] hover:shadow-xl relative">
                        <!-- Image Slider -->
                        <div class="relative w-full h-60 overflow-hidden">
                            <img src="<?php echo $first_image_url; ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover transition-opacity duration-500 opacity-100 group-hover:opacity-0">
                            <img src="<?php echo $second_image_url; ?>" alt="<?php the_title(); ?>" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        </div>

                        <!-- Info Section -->
                        <div class="p-6 text-center relative">
                            <h3 class="text-2xl font-semibold text-white"><?php the_title(); ?></h3>
                            <p class="text-lg text-gray-300">Brand: <?php echo esc_html($brand); ?></p>
                            <p class="text-sm text-gray-400">Year: <?php echo esc_html($production_year); ?></p>
                            <p class="text-sm text-gray-400">Color: <?php echo esc_html($color); ?></p>
                            <p class="text-sm text-gray-400">Mileage: <?php echo esc_html($mileage); ?> km</p>
                            <p class="text-lg text-[#da100a] font-bold">Price: $<?php echo esc_html($price); ?></p>
                            <a href="<?php the_permalink(); ?>" class="inline-block mt-4 px-6 py-2 bg-[#da100a] text-white text-lg font-semibold rounded-lg shadow-md hover:bg-white hover:text-[#da100a] transition duration-300 relative z-10">
                                Book Now
                            </a>
                        </div>

                        <!-- Glowing Effect -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#da100a]/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="text-white">No cars available at the moment.</p>';
            endif;
            ?>
        </div>
    </div>
</section>




<section class="py-16 bg-black text-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#da100a]">What Our Customers Say</h2>
        <p class="text-gray-400 mb-12">Real feedback from happy RoadRunner users!</p>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Review 1 -->
            <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all">
                <p class="text-gray-300">"RoadRunner made my vacation amazing! Smooth booking process and excellent cars!"</p>
                <div class="mt-4 flex justify-center items-center">
                    <img src="images/user1.jpg" class="w-12 h-12 rounded-full border-2 border-[#da100a]" alt="User 1">
                    <div class="ml-3">
                        <h4 class="font-semibold">Sarah J.</h4>
                        <p class="text-[#da100a]">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all">
                <p class="text-gray-300">"Best rental experience ever! Highly recommend RoadRunner for all travelers."</p>
                <div class="mt-4 flex justify-center items-center">
                    <img src="images/user2.jpg" class="w-12 h-12 rounded-full border-2 border-[#da100a]" alt="User 2">
                    <div class="ml-3">
                        <h4 class="font-semibold">James K.</h4>
                        <p class="text-[#da100a]">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg transform hover:scale-105 transition-all">
                <p class="text-gray-300">"Excellent service, well-maintained cars, and great customer support!"</p>
                <div class="mt-4 flex justify-center items-center">
                    <img src="images/user3.jpg" class="w-12 h-12 rounded-full border-2 border-[#da100a]" alt="User 3">
                    <div class="ml-3">
                        <h4 class="font-semibold">Michael R.</h4>
                        <p class="text-[#da100a]">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'footer.php'; ?>
