<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadRunner Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-[#040404]">
<header class="fixed w-full backdrop-blur-md bg-[#040404]/70 shadow-lg">
    <div class="container mx-auto flex items-center justify-between px-6 py-3">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="RoadRunner Logo" class="h-8 w-auto">
        </a>
        
        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6">
            <a href="<?php echo home_url(); ?>" class="text-white hover:text-[#da100a] transition transform hover:scale-110">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="text-white hover:text-[#da100a] transition transform hover:scale-110">About Us</a>
            <a href="<?php echo home_url('/services'); ?>" class="text-white hover:text-[#da100a] transition transform hover:scale-110">Services</a>
            <a href="<?php echo home_url('/book'); ?>" class="text-white hover:text-[#da100a] transition transform hover:scale-110">Book</a>
            <a href="<?php echo home_url('/contact'); ?>" class="text-white hover:text-[#da100a] transition transform hover:scale-110">Contact Us</a>
        </nav>

        <!-- Buttons -->
        <div class="hidden md:flex space-x-2">
            <a href="<?php echo home_url('/signup'); ?>" class="px-3 py-1 text-white text-sm border border-white rounded-md hover:bg-white hover:text-[#040404] transition">Sign Up</a>
            <a href="<?php echo home_url('/login'); ?>" class="px-3 py-1 bg-[#da100a] text-white text-sm rounded-md hover:bg-white hover:text-[#da100a] transition">Login</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden text-white focus:outline-none text-2xl">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden flex flex-col items-center bg-[#040404] text-white space-y-4 py-4">
        <a href="<?php echo home_url(); ?>" class="hover:text-[#da100a] transition transform hover:scale-110">Home</a>
        <a href="<?php echo home_url('/about'); ?>" class="hover:text-[#da100a] transition transform hover:scale-110">About Us</a>
        <a href="<?php echo home_url('/services'); ?>" class="hover:text-[#da100a] transition transform hover:scale-110">Services</a>
        <a href="<?php echo home_url('/book'); ?>" class="hover:text-[#da100a] transition transform hover:scale-110">Book</a>
        <a href="<?php echo home_url('/contact'); ?>" class="hover:text-[#da100a] transition transform hover:scale-110">Contact Us</a>
        <a href="<?php echo home_url('/signup'); ?>" class="px-3 py-1 border border-white text-sm rounded-md hover:bg-white hover:text-[#040404] transition">Sign Up</a>
        <a href="<?php echo home_url('/login'); ?>" class="px-3 py-1 bg-[#da100a] text-white text-sm rounded-md hover:bg-white hover:text-[#da100a] transition">Login</a>
    </div>
</header>

    <script>
        document.getElementById("menu-btn").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>
</body>
</html>
