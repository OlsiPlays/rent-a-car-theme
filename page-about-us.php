<?php
/* Template Name: About Us */
get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Add Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add AOS for Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-[#040404] text-[#fffcf5] font-sans">
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen flex items-center justify-start text-left bg-cover bg-center px-10" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background3.jpg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-[#040404]/50"></div>
        <div class="relative z-10 max-w-2xl">
            <h1 class="text-6xl font-bold text-[#fffcf5]" data-aos="fade-up">About Us</h1>
            <p class="text-lg mt-4 text-[#da100a]" data-aos="fade-up" data-aos-delay="200">RoadRunner - Your Journey, Our Passion</p>
            <p class="text-lg mt-6 text-[#fffcf5]" data-aos="fade-up" data-aos-delay="400">
                At RoadRunner, we are more than just a car rental company. We are your trusted partner in every journey, offering premium vehicles and exceptional service to make your travels unforgettable.
            </p>
            <a href="#about" class="mt-8 inline-block px-8 py-3 bg-[#da100a] text-white text-sm font-semibold rounded-lg hover:bg-white hover:text-[#da100a] transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="600">
                Learn More
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-10">
        <div class="container mx-auto flex flex-col lg:flex-row items-center gap-10">
            <div class="lg:w-1/2" data-aos="fade-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/background2.jpg" alt="About Us" class="w-full max-w-md h-auto rounded-lg shadow-lg mx-auto">
            </div>
            <div class="lg:w-1/2" data-aos="fade-left">
                <h2 class="text-4xl font-bold text-[#da100a] mb-6">Who We Are</h2>
                <p class="text-lg mb-4 text-[#fffcf5]">
                    At RoadRunner, we are more than just a car rental company. We are your trusted partner in every journey, offering premium vehicles and exceptional service to make your travels unforgettable.
                </p>
                <p class="text-lg text-[#fffcf5]">
                    Our mission is to provide seamless experiences, whether you're renting a car for a weekend getaway or seeking reliable car repair services. With a focus on innovation and customer satisfaction, we strive to exceed your expectations.
                </p>
                <a href="#services" class="mt-6 inline-block px-6 py-2 border border-[#da100a] text-[#da100a] text-sm font-semibold rounded-lg hover:bg-[#da100a] hover:text-[#fffcf5] transition-all duration-300">
                    Explore Our Services
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section with Parallax Background -->
    <section id="services" class="relative py-20 px-10 bg-fixed bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/car3.jpg');">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#040404]/90 via-[#040404]/70 to-[#040404]/90"></div>
    <div class="relative z-10">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-[#da100a] mb-12" data-aos="fade-up">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Item 1 -->
                <div class="bg-[#040404]/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-[#da100a]/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center justify-center w-16 h-16 bg-[#da100a] rounded-full mx-auto mb-4">
                        <i class="fas fa-car text-2xl text-[#fffcf5]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#da100a] mb-4">Car Rentals</h3>
                    <p class="text-lg text-[#fffcf5]">
                        Choose from our wide range of luxury and economy vehicles for all your travel needs.
                    </p>
                </div>
                <!-- Service Item 2 -->
                <div class="bg-[#040404]/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-[#da100a]/20" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center justify-center w-16 h-16 bg-[#da100a] rounded-full mx-auto mb-4">
                        <i class="fas fa-tools text-2xl text-[#fffcf5]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#da100a] mb-4">Car Repairs</h3>
                    <p class="text-lg text-[#fffcf5]">
                        Professional car repair services to keep your vehicle in top condition.
                    </p>
                </div>
                <!-- Service Item 3 -->
                <div class="bg-[#040404]/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-[#da100a]/20" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center justify-center w-16 h-16 bg-[#da100a] rounded-full mx-auto mb-4">
                        <i class="fas fa-headset text-2xl text-[#fffcf5]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#da100a] mb-4">24/7 Support</h3>
                    <p class="text-lg text-[#fffcf5]">
                        Round-the-clock assistance to ensure a seamless experience for our customers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="relative py-20 bg-cover bg-center text-white" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background4.jpg');" data-aos="fade-up">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">
            What Our Clients Say
            <span class="block w-24 h-1 bg-[#da100a] mx-auto mt-2"></span>
        </h2>

        <!-- Swiper Container -->
        <div class="swiper-container reviews-carousel">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="bg-[#040404]/90 p-6 rounded-lg shadow-lg">
                        <p class="text-sm italic">"Absolutely fantastic service! The car was in perfect condition and the process was seamless. Highly recommend!"</p>
                        <div class="mt-4 flex items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1.1.jpg" alt="Client 1" class="w-10 h-10 rounded-full">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1.2.jpg" alt="Client 2" class="w-10 h-10 rounded-full">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1.3.jpg" alt="Client 3" class="w-10 h-10 rounded-full">
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

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    /* Swiper Container */
    .swiper-container {
        width: 100%;
        height: 100%;
        padding: 20px 0;
    }

    /* Swiper Slide */
    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        background: transparent;
    }

    /* Swiper Pagination */
    .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.5;
        width: 10px;
        height: 10px;
        margin: 0 8px !important;
    }

    .swiper-pagination-bullet-active {
        background: #da100a;
        opacity: 1;
    }

    /* Swiper Navigation Buttons */
    .swiper-button-prev,
    .swiper-button-next {
        color: #da100a;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        background: rgba(255, 255, 255, 0.4);
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 20px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Swiper
        new Swiper(".reviews-carousel", {
            loop: true, // Enable infinite loop
            slidesPerView: 1, // Show 1 slide at a time on mobile
            spaceBetween: 20, // Space between slides
            autoplay: {
                delay: 5000, // Auto-slide every 5 seconds
                disableOnInteraction: false, // Continue autoplay after user interaction
            },
            pagination: {
                el: ".swiper-pagination", // Pagination container
                clickable: true, // Allow clicking on pagination bullets
            },
            navigation: {
                nextEl: ".swiper-button-next", // Next button
                prevEl: ".swiper-button-prev", // Previous button
            },
            breakpoints: {
                640: {
                    slidesPerView: 2, // Show 2 slides on tablets
                },
                1024: {
                    slidesPerView: 3, // Show 3 slides on desktops
                },
            },
        });
    });
</script>


    <!-- Footer -->
    <?php get_footer(); ?>

    <!-- AOS Initialization -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: "ease-out",
            offset: 100
        });
    </script>
</body>
</html>