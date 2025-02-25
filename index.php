<?php include 'header.php'; ?>

<!-- Include AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<!-- Loading Spinner -->
<div id="loading-spinner" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
    <div class="spinner"></div>
</div>

<!-- Hero Section -->
<section class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center px-4 overflow-hidden">
    <!-- Background Carousel -->
    <div class="absolute inset-0 bg-black/70">
        <!-- Carousel Slides -->
        <div id="carousel" class="absolute inset-0 transition-all duration-1000 ease-in-out">
            <!-- Slide 1 -->
            <div class="carousel-slide absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background.jpg');"></div>
            <!-- Slide 2 -->
            <div class="carousel-slide absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background1.jpg');"></div>
            <!-- Slide 3 -->
            <div class="carousel-slide absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background2.jpg');"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto flex flex-col items-center">
        <!-- Small Subheading -->
        <span class="text-[#da100a] uppercase tracking-widest font-medium text-xs mb-2" data-aos="fade-up">
            Luxury & Performance
        </span>

        <!-- Main Heading -->
        <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-4" data-aos="fade-up">
            Your Dream Ride Awaits
        </h1>

        <!-- Short Description -->
        <p class="mt-2 text-base text-gray-300 max-w-md mb-6" data-aos="fade-up" data-aos-delay="200">
            Find the perfect rental car with unbeatable service and prices. Experience comfort, style, and performance in one ride.
        </p>

        <!-- Action Buttons -->
        <div class="mt-4 flex space-x-3">
            <a href="#" class="px-6 py-2 text-xs font-medium bg-[#da100a] text-white rounded-lg shadow hover:bg-white hover:text-[#da100a] transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                Browse Cars
            </a>
            <a href="#" class="px-6 py-2 text-xs font-medium border border-white text-white rounded-lg hover:bg-white hover:text-[#040404] transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="600">
                Contact Us
            </a>
        </div>
    </div>
</section>
<style>
    .carousel-slide {
        transition: opacity 1s ease-in-out;
        opacity: 0;
        pointer-events: none; /* Prevent interactions with inactive slides */
    }

    .carousel-slide.active {
        opacity: 1;
        pointer-events: auto; /* Allow interactions with the active slide */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('carousel');
        const slides = carousel.querySelectorAll('.carousel-slide');
        let currentSlide = 0;
        let interval;

        // Function to show a specific slide
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        // Function to move to the next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Start the carousel
        function startCarousel() {
            interval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }

        // Initialize the carousel
        showSlide(currentSlide); // Show the first slide
        startCarousel(); // Start the auto-slide functionality
    });
</script>

<!-- Why Choose Us Section -->
<section class="w-full bg-black py-12">
    <div class="container mx-auto px-4 md:px-8 text-white text-center">
        <p class="text-sm text-gray-400 mb-2">Experience the pinnacle of luxury with our premium car rentals.</p>
        <h2 class="text-3xl font-bold mb-8">Rental <span class="text-red-500">Car Types</span></h2>
        <div class="flex justify-center items-center gap-12 flex-wrap"> <!-- Increased gap to 12 -->
            <!-- Luxury Cars -->
            <div class="relative group overflow-hidden rounded-3xl" data-aos="fade-up" data-aos-delay="400">
                <div class="relative w-80 h-96 rounded-2xl overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Luxury Cars" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-110 brightness-50 group-hover:brightness-75">
                    <h3 class="absolute top-4 left-4 text-lg font-bold">Luxury Cars</h3>
                </div>
                <div class="absolute -bottom-8 -left-8 bg-black p-10 rounded-full flex justify-center items-center w-24 h-24 transition-all duration-300 group-hover:bg-transparent group-hover:w-28 group-hover:h-28 group-hover:text-red-500">
                    <a href="<?php echo home_url('/our-cars/'); ?>" class="text-white text-3xl transition-all duration-300 group-hover:text-red-500">&#8594;</a>
                </div>
            </div>
            
            <!-- Sport Cars -->
            <div class="relative group overflow-hidden rounded-3xl" data-aos="fade-up" data-aos-delay="600">
                <div class="relative w-80 h-96 rounded-2xl overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/car2.jpg" alt="Sport Cars" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-110 brightness-50 group-hover:brightness-75">
                    <h3 class="absolute top-4 left-4 text-lg font-bold">Sport Cars</h3>
                </div>
                <div class="absolute -bottom-8 -left-8 bg-black p-10 rounded-full flex justify-center items-center w-24 h-24 transition-all duration-300 group-hover:bg-transparent group-hover:w-28 group-hover:h-28 group-hover:text-red-500">
                    <a href="<?php echo home_url('/our-cars/'); ?>" class="text-white text-3xl transition-all duration-300 group-hover:text-red-500">&#8594;</a>
                </div>
            </div>
            
            <!-- SUV -->
            <div class="relative group overflow-hidden rounded-3xl" data-aos="fade-up" data-aos-delay="800">
                <div class="relative w-80 h-96 rounded-2xl overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="SUV" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-110 brightness-50 group-hover:brightness-75">
                    <h3 class="absolute top-4 left-4 text-lg font-bold">SUV</h3>
                </div>
                <div class="absolute -bottom-8 -left-8 bg-black p-10 rounded-full flex justify-center items-center w-24 h-24 transition-all duration-300 group-hover:bg-transparent group-hover:w-28 group-hover:h-28 group-hover:text-red-500">
                    <a href="<?php echo home_url('/our-cars/'); ?>" class="text-white text-3xl transition-all duration-300 group-hover:text-red-500">&#8594;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Experience Section -->
