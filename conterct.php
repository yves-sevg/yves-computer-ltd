<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YVES computer ltd</title>
  <style>
    /* Header */
  header {
    display: flex;
    align-items: center;
    background-color: #004080;
    color: white;
    padding: 20px;
    height: 2cm;
  }
  
  .logo {
    font-size: 2px;
    font-weight: bold;
  }
  
  .banner {
    font-size: 20px;
    text-align: center;
    flex-grow: 1;
  }
  
  /* Navigation Bar */
  nav {
    background-color: #333;
  }
  
  nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
  }
  
  nav ul li {
    margin: 0 15px;
  }
  
  nav ul li a {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    display: block;
  }
  
  nav ul li a:hover {
    background-color: #575757;
  }
  
  /* Main Container */
  .container {
    display: flex;
    padding: 20px;
  }
  
  /* Left - Main Content */
  .main-content {
    flex: 3;
    padding-right: 20px;
  }
  
  /* Right - Sidebar */
  .sidebar {
    flex: 1;
    background-color: #fff;
    padding: 10px;
    border-left: 1px solid #ccc;
  }
  
  .sidebar h3 {
    margin-bottom: 10px;
  }
  
  .sidebar img {
    width: 100%;
    margin-bottom: 10px;
  }
  
  /* Footer */
  footer {
    background-color: #004080;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 20px;
  }

  .slider {
    position: relative;
    width: 100%;
    max-width: 600px;
    height: 300px;
    overflow: hidden;
    margin-top: 20px;
  }
  
  .slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }
  
  .slide.active {
    opacity: 1;
    z-index: 1;
  }
  .logo{
    background-color: #ccc;
    height: 10%;
    width: 10%;
    margin-top: 10px;
    margin-bottom: 10px;
  }


  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div >
      <img src="YVES LOG-01.png" class="logo">
    </div>
    <center>
  <div class="banner">
      <h1>Best Deals on Laptops & PCs</h1>
  </div>
</center>
  </header>

  <!-- Navigation Bar -->
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="abaut us.php">About Us</a></li>
      <li><a href="#">Our Services</a></li>
      <li><a href="conterct.php">Contact Us</a></li>
      li><a href="login.php">shop naw.html</a></li>
      <button onclick="window.location.href='shop now.php'">Shop Now</button>
    </ul>
  </nav>

  <!-- Main Content Area -->
  <div class="container">
    <!-- Left Main Content -->
    <div class="main-content">
      <h2>Best Deals on Laptops & PCs</h2>
      <p>Upgrade your tech with high-performance computers at
        unbeatable prices. Limited time offer!</p>

    <h1>contact</h1>
    <label>email:niyonzimayves473@gmail.com</label><br><br>
    <label>phone number:0795414683/0726880423</label>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 YVES computer ltd. All rights reserved.
  </footer>


  <script>
  </script>
  
</body>
</html>