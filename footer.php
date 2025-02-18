<?php
/**
 * Footer Template for Rent-a-Car Theme
 */
?>

<footer class="bg-[#040404] text-white py-16">
    <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
        
        <!-- Company Info -->
        <div class="flex flex-col items-start">
            <h2 class="text-3xl font-bold text-[#da100a] flex items-center mb-4">
                <i class="fas fa-car text-white mr-3"></i> Rent A Car
            </h2>
            <p class="text-gray-400 mb-4">At Rent A Car, we believe that renting a car should be easy, affordable, and a pleasant experience. Whether you're going on a road trip or need a car for a business meeting, we have a wide selection of vehicles to meet your needs.</p>
            <p class="text-gray-400">Explore our fleet and find the perfect car for your next adventure. Your journey starts with us!</p>
        </div>

        <!-- Navigation -->
        <div>
            <h2 class="text-xl font-semibold text-white mb-4 flex items-center">
                <i class="fas fa-link text-[#da100a] mr-3"></i> Quick Links
            </h2>
            <ul class="space-y-4 text-gray-300">
                <li><a href="<?php echo home_url(); ?>" class="hover:text-[#da100a] transition duration-300 flex items-center">
                    <i class="fas fa-home mr-3"></i> Home
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Cars')); ?>" class="hover:text-[#da100a] transition duration-300 flex items-center">
                    <i class="fas fa-car-side mr-3"></i> Our Cars
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" class="hover:text-[#da100a] transition duration-300 flex items-center">
                    <i class="fas fa-envelope mr-3"></i> Contact Us
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('About')); ?>" class="hover:text-[#da100a] transition duration-300 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i> About Us
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('FAQ')); ?>" class="hover:text-[#da100a] transition duration-300 flex items-center">
                    <i class="fas fa-question-circle mr-3"></i> FAQ
                </a></li>
            </ul>
        </div>

        <!-- Social Media & Contact -->
        <div>
            <h2 class="text-xl font-semibold text-white mb-4 flex items-center">
                <i class="fas fa-share-alt text-[#da100a] mr-3"></i> Follow Us
            </h2>
            <div class="flex space-x-6 text-gray-300 mb-4">
                <a href="#" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="hover:text-[#da100a] transition duration-300">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
            </div>

            <div class="mt-4">
                <p class="text-gray-400 flex items-center mb-2">
                    <i class="fas fa-envelope text-[#da100a] mr-3"></i> support@rentacar.com
                </p>
                <p class="text-gray-400 flex items-center">
                    <i class="fas fa-phone text-[#da100a] mr-3"></i> +1 234 567 890
                </p>
            </div>

            <!-- Newsletter Section -->
            <div class="mt-8">
                <h3 class="text-[#da100a] text-xl font-semibold mb-4">Subscribe to Our Newsletter</h3>
                <p class="text-gray-400 mb-4">Stay up-to-date with the latest offers, promotions, and new cars added to our fleet. Get exclusive deals straight to your inbox!</p>
                <form action="#" method="POST" class="flex space-x-4">
                    <input type="email" placeholder="Enter your email" class="p-3 text-gray-700 rounded-md w-3/4" required>
                    <button type="submit" class="bg-[#da100a] text-white py-3 px-6 rounded-md hover:bg-white hover:text-[#da100a] transition duration-300">Subscribe</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Bottom Footer -->
    <div class="text-center text-gray-500 mt-12 border-t border-gray-700 pt-6">
        <p>&copy; <?php echo date('Y'); ?> Rent A Car. All rights reserved.</p>
        <p class="text-gray-400 text-sm">Crafted with passion to make your journey smoother. Your satisfaction is our priority!</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
