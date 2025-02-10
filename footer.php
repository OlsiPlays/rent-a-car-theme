<?php
/**
 * Footer Template for Rent-a-Car Theme
 */
?>

<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Company Info -->
        <div>
            <h2 class="text-2xl font-bold">Rent A Car</h2>
            <p class="text-gray-400 mt-2">Your trusted car rental service.</p>
        </div>

        <!-- Navigation -->
        <div>
            <h2 class="text-xl font-semibold">Quick Links</h2>
            <ul class="mt-2 space-y-2">
                <li><a href="<?php echo home_url(); ?>" class="hover:text-yellow-400">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Cars')); ?>" class="hover:text-yellow-400">Our Cars</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" class="hover:text-yellow-400">Contact Us</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_title('About')); ?>" class="hover:text-yellow-400">About Us</a></li>
            </ul>
        </div>

        <!-- Social Media & Contact -->
        <div>
            <h2 class="text-xl font-semibold">Follow Us</h2>
            <div class="flex space-x-4 mt-2">
                <a href="#" class="text-gray-400 hover:text-yellow-400"><i class="fab fa-facebook text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-yellow-400"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-yellow-400"><i class="fab fa-instagram text-xl"></i></a>
            </div>
            <p class="mt-4 text-gray-400">Email: support@rentacar.com</p>
            <p class="text-gray-400">Phone: +1 234 567 890</p>
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
