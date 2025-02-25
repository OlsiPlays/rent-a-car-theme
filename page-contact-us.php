<?php
/**
 * Template Name: Contact Us
 */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom CSS for video background */
    .video-background {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }
    .video-background video {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: translate(-50%, -50%);
      z-index: -1;
    }
    .video-background img {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: translate(-50%, -50%);
      z-index: -1;
    }

    /* Custom Animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .fade-in {
      animation: fadeIn 1.5s ease-in-out;
    }
    @keyframes slideInFromLeft {
      from { transform: translateX(-100%); }
      to { transform: translateX(0); }
    }
    .slide-in-left {
      animation: slideInFromLeft 1s ease-in-out;
    }
    @keyframes slideInFromRight {
      from { transform: translateX(100%); }
      to { transform: translateX(0); }
    }
    .slide-in-right {
      animation: slideInFromRight 1s ease-in-out;
    }

    /* Dark overlay for sections */
    .dark-overlay {
      position: relative;
    }
    .dark-overlay::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(4, 4, 4, 0.8); /* Semi-transparent black overlay */
      z-index: 0;
    }
    .dark-overlay > * {
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body class="bg-[#040404] text-[#ede9e9]">
<!-- Section 1: Header with Video Background -->
<section class="relative h-screen flex items-center justify-start overflow-hidden">
    <?php
    $video_url = get_template_directory_uri() . '/videos/bg.mp4'; // Update video path
    $fallback_image_url = get_template_directory_uri() . '/images/fallback.jpg'; // Update fallback image path
    ?>
    <!-- Video Background -->
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="<?php echo $video_url; ?>" type="video/mp4">
        <!-- Fallback Image -->
        <img src="<?php echo $fallback_image_url; ?>" alt="Fallback Image" class="absolute inset-0 w-full h-full object-cover z-0">
        Your browser does not support the video tag.
    </video>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-[#040404] bg-opacity-70 z-10"></div>
    <!-- Text Content -->
    <div class="relative text-left max-w-2xl px-4 z-20 ml-20">
        <h1 class="text-5xl font-bold mb-6 text-[#da100a] animate-fade-up">Contact Us</h1>
        <p class="text-lg mb-8 animate-fade-up text-[#ede9e9] delay-100">We're here to help! Reach out to us for any inquiries, feedback, or assistance. Our team is ready to assist you.</p>
        <a href="#contact-form" class="inline-block bg-[#da100a] text-[#ede9e9] px-8 py-3 rounded-lg font-semibold hover:bg-[#ede9e9] hover:text-[#040404] transition-all duration-300 animate-fade-up delay-200">Get in Touch</a>
    </div>
</section>

<!-- Section 2: Contact Form -->
<section id="contact-form" class="py-20 dark-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background2.jpg'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4 flex justify-center">
        <div class="w-full max-w-3xl bg-[#040404] bg-opacity-90 text-[#ede9e9] p-10 rounded-2xl shadow-2xl transform transition-all duration-500 hover:shadow-3xl">
            <h2 class="text-4xl font-extrabold mb-8 text-center text-[#da100a]">Contact Us</h2>
            <p class="text-center text-[#ede9e9] mb-6">We’d love to hear from you! Fill out the form below and we’ll get back to you as soon as possible.</p>
            <form class="space-y-6">
                <!-- Name Field -->
                <div class="relative">
                    <input type="text" id="name" class="w-full px-5 py-3 bg-[#040404] border border-[#da100a] rounded-xl focus:ring-4 focus:ring-[#da100a] focus:border-[#da100a] transition-all duration-300 placeholder-transparent peer" placeholder="John Doe">
                    <label for="name" class="absolute left-5 -top-2 bg-[#040404] px-2 text-sm text-[#ede9e9] transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-[#ede9e9] peer-placeholder-shown:top-3 peer-focus:-top-2 peer-focus:text-sm peer-focus:text-[#ede9e9]">Full Name</label>
                </div>

                <!-- Email Field -->
                <div class="relative">
                    <input type="email" id="email" class="w-full px-5 py-3 bg-[#040404] border border-[#da100a] rounded-xl focus:ring-4 focus:ring-[#da100a] focus:border-[#da100a] transition-all duration-300 placeholder-transparent peer" placeholder="johndoe@example.com">
                    <label for="email" class="absolute left-5 -top-2 bg-[#040404] px-2 text-sm text-[#ede9e9] transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-[#ede9e9] peer-placeholder-shown:top-3 peer-focus:-top-2 peer-focus:text-sm peer-focus:text-[#ede9e9]">Email Address</label>
                </div>

                <!-- Message Field -->
                <div class="relative">
                    <textarea id="message" rows="5" class="w-full px-5 py-3 bg-[#040404] border border-[#da100a] rounded-xl focus:ring-4 focus:ring-[#da100a] focus:border-[#da100a] transition-all duration-300 placeholder-transparent peer" placeholder="Write your message here..."></textarea>
                    <label for="message" class="absolute left-5 -top-2 bg-[#040404] px-2 text-sm text-[#ede9e9] transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-[#ede9e9] peer-placeholder-shown:top-3 peer-focus:-top-2 peer-focus:text-sm peer-focus:text-[#ede9e9]">Your Message</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-[#da100a] text-[#ede9e9] font-bold py-3 rounded-xl transition-all duration-300 transform hover:bg-[#ede9e9] hover:text-[#040404] hover:scale-105 hover:shadow-lg">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Section 3: Map -->
<section class="py-12 bg-[#040404]">
    <div class="container mx-auto px-4 fade-in">
      <h2 class="text-2xl font-bold text-center mb-8 text-[#ede9e9]">Our Location</h2>
      <div class="bg-[#040404] p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.178509825292!2d55.27218771500919!3d25.19751498389413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sae!4v1646760525018!5m2!1sen!2sae" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
</section>

<!-- Section 4: Contact Information with Image Background -->
<section class="dark-overlay py-12" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/2.jpg'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold text-center mb-8 fade-in text-[#ede9e9]">Contact Information</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Email -->
        <div class="text-center slide-in-left">
          <div class="w-12 h-12 bg-[#da100a] rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-[#ede9e9]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-[#ede9e9]">Email</h3>
          <p class="text-[#ede9e9]">info@renax.com</p>
        </div>
        <!-- Address -->
        <div class="text-center fade-in">
          <div class="w-12 h-12 bg-[#da100a] rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-[#ede9e9]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-[#ede9e9]">Address</h3>
          <p class="text-[#ede9e9]">Dubai, Water Tower, Office 123</p>
        </div>
        <!-- Phone -->
        <div class="text-center slide-in-right">
          <div class="w-12 h-12 bg-[#da100a] rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-[#ede9e9]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-[#ede9e9]">Phone</h3>
          <p class="text-[#ede9e9]">+971 52-333-4444</p>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>