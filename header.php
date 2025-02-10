<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoadRunner Car Rental</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <style>
    .blurred-background {
      background-image: url('your-image-url.jpg');
      background-size: cover;
      background-position: center;
      filter: blur(4px); /* Subtle blur */
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }
  </style>
</head>
<body class="bg-white font-open-sans">
  <!-- Header Section -->
  <header class="relative">
    <div class="blurred-background"></div>
    <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Darker overlay for more contrast -->
    <nav class="flex justify-between items-center py-4 px-8 md:px-12 relative z-10">
      <!-- Logo -->
      <div class="text-white text-3xl font-poppins font-semibold">
        <a href="/">RoadRunner</a>
      </div>
      <!-- Navigation Links (Desktop) -->
      <div class="hidden md:flex space-x-8 text-base font-medium">
        <a href="#home" class="text-white hover:text-da100a transition-all duration-300 ease-in-out transform hover:scale-105 hover:text-da100a">Home</a>
        <a href="#about" class="text-white hover:text-da100a transition-all duration-300 ease-in-out transform hover:scale-105 hover:text-da100a">About Us</a>
        <a href="#services" class="text-white hover:text-da100a transition-all duration-300 ease-in-out transform hover:scale-105 hover:text-da100a">Services</a>
        <a href="#contact" class="text-white hover:text-da100a transition-all duration-300 ease-in-out transform hover:scale-105 hover:text-da100a">Contact Us</a>
      </div>
      
      <!-- Mobile Menu Button (only visible on small screens) -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="text-white text-3xl">☰</button>
      </div>
      
      <!-- Buttons (Desktop) -->
      <div class="hidden md:flex space-x-6">
        <a href="#book" class="text-white bg-da100a px-6 py-2 rounded-md hover:bg-da100a-dark hover:text-white transition-all duration-300 ease-in-out transform hover:scale-105">Book</a>
        <a href="#signup" class="text-white border border-da100a px-6 py-2 rounded-md hover:bg-da100a hover:text-white transition-all duration-300 ease-in-out transform hover:scale-105">Sign Up</a>
        <a href="#login" class="text-white border border-da100a px-6 py-2 rounded-md hover:bg-da100a hover:text-white transition-all duration-300 ease-in-out transform hover:scale-105">Login</a>
      </div>
    </nav>

    <!-- Mobile Menu (Hidden by default, will show when button is clicked) -->
    <div id="mobile-menu" class="md:hidden hidden absolute top-16 left-0 w-full bg-black bg-opacity-70 text-white py-4 space-y-4 text-center">
      <a href="#home" class="block hover:text-da100a transition-all duration-300 ease-in-out">Home</a>
      <a href="#about" class="block hover:text-da100a transition-all duration-300 ease-in-out">About Us</a>
      <a href="#services" class="block hover:text-da100a transition-all duration-300 ease-in-out">Services</a>
      <a href="#contact" class="block hover:text-da100a transition-all duration-300 ease-in-out">Contact Us</a>
      <a href="#book" class="block text-white bg-da100a px-6 py-2 rounded-md hover:bg-da100a-dark hover:text-white transition-all duration-300 ease-in-out">Book</a>
      <a href="#signup" class="block text-white border border-da100a px-6 py-2 rounded-md hover:bg-da100a hover:text-white transition-all duration-300 ease-in-out">Sign Up</a>
      <a href="#login" class="block text-white border border-da100a px-6 py-2 rounded-md hover:bg-da100a hover:text-white transition-all duration-300 ease-in-out">Login</a>
    </div>
  </header>

  <script>
    // JavaScript for mobile menu toggle
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
</body>
</html>
