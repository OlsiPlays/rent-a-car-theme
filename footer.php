<?php
/**
 * Footer Template for Rent-a-Car Theme
 */
?>

<footer class="backdrop-blur-md bg-[#040404]/80 text-white py-10"> 
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Company Info -->
        <div>
            <h2 class="text-2xl font-bold text-white flex items-center">
                <i class="fas fa-car text-[#da100a] mr-2"></i> Rent A Car
            </h2>
            <p class="text-gray-400 mt-2">Your trusted car rental service, offering quality vehicles at affordable prices.</p>
        </div>

        <!-- Navigation -->
        <div>
            <h2 class="text-xl font-semibold text-white flex items-center">
                <i class="fas fa-link text-[#da100a] mr-2"></i> Quick Links
            </h2>
            <ul class="mt-2 space-y-2">
                <li><a href="<?php echo home_url(); ?>" class="flex items-center hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fas fa-home mr-2"></i> Home
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Cars')); ?>" class="flex items-center hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fas fa-car-side mr-2"></i> Our Cars
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" class="flex items-center hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fas fa-envelope mr-2"></i> Contact Us
                </a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('About')); ?>" class="flex items-center hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fas fa-info-circle mr-2"></i> About Us
                </a></li>
            </ul>
        </div>

        <!-- Social Media & Contact -->
        <div>
            <h2 class="text-xl font-semibold text-white flex items-center">
                <i class="fas fa-share-alt text-[#da100a] mr-2"></i> Follow Us
            </h2>
            <div class="flex space-x-4 mt-3">
                <a href="#" class="text-gray-400 hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-[#da100a] transition transform hover:scale-110">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
            </div>
            
            <div class="mt-4">
                <p class="text-gray-400 flex items-center">
                    <i class="fas fa-envelope text-[#da100a] mr-2"></i> support@rentacar.com
                </p>
                <p class="text-gray-400 flex items-center">
                    <i class="fas fa-phone text-[#da100a] mr-2"></i> +1 234 567 890
                </p>
            </div>
        </div>

    </div>

    <!-- Bottom Footer -->
    <div class="text-center text-gray-500 mt-6 border-t border-gray-700 pt-4">
        <p>&copy; <?php echo date('Y'); ?> Rent A Car. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
