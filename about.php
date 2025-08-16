<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - JMTC Group</title>
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

    section {
      padding: 70px 0;
      text-align: center;
    }

    h2 {
      font-size: 36px;
      color: #5a189a;
      margin-bottom: 15px;
    }

    p {
      font-size: 18px;
      color: #444;
      max-width: 800px;
      margin: auto;
      line-height: 1.7;
    }

    /* Top Gallery Section */
    .top-gallery {
      background-color: #f3e8ff;
      padding: 60px 0 30px;
    }

    .top-gallery h2 {
      margin-bottom: 30px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .gallery img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 14px rgba(0,0,0,0.07);
      transition: 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.03);
    }

    .highlight {
      color: #9d4edd;
      font-weight: 600;
    }

    .values {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
      justify-content: center;
      margin-top: 40px;
    }

    .value-box {
      background-color: #fff;
      padding: 30px;
      width: 280px;
      border-radius: 14px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
      transition: 0.3s ease;
    }

    .value-box:hover {
      transform: translateY(-8px);
    }

    .team-section {
      background-color: #fff0f5;
    }

    .team-members {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
      justify-content: center;
      margin-top: 40px;
    }

    .member {
      background-color: #fff;
      width: 250px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 6px 14px rgba(0,0,0,0.05);
      transition: 0.3s ease;
    }

    .member:hover {
      transform: translateY(-6px);
    }

    .member img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .member h4 {
      color: #5a189a;
      margin-bottom: 5px;
    }

    .member p {
      font-size: 14px;
      color: #666;
    }

    footer {
      background-color: #fff;
      color: #555;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
      border-top: 1px solid #eee;
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

      .value-box,
      .member {
        width: 90%;
      }

      h2 {
        font-size: 28px;
      }

      p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <div class="container header-container">
      <h1 class="logo">JMTC GROUP</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="quote.php">Get Quote</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Top Gallery -->
  <section class="top-gallery">
    <div class="container">
      <h2>Interior & Exterior Designs</h2>
      <div class="gallery">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="Interior 1">
        <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c" alt="Interior 2">
        <img src="data:image/jpeg;base64,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" alt="Exterior 1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfyaEhZd-5NYG82_CDXlbHsmkh9METziDodw&s" alt="Exterior 2">
      </div>
    </div>
  </section>

  <!-- Company Intro -->
  <section>
    <div class="container">
      <h2>Who We Are</h2>
      <p>JMTC Group is a family-owned business committed to creating beautiful and functional spaces through <span class="highlight">interior design</span> and <span class="highlight">construction excellence</span>. With years of experience, our mission is to deliver unmatched quality and lasting value in every project.</p>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section>
    <div class="container">
      <h2>Our Mission & Vision</h2>
      <div class="values">
        <div class="value-box">
          <h3>Mission</h3>
          <p>To provide reliable, innovative, and elegant solutions in design and construction that exceed client expectations.</p>
        </div>
        <div class="value-box">
          <h3>Vision</h3>
          <p>To become a recognized leader in the interior and construction industry with a legacy of trust, design, and quality.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section">
    <div class="container">
      <h2>Meet Our Team</h2>
      <div class="team-members">
        <div class="member">
          <img src="https://via.placeholder.com/250x160" alt="Team Member">
          <h4>Sundar lal verma</h4>
          <p>Founder & Lead Designer</p>
        </div>
        <div class="member">
          <img src="https://via.placeholder.com/250x160" alt="Team Member">
          <h4>Girraj kumar verma</h4>
          <p>Project Manager</p>
        </div>
        <div class="member">
          <img src="jaisingh.jpg" alt="Team Member">
          <h4>Jaisingh Gahlot</h4>
          <p>Architect & Engineer</p>
        </div>
      </div>
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
