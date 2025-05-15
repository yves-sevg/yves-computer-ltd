
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Classic Hotel</title>
  <link rel="stylesheet" href="styles.css">
  <style>
     .form-control{
        margin-bottom:20px;
     }
     .register-form{
        margin-top:30px;
     }
     .submit-btn{
    padding:5px 10px;
    background-color: #0d3256;
    color: #fff; 
    border-radius: 10px;
 }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">Classic</div>
    <div class="banner">Welcome to Classic Hotel</div>
  </header>

  <!-- Navigation Bar -->
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Our Services</a></li>
      <li><a href="conterct.html">Contact Us</a></li>
      
      <li><a href="register.php">Sign Up</a></li>
    </ul>
  </nav>

  <!-- Main Content Area -->
  <div class="container">
    <!-- Left Main Content -->
    <div class="main-content">
      <h2>Login</h2>
      <!-- Register Form -->
      <div class="register-form">
          <form action="insert.php"  method="post" >
            <div class="form-control">
                <label>Username</label>
                <input type="text" name="username" />
            </div> 
            <div class="form-control"> 
                <label>Password</label>
                <input type="password" name="password" />
            </div> 
            <div class="form-control">
                <button class="submit-btn" type="submit" name="submit">Sign In</button>
            </div>              
          </form>    
      </div>

    </div>

    <!-- Right Sidebar -->

    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Classic Hotel. All rights reserved.
  </footer>


  <script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
  
    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
          slide.classList.add('active');
        }
      });
    }
  
    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }
  
    setInterval(nextSlide, 3000); // Change slide every 3 seconds
  </script>
  
</body>
</html>