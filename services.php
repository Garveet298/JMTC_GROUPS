<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Services | JMTC Group</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

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
      padding: 80px 20px;
    }

    .hero h2 {
      font-size: 38px;
      font-weight: 600;
    }

    .hero p {
      font-size: 18px;
      margin-top: 10px;
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

    .service-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }

    .service-card {
      background: #fff;
      width: 280px;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
      transition: 0.4s ease;
      text-align: left;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 20px rgba(0,0,0,0.1);
    }

    .service-card h4 {
      color: #7b2cbf;
      margin-bottom: 10px;
    }

    .service-card p {
      font-size: 15px;
      color: #555;
    }

    .btn {
      padding: 12px 30px;
      background-color: #9d4edd;
      color: white;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      font-size: 16px;
      margin-top: 30px;
      display: inline-block;
      transition: 0.3s ease;
    }

    .btn:hover {
      background-color: #7b2cbf;
    }

    footer {
      background-color: #fff;
      color: #555;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
      border-top: 1px solid #eee;
      margin-top: 60px;
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

      .service-card {
        width: 90%;
      }

      .hero h2 {
        font-size: 28px;
      }

      .hero p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <!-- Header/Navbar -->
  <header>
    <div class="container header-container">
      <h1 class="logo">JMTC GROUP</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php" class="active">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="quote.php">Get Quote</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Our Services</h2>
      <p>Explore the wide range of design and construction solutions we offer to make your spaces extraordinary.</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section">
    <div class="container">
      <h3>What We Offer</h3>
      <div class="service-list">
        <div class="service-card">
          <h4>Interior Designing</h4>
          <p>Modern & customized interior layouts for homes, offices, showrooms, and commercial spaces.</p>
        </div>
        <div class="service-card">
          <h4>Architectural Planning</h4>
          <p>Creative and technical planning with 2D & 3D drawings for a flawless execution plan.</p>
        </div>
        <div class="service-card">
          <h4>Construction Projects</h4>
          <p>Residential and commercial construction with high-quality material & labor assurance.</p>
        </div>
        <div class="service-card">
          <h4>Renovation & Remodeling</h4>
          <p>Smart transformation of outdated spaces with modern design and engineering standards.</p>
        </div>
        <div class="service-card">
          <h4>Modular Kitchens</h4>
          <p>Stylish, functional, and space-efficient modular kitchen solutions with modern fittings.</p>
        </div>
        <div class="service-card">
          <h4>False Ceiling & Lighting</h4>
          <p>Elegant false ceiling and lighting designs that enhance the mood and luxury of your rooms.</p>
        </div>
      </div>

      <a href="quote.php" class="btn">Book a Free Consultation</a>
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
