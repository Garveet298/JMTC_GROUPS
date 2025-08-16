<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | JMTC Group</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(to right, #e0c3fc, #8ec5fc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #6c4ba0;
    }

    .login-box label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    .login-box input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 16px;
      transition: 0.3s ease;
    }

    .login-box input:focus {
      border-color: #a17df7;
      outline: none;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background-color: #a17df7;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .login-box button:hover {
      background-color: #8c6de0;
    }

    .login-box .register-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .login-box .register-link a {
      color: #6c4ba0;
      text-decoration: none;
      font-weight: 600;
    }

    .login-box .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Login to JMTC Group</h2>
    <form action="login_process.php" method="POST">
      <label for="email">Email</label>
      <input type="email" name="email" required placeholder="Enter your email">

      <label for="password">Password</label>
      <input type="password" name="password" required placeholder="Enter your password">

      <button type="submit">Login</button>
    </form>

    <div class="register-link">
      Don’t have an account? <a href="register.php">Register here</a>
    </div>
  </div>

</body>
</html>