<section class="relative py-12 bg-[#040404] text-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Content Section -->
            <div class="flex flex-col justify-center space-y-4" data-aos="fade-up">
                <h2 class="text-3xl font-semibold leading-tight" data-aos="fade-up">
                    Experience Comfort & Luxury
                </h2>
                <p class="text-sm opacity-90" data-aos="fade-up" data-aos-delay="200">
                    Our fleet includes the most luxurious and reliable vehicles. Whether you're traveling for business or leisure, we have the perfect ride for you.
                </p>
                <a href="#services" class="inline-block px-6 py-2 bg-[#da100a] text-white text-sm font-semibold rounded-lg shadow hover:bg-white hover:text-[#da100a] transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                    See Our Cars
                </a>
            </div>

            <!-- Right Image Section -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="600">
                <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="Luxury Car" class="w-full h-64 object-cover rounded-lg shadow group-hover:scale-105 transition-all duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-center items-center">
                    <h3 class="text-white text-lg font-semibold">Luxury at Your Fingertips</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-[#040404] text-[#fffcf5] relative overflow-hidden" data-aos="fade-up">
    <!-- Parallax Background -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://via.placeholder.com/1920x1080');" data-aos="fade-in" data-aos-delay="300"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-bold mb-12 relative inline-block" data-aos="fade-up">
            Explore Our Luxury Fleet
            <span class="absolute -bottom-2 left-1/2 w-24 h-1 bg-[#da100a] transform -translate-x-1/2"></span>
        </h2>

        <!-- Swiper Container -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
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
                <div class="swiper-slide">
                    <div class="relative group transform transition-transform duration-500 ease-in-out hover:scale-105">
                        <!-- Bigger Image -->
                        <div class="overflow-hidden rounded-lg shadow-lg">
                            <img src="<?php echo esc_url($car_image); ?>" alt="<?php the_title(); ?>" class="w-full h-64 md:h-80 object-cover transition-transform duration-700 ease-in-out transform group-hover:scale-110">
                        </div>

                        <!-- Info Div -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#040404]/90 via-[#040404]/50 to-transparent opacity-0 group-hover:opacity-100 flex justify-center items-end transition-opacity duration-500 rounded-lg p-6">
                            <div class="text-center">
                                <!-- Name on Top -->
                                <h3 class="text-2xl font-semibold text-[#fffcf5]"><?php the_title(); ?></h3>

                                <!-- Brand, Production Year, and Color -->
                                <p class="text-sm text-[#fffcf5] mt-2">
                                    🏷: <?php echo esc_html($brand); ?> | 📅: <?php echo esc_html($production_year); ?> | 🎨: <?php echo esc_html($color); ?>
                                </p>

                                <!-- View Details Button and Price -->
                                <div class="flex justify-between items-center mt-4">
                                    <a href="<?php the_permalink(); ?>" class="text-[#da100a] font-semibold text-sm border-2 border-[#da100a] transition-all duration-300 hover:bg-[#da100a] hover:text-[#fffcf5] px-6 py-2 rounded-full">
                                        View Details
                                    </a>
                                    <span class="text-lg font-bold text-[#da100a]">$<?php echo esc_html(number_format($price_numeric)); ?><span class="text-sm">/day</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                ?>
                <p class="text-[#fffcf5]">No cars found.</p>
                <?php endif; ?>
            </div>
            <!-- Swiper Pagination and Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev text-[#da100a] hover:text-[#fffcf5] transition-colors duration-300"></div>
            <div class="swiper-button-next text-[#da100a] hover:text-[#fffcf5] transition-colors duration-300"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            loop: true, // Enable infinite loop
            slidesPerView: 1, // Default: 1 slide per view on mobile
            spaceBetween: 20, // Space between slides
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Responsive breakpoints
                640: {
                    slidesPerView: 2, // 2 slides per view on tablets
                },
                1024: {
                    slidesPerView: 3, // 3 slides per view on desktops
                },
            },
        });
    });
