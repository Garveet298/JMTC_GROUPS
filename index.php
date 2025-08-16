<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JMTC Group - Interior & Construction Experts</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Quicksand', sans-serif;
      background-color: #fef6ff;
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    header {
      background-color: #fff;
      padding: 18px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      color: #7b2cbf;
      font-size: 28px;
      font-weight: 600;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 24px;
    }

    nav ul li a {
      color: #555;
      text-decoration: none;
      font-size: 16px;
      padding: 8px 16px;
      border-radius: 6px;
      transition: 0.3s ease;
    }

    nav ul li a:hover,
    nav ul li a.active {
      background-color: #d0bfff;
      color: #240046;
    }

    .hero {
      background: linear-gradient(to right, #e0aaff, #cdb4db);
      color: #240046;
      text-align: center;
      padding: 100px 20px;
    }

    .hero h2 {
      font-size: 42px;
      font-weight: 600;
    }

    .hero p {
      font-size: 18px;
      margin-top: 10px;
    }

    .btn {
      padding: 12px 30px;
      background-color: #9d4edd;
      color: white;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      font-size: 16px;
      margin-top: 20px;
      display: inline-block;
      transition: 0.3s ease;
    }

    .btn:hover {
      background-color: #7b2cbf;
    }

    .btn-secondary {
      padding: 10px 24px;
      background-color: #f3c4fb;
      color: #240046;
      text-decoration: none;
      border-radius: 8px;
      margin-top: 20px;
      display: inline-block;
    }

    section {
      padding: 70px 0;
      text-align: center;
    }

    h3 {
      font-size: 30px;
      margin-bottom: 20px;
      color: #5a189a;
    }

    .service-cards,
    .reasons {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 35px;
    }

    .card,
    .reason-card {
      background: white;
      padding: 25px;
      width: 280px;
      border-radius: 14px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
      transition: 0.4s ease;
    }

    .card:hover,
    .reason-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 20px rgba(0,0,0,0.1);
    }

    .reason-card {
      border-left: 5px solid #e0aaff;
    }

    .contact-cta {
      background-color: #e0aaff;
      color: #240046;
      padding: 60px 20px;
    }

    .contact-cta h3 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    footer {
      background-color: #fff;
      color: #555;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
      border-top: 1px solid #eee;
    }

    .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25D366;
      color: white;
      border-radius: 50%;
      padding: 16px;
      font-size: 22px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      text-align: center;
    }

    .whatsapp-btn:hover {
      background-color: #1ebd5a;
    }

    @media (max-width: 768px) {
      .header-container {
        flex-direction: column;
        align-items: center;
      }

      nav ul {
        flex-direction: column;
        align-items: center;
      }

      .service-cards,
      .reasons {
        flex-direction: column;
        align-items: center;
      }

      .card,
      .reason-card {
        width: 90%;
      }

      .hero h2 {
        font-size: 30px;
      }

      .hero p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
  <!-- WhatsApp Button -->
  <a href="https://wa.me/9602609423" class="whatsapp-btn" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Header/Navbar -->
  <header>
    <div class="container header-container">
      <h1 class="logo">JMTC GROUP</h1>
      <nav>
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="quote.php">Get Quote</a></li>
          <button>Login</button>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Bringing Your Dream Spaces to Life</h2>
      <p>Top-quality interior design & construction services tailored to your lifestyle.</p>
      <a href="#" class="btn">Explore Our Services</a>
    </div>
  </section>

  <!-- About Preview -->
  <section class="about-preview">
    <div class="container">
      <h3>About JMTC Group</h3>
      <p>We are a trusted family-owned company offering premium interior and construction solutions with years of experience and satisfied clients across the region.</p>
      <a href="about.php" class="btn-secondary">Learn More</a>
    </div>
  </section>

  <!-- Services Preview -->
  <section class="services-preview">
    <div class="container">
      <h3>Our Core Services</h3>
      <div class="service-cards">
        <div class="card">
          <h4>Interior Designing</h4>
          <p>Modern & luxurious interior planning for homes and offices.</p>
        </div>
        <div class="card">
          <h4>Construction Work</h4>
          <p>From foundation to finish — civil & structural work.</p>
        </div>
        <div class="card">
          <h4>Renovation Projects</h4>
          <p>Smart remodeling solutions to upgrade your space.</p>
        </div>
      </div>
      <a href="services.php" class="btn-secondary">See All Services</a>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="why-choose-us">
    <div class="container">
      <h3>Why Choose JMTC Group?</h3>
      <div class="reasons">
        <div class="reason-card">
          <h4>Experienced Team</h4>
          <p>Our team brings years of hands-on experience in both interior design and construction management.</p>
        </div>
        <div class="reason-card">
          <h4>Quality Materials</h4>
          <p>We use only top-grade materials to ensure long-lasting and premium results for every project.</p>
        </div>
        <div class="reason-card">
          <h4>On-Time Delivery</h4>
          <p>Every project is completed within the promised timeline — without compromising on quality.</p>
        </div>
        <div class="reason-card">
          <h4>Budget Friendly</h4>
          <p>Our solutions are crafted to fit your budget without cutting corners on service or design.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="contact-cta">
    <div class="container">
      <h3>Need a Quotation for Your Project?</h3>
      <p>Contact us today and we’ll get back to you with the best plan & pricing.</p>
      <a href="quote.php" class="btn">Request a Quote</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 JMTC Group | All Rights Reserved</p>
    </div>
  </footer>

</body>
</html>
