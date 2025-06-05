<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Warehouse</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: white;
      padding: 20px;
    }

    header nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo h1 {
      margin: 0;
    }

    .nav-links {
      list-style-type: none;
      display: flex;
      gap: 20px;
    }

    .nav-links li a {
      text-decoration: none;
      color: white;
      font-size: 16px;
    }

    .auth-buttons button {
      margin-left: 10px;
      padding: 10px 20px;
      font-size: 14px;
      cursor: pointer;
    }

    .auth-buttons .login-btn a,
    .auth-buttons .signup-btn a {
      text-decoration: none;
      color: white;
    }

    .auth-buttons .login-btn {
      background-color: #555;
      border: none;
    }

    .auth-buttons .signup-btn {
      background-color: #28a745;
      border: none;
    }

    .auth-buttons button:hover {
      opacity: 0.8;
    }

    section {
      padding: 40px 20px;
      text-align: center;
    }

    section h2 {
      margin-bottom: 10px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1>Beauty Warehouse</h1>
      </div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="auth-buttons">
        <button class="login-btn"><a href="login_validation.php">Login</a></button>
        <button class="signup-btn"><a href="create_account.php">Sign Up</a></button>
      </div>
    </nav>
  </header>

  <section id="home">
    <h2>Welcome to Beauty Warehouse!</h2>
    <p>Your one-stop shop for all beauty products.</p>
  </section>

  <section id="products">
    <h2>Our Products</h2>
    <p>Explore our wide range of beauty products.</p>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p>Learn more about our mission and values.</p>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <p>Get in touch for more information.</p>
  </section>

  <footer>
    <p>&copy; 2025 Beauty Warehouse</p>
  </footer>
</body>
</html>
