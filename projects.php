<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Projects | JMTC Group</title>
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

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .project-card {
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 12px rgba(0,0,0,0.08);
      transition: 0.3s ease;
    }

    .project-card:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 18px rgba(0,0,0,0.1);
    }

    .project-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .project-card h4 {
      padding: 15px;
      font-size: 18px;
      color: #7b2cbf;
      text-align: left;
    }

    .btn {
      padding: 12px 30px;
      background-color: #9d4edd;
      color: white;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      font-size: 16px;
      margin-top: 40px;
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
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php" class="active">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="quote.php">Get Quote</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Our Recent Projects</h2>
      <p>Explore some of our best work in interior design, architecture, and construction.</p>
    </div>
  </section>

  <!-- Project Gallery -->
  <section class="projects-section">
    <div class="container">
      <h3>Featured Projects</h3>
      <div class="projects-grid">
        <div class="project-card">
          <img src="https://i.imgur.com/RX1sR2R.jpg" alt="Luxury Living Room" />
          <h4>Luxury Living Room Design</h4>
        </div>
        <div class="project-card">
          <img src="https://i.imgur.com/WEYHP2v.jpg" alt="Modern Office Space" />
          <h4>Corporate Office Interior</h4>
        </div>
        <div class="project-card">
          <img src="https://i.imgur.com/dpXkJ6O.jpg" alt="Villa Construction" />
          <h4>Residential Villa Construction</h4>
        </div>
        <div class="project-card">
          <img src="https://i.imgur.com/04YICOV.jpg" alt="Retail Showroom" />
          <h4>Retail Showroom Renovation</h4>
        </div>
        <div class="project-card">
          <img src="https://i.imgur.com/z4hXrdP.jpg" alt="Modular Kitchen" />
          <h4>Modular Kitchen Setup</h4>
        </div>
        <div class="project-card">
          <img src="https://i.imgur.com/43TeKlW.jpg" alt="Ceiling Lighting" />
          <h4>False Ceiling & Lighting</h4>
        </div>
      </div>
      <a href="#" class="btn">View More Projects</a>
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
