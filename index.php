<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PetCare - Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

</head>
<body>

  <!-- Header -->
  <header>
    <nav class="navbar">
      <h2 class="logo">🐾 PetCare</h2>
      <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="hero">
    <div class="hero-content">
      <h1>Welcome to PetCare</h1>
      <p>Your pet’s health is our priority</p>
      <a href="#contact" class="btn">Book Appointment</a>
    </div>
  </section>

  <!-- About Us -->
  <section id="about">
    <h2>About Us</h2>
    <p>We provide professional care and love for your pets. Whether it's a check-up or grooming, our team is here to help!</p>
  </section>

  <!-- Gallery Section -->
  <section id="gallery">
  <h2>Pet Gallery</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/pet.jpg" alt="Pet 1"></div>
      <div class="swiper-slide"><img src="images/pet1.jpg" alt="Pet 2"></div>
      <div class="swiper-slide"><img src="images/pet2.jpg" alt="Pet 3"></div>
      <div class="swiper-slide"><img src="images/pet3.jpg" alt="Pet 4"></div>
      <div class="swiper-slide"><img src="images/pet4.jpg" alt="Pet 5"></div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>


  <!-- Contact Section -->
  <section id="contact">
    <h2>Contact Us</h2>
    <form action="contact_process.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
        </form>
        <a href="tel:+753036970" class="call-button">📞 Call for Appointment</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 PetCare. All rights reserved.</p>
  </footer>

  <!-- WhatsApp Floating Icon -->
  <a href="https://wa.me/919999999999" class="whatsapp-float" target="_blank">
    <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp Chat">
  </a>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
