<?php
include('config.php');

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = "user";
    $status = "active";

    if ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fullname, email, phone, password, role, status, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $fullname, $email, $phone, $hashed_password, $role, $status);

        if ($stmt->execute()) {
            $success = "✅ Registration successful. Redirecting to login...";
            header("refresh:2; url=login.php");
        } else {
            $error = "❌ Something went wrong. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JMTC Group - Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: #f3e8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(128, 0, 128, 0.2);
      max-width: 400px;
      width: 100%;
    }

    .form-container h2 {
      text-align: center;
      color: #7e22ce;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 2px solid #d8b4fe;
      border-radius: 10px;
      outline: none;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #9333ea;
    }

    .form-group button {
      width: 100%;
      padding: 12px;
      background: #9333ea;
      color: white;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .form-group button:hover {
      background: #7e22ce;
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .login-link a {
      color: #7e22ce;
      text-decoration: none;
      font-weight: 600;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Create an Account</h2>
    <form action="register.php" method="POST">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" id="fullname" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </div>

      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
      </div>

      <div class="form-group">
        <button type="submit">Register</button>
      </div>

      <div class="login-link">
        Already have an account? <a href="login.php">Login here</a>
      </div>
    </form>
  </div>

</body>
</html>
