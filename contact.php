<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | JMTC Group</title>
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

    .contact-section {
      padding: 70px 0;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
      align-items: flex-start;
      flex-direction: row-reverse;
    }

    .contact-form {
      flex: 1;
      min-width: 320px;
      max-width: 500px;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .contact-form h3 {
      margin-bottom: 20px;
      color: #7b2cbf;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
    }

    .contact-form button {
      padding: 12px 30px;
      background-color: #9d4edd;
      color: white;
      border: none;
      border-radius: 30px;
      font-size: 16px;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #7b2cbf;
    }

    .map {
      flex: 1;
      min-width: 300px;
      border-radius: 12px;
      overflow: hidden;
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

      .contact-section {
        flex-direction: column;
      }
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
          <li><a href="contact.php" class="active">Contact</a></li>
          <li><a href="quote.php">Get Quote</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h2>Contact Us</h2>
      <p>We'd love to hear about your project. Let’s start the conversation today!</p>
    </div>
  </section>

  <section class="contact-section container">
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.9618470983966!2d75.7873!3d26.9124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDU0JzQ0LjYiTiA3NcKwNDcnMTQuOCJF!5e0!3m2!1sen!2sin!4v1634123456789"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
      </iframe>
    </div>
    <div class="contact-form">
      <h3>Send a Message</h3>
      <form action="submit_contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 JMTC Group | All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
