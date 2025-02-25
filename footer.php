<?php
/**
 * Footer Template for Rent A Car Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<footer class="bg-[#040404] text-white py-16">
    <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12">
        <!-- Logo and Description -->
        <div data-aos="fade-up">
            <h2 class="text-3xl font-bold text-[#da100a] flex items-center mb-4">
                Rent A Car
            </h2>
            <p class="text-gray-400 mb-4">Your trusted car rental service for road trips, business, and adventure. Explore our fleet and start your journey with us today!</p>
        </div>

        <!-- Quick Links -->
        <div data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-xl font-semibold text-white mb-4">Quick Links</h2>
            <ul class="space-y-3 text-gray-300">
                <?php
                $pages = ['Home', 'Cars', 'Contact', 'About', 'FAQ'];
                foreach ($pages as $page) {
                    $page_url = get_permalink(get_page_by_title($page));
                    if ($page_url) {
                        echo '<li><a href="' . esc_url($page_url) . '" class="hover:text-[#da100a] transition duration-300">' . esc_html($page) . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>

        <!-- Contact Info -->
        <div data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-xl font-semibold text-white mb-4">Contact Us</h2>
            <p class="text-gray-400 mb-2">
                <i class="fas fa-envelope mr-2"></i>support@rentacar.com
            </p>
            <p class="text-gray-400 mb-2">
                <i class="fas fa-phone mr-2"></i>+1 234 567 890
            </p>
            <p class="text-gray-400">
                <i class="fas fa-map-marker-alt mr-2"></i>123 Main Street, City, Country
            </p>
        </div>

        <!-- Social Media and Newsletter -->
        <div data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-xl font-semibold text-white mb-4">Follow Us</h2>
            <div class="flex space-x-4 text-gray-300 mb-6">
                <a href="#" aria-label="Facebook" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" aria-label="Twitter" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" aria-label="Instagram" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
            </div>
            <h3 class="text-[#da100a] text-lg font-semibold mb-3">Subscribe to Our Newsletter</h3>
            <p class="text-gray-400 mb-4">Get exclusive offers and updates delivered to your inbox.</p>
            <form action="#" method="POST" class="flex">
                <input type="email" name="email" placeholder="Enter your email" class="p-3 text-gray-700 rounded-l-md w-2/3 focus:outline-none focus:ring-2 focus:ring-[#da100a]" required aria-label="Email">
                <button type="submit" class="bg-[#da100a] text-white py-3 px-4 rounded-r-md hover:bg-white hover:text-[#da100a] transition duration-300">Subscribe</button>
            </form>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="text-center text-gray-500 mt-12 border-t border-gray-700 pt-6" data-aos="fade-up" data-aos-delay="400">
        <p>&copy; <?php echo date('Y'); ?> RoadRunner. All rights reserved.</p>
        <p class="text-gray-400 text-sm">Designed by: Tiku, Olsi.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>