</script>

<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-pagination-bullet {
        background-color: #da100a;
        opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }

    .swiper-button-prev,
    .swiper-button-next {
        color: #da100a;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        color: #fffcf5;
    }
</style>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>





<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.reviews-carousel', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>

<!-- Custom CSS for Swiper -->
<style>
    .reviews-carousel .swiper-slide {
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    }

    .reviews-carousel .swiper-slide:hover {
        transform: scale(1.05);
    }
</style>

<!-- Testimonials Section -->
<section class="relative py-20 bg-cover bg-center text-white" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background4.jpg');" data-aos="fade-up">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">
            What Our Clients Say
            <span class="block w-24 h-1 bg-[#da100a] mx-auto mt-2"></span>
        </h2>

        <div class="swiper-container reviews-carousel">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="bg-[#040404]/90 p-6 rounded-lg shadow-lg">
                        <p class="text-sm italic">"Absolutely fantastic service! The car was in perfect condition and the process was seamless. Highly recommend!"</p>
                        <div class="mt-4 flex items-center">
                            <img  src="<?php echo get_template_directory_uri(); ?>/images/1.1.jpg" alt="Client 1" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="font-semibold">John Doe</h4>
                                <p class="text-xs text-gray-400">Business Executive</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="bg-[#040404]/90 p-6 rounded-lg shadow-lg">
                        <p class="text-sm italic">"The best car rental experience I've ever had. The luxury cars are top-notch and the support team is very helpful."</p>
                        <div class="mt-4 flex items-center">
                            <img  src="<?php echo get_template_directory_uri(); ?>/images/1.2.jpg" alt="Client 2" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="font-semibold">Jane Smith</h4>
                                <p class="text-xs text-gray-400">Travel Blogger</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="bg-[#040404]/90 p-6 rounded-lg shadow-lg">
                        <p class="text-sm italic">"I rented a sports car for a weekend getaway, and it was an unforgettable experience. Will definitely rent again!"</p>
                        <div class="mt-4 flex items-center">
                            <img  src="<?php echo get_template_directory_uri(); ?>/images/1.3.jpg" alt="Client 3" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <h4 class="font-semibold">Mike Johnson</h4>
                                <p class="text-xs text-gray-400">Entrepreneur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination and Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>





<!-- Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Include AOS JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- AOS Initialization -->
<script>
    AOS.init({
        duration: 1000,
        once: true,
        easing: "ease-out",
        offset: 100
    });

    // Hide loading spinner after page load
    window.addEventListener('load', function() {
        document.getElementById('loading-spinner').style.display = 'none';
    });

    // Initialize Swiper
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper-container", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    });


</script>

<?php include 'footer.php'; ?>

<style>
    /* Spinner Styles */
    .spinner {
        width: 50px;
        height: 50px;
        border: 4px solid rgba(255, 255, 255, 0.1);
        border-left-color: #da100a;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
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

    /* Swiper Navigation Buttons */
    .swiper-button-prev,
    .swiper-button-next {
        color: #da100a;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 30px;
        height: 30px;
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        background: rgba(255, 255, 255, 0.4);
    }

    .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
        background: #da100a;
        opacity: 1;
    }
</style>