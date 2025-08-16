<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Get a Quote | JMTC Group</title>
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

    .quote-form {
      background: #fff;
      padding: 40px;
      max-width: 700px;
      margin: 60px auto;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .quote-form h3 {
      margin-bottom: 25px;
      color: #7b2cbf;
      text-align: center;
    }

    .quote-form input,
    .quote-form textarea,
    .quote-form select {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
    }

    .quote-form button {
      display: block;
      margin: auto;
      padding: 12px 30px;
      background-color: #9d4edd;
      color: white;
      border: none;
      border-radius: 30px;
      font-size: 16px;
      cursor: pointer;
    }

    .quote-form button:hover {
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
  </style>
</head>
<body>
  <header>
    <div class="container header-container">
      <h1 class="logo">JMTC GROUP</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="active" href="quote.php">Get Quote</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h2>Request a Free Quote</h2>
      <p>Tell us about your interior or construction project. We'll get back with a customized quote.</p>
    </div>
  </section>

  <section class="quote-form container">
    <h3>Quote Form</h3>
    <form method="POST" action="submit_quote.php">
      <input type="text" name="full_name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <select name="service_type" required>
        <option value="">Select Service Type</option>
        <option value="Interior Designing">Interior Designing</option>
        <option value="Construction">Construction</option>
        <option value="Renovation">Renovation</option>
        <option value="Other">Other</option>
      </select>
      <textarea name="project_details" rows="5" placeholder="Describe your project..." required></textarea>
      <button type="submit">Submit Quote Request</button>
    </form>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 JMTC Group | All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
