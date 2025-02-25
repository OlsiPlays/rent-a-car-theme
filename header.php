<?php
/**
 * Header Template for RoadRunner Rental Theme
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <?php wp_head(); ?>
</head>
<body class="bg-[#040404]">

<!-- Header -->
<header class="fixed w-full bg-transparent z-50"> <!-- Removed shadow-lg -->
    <div class="container mx-auto flex items-center justify-between px-6 py-3">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="flex items-center" aria-label="RoadRunner Rental Home">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="RoadRunner Logo" class="h-8 w-auto">
        </a>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6" aria-label="Main Navigation">
            <a href="<?php echo home_url('/'); ?>" class="text-white hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Home</a>
            <a href="<?php echo home_url('/about/'); ?>" class="text-white hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">About Us</a>
            <a href="<?php echo home_url('/services/'); ?>" class="text-white hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Services</a>
            <a href="<?php echo home_url('/our-cars/'); ?>" class="text-white hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Our Cars</a>
            <a href="<?php echo home_url('/contact/'); ?>" class="text-white hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Contact Us</a>
        </nav>

        <!-- Buttons and Shopping Bag -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="<?php echo home_url('/cart/'); ?>" class="relative text-white hover:text-[#da100a] transition-all transform hover:scale-105">
                <i class="fas fa-shopping-bag text-lg"></i>
                <span class="absolute -top-2 -right-2 bg-[#da100a] text-white text-xs rounded-full px-1.5 py-0.5">3</span>
            </a>
            <a href="<?php echo home_url('/signup/'); ?>" class="px-3 py-1.5 text-white text-sm border border-white rounded-md hover:bg-white hover:text-[#040404] transition-all">Sign Up</a>
            <a href="<?php echo home_url('/login/'); ?>" class="px-3 py-1.5 bg-[#da100a] text-white text-sm rounded-md hover:bg-white hover:text-[#da100a] transition-all">Login</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden text-white focus:outline-none text-2xl" aria-label="Toggle Mobile Menu">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center bg-[#040404] text-white space-y-4 py-4" aria-label="Mobile Navigation">
        <a href="<?php echo home_url('/'); ?>" class="hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Home</a>
        <a href="<?php echo home_url('/about/'); ?>" class="hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">About Us</a>
        <a href="<?php echo home_url('/services/'); ?>" class="hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Services</a>
        <a href="<?php echo home_url('/our-cars/'); ?>" class="hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Our Cars</a>
        <a href="<?php echo home_url('/contact/'); ?>" class="hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Contact Us</a>
        <a href="<?php echo home_url('/cart/'); ?>" class="hover:text-[#da100a] transition-all transform hover:scale-105 text-sm">Cart</a>
        <a href="<?php echo home_url('/signup/'); ?>" class="px-3 py-1 border border-white text-sm rounded-md hover:bg-white hover:text-[#040404] transition-all">Sign Up</a>
        <a href="<?php echo home_url('/login/'); ?>" class="px-3 py-1 bg-[#da100a] text-white text-sm rounded-md hover:bg-white hover:text-[#da100a] transition-all">Login</a>
    </div>
</header>


<script>
    // Mobile Menu Toggle
    document.getElementById("menu-btn").addEventListener("click", function() {
        const mobileMenu = document.getElementById("mobile-menu");
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("animate-slide-down");
    });


    // Mobile Menu Toggle
    document.getElementById("menu-btn").addEventListener("click", function() {
        const mobileMenu = document.getElementById("mobile-menu");
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("animate-slide-down");
    });

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Scroll Event Listener to Change Header Background
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        const scrollPosition = window.scrollY;

        // Add the 'bg-black' class if the user has scrolled down, otherwise remove it
        if (scrollPosition > 0) {
            header.classList.add('bg-black');
        } else {
            header.classList.remove('bg-black');
        }
    });

</script>

</body>
</html>

<style>

/* Add this to your existing CSS */
header.bg-black {
    background-color: #000; /* Black background */
    transition: background-color 0.3s ease; /* Smooth transition */
}


    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #da100a;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #b50d08;
    }

    /* Hover Effects */
    .group:hover .group-hover\:scale-110 {
        transform: scale(1.10);
    }

    .group:hover .group-hover\:opacity-100 {
        opacity: 1;
    }

    .hover\:bg-red-600:hover {
        background-color: #da100a;
    }

    .hover\:text-white:hover {
        color: #fff;
    }

    /* Mobile Menu Animation */
    @keyframes slide-down {
        0% {
            transform: translateY(-20px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .animate-slide-down {
        animation: slide-down 0.3s ease-out;
    }

    /* Header Background Transition */
    header.bg-black {
        background-color: #000; /* Black background */
        transition: background-color 0.3s ease; /* Smooth transition */
    }
</style>