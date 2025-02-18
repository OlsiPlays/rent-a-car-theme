<?php
/* Template Name: Signup */
get_header(); // Include the header file
?>

<div class="container mx-auto px-6 py-10 text-white">
    <h1 class="text-3xl font-bold mb-4">Sign Up</h1>
    
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST" class="max-w-lg mx-auto bg-[#040404] p-6 rounded-lg shadow-lg">
        <div class="mb-4">
            <label for="username" class="block text-lg mb-2">Username</label>
            <input type="text" name="username" id="username" class="w-full p-3 bg-gray-800 text-white border border-gray-600 rounded" required>
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-lg mb-2">Email</label>
            <input type="email" name="email" id="email" class="w-full p-3 bg-gray-800 text-white border border-gray-600 rounded" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-lg mb-2">Password</label>
            <input type="password" name="password" id="password" class="w-full p-3 bg-gray-800 text-white border border-gray-600 rounded" required>
        </div>

        <div class="mb-4">
            <label for="confirm_password" class="block text-lg mb-2">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="w-full p-3 bg-gray-800 text-white border border-gray-600 rounded" required>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" name="submit_signup" class="px-4 py-2 bg-[#da100a] text-white rounded-md hover:bg-[#e10c0a]">Sign Up</button>
        </div>
    </form>
    
    <?php
    // Handle the form submission
    if (isset($_POST['submit_signup'])) {
        // Get the form data
        $username = sanitize_text_field($_POST['username']);
        $email = sanitize_email($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Simple validation
        if ($password !== $confirm_password) {
            echo '<p class="text-red-500 mt-4">Passwords do not match. Please try again.</p>';
        } else {
            // Check if the email already exists
            if (email_exists($email)) {
                echo '<p class="text-red-500 mt-4">This email is already registered. Please use another one.</p>';
            } else {
                // Create the user
                $user_id = wp_create_user($username, $password, $email);
                
                // If user creation is successful, log them in
                if (!is_wp_error($user_id)) {
                    wp_set_current_user($user_id);
                    wp_set_auth_cookie($user_id);
                    
                    // Redirect to the login page after successful registration
                    wp_redirect(home_url('/login.php'));
                    exit;
                } else {
                    echo '<p class="text-red-500 mt-4">Error during registration. Please try again.</p>';
                }
            }
        }
    }
    ?>
</div>

<?php get_footer(); // Include the footer file ?>
