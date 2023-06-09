<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link href="style-about-us.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header class="main-header" id="main-header-id">
    <div class="wrapper">
      <div class="sidebar">
        <div class="profile">
          <img src="https://media.tenor.com/NICoVNbKVGYAAAAM/profile-picture.gif" alt="Profile Picture">
          <h3>Olajide Olayinka Williams Olatunji</h3>
        </div>
        <ul>
          <li>
            <a href="index.php">
              <span class="item">Home</span>
            </a>
          </li>
          <li>
            <a href="list-of-categories.php">
              <span class="item">Categories</span>
            </a>
          </li>
          <li>
            <a href="about-us.php" class="active">
              <span class="item">About Us</span>
            </a>
          </li>
          <li>
            <a href="login.php">
              <span class="item">Log In</span>
            </a>
          </li>
          <li>
            <a href="signup.php">
              <span class="item"><b>Sign Up</b></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="section">
        <div class="top-navbar">
          <div class="hamburger">
            <a class="hamburger-icon" style="cursor: pointer">
              <img src="_Pictures/hamburger-menu.png" style="height: 20px">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-header-title">
      <a href="index.html" style="text-decoration: none; color: black">
        <h2>Tasty Trove</h2>
      </a>
    </div>
    <div class="main-header-search">
      <form class="search-bar" action="/search">
        <input name="given-search-input" type="text" required="required" placeholder="Search...">
        <a href="index.html">
          <img src="_Pictures/search-icon.png" alt="search-icon">
        </a>
      </form>
    </div>
  </header>
  <div class="content">
    <div class="content-main-container">
      <div class="content-categories-admin-list">
        <div class="admin">
          <img src="_Pictures/Steven.jpg" alt="Steven">
        </div>
        <div class="admin">
          <img src="_Pictures/Cedric2.png" alt="Cedric">
        </div>
        <div class="admin">
          <img src="_Pictures/rhenz.jpg" alt="Rhenz">
        </div>
        <div class="admin">
          <img src="_Pictures/Weljohn.jpg" alt="Weljohn">
        </div>
      </div>
    </div>
    <div class="spacing">
      <div class="paragraph">
        <h3>About Us</h3>
        <p>Hi! We are first-year Computer Science students from the University of San Carlos and here is our website.
          This
          website was created in partial fulfillment of our Web Development 1 class and we hope to improve it further
          down
          the line. Thank you for visiting</p>
      </div>
      <div class="paragraph">
        <h3>Purpose</h3>
        <p>Our website aims to provide food recipes for anyone who needs them, while also allowing them to post/upload
          their own unique recipes for popular dishes. (sitename) enables its users to view and use for themselves, any
          recipe they may come
          across regardless of their skill level when it comes to cooking. “I feel a recipe is only a theme which an
          intelligent cook can play each time with a variation.” — Madam Benoit </p>
      </div>
    </div>
  </div>
  <footer class="main-footer">
    <div class="main-footer-container">
      <div class="main-footer-title">
        <h2>Tasty Trove</h2>
        <p>Bringing flavors to your kitchen, one recipe at a time.</p>
      </div>
      <div class="main-footer-links">
        <p><b>Social Media</b></p>
        <div class="social-media">
          <a href="facebook.com" target="_blank">Facebook</a>
          <a href="twitter.com" target="_blank">Twitter</a>
          <a href="instagram.com" target="_blank">Instagram</a>
        </div>
      </div>
      <div class="main-footer-email">
        <p><b>Email</b></p>
        <div class="main-footer-email-search">
          <form class="search-bar" action="/search">
            <input name="given-search-input" type="text" required="required" placeholder="Search...">
            <a href="index.html">
              <img src="_Pictures/search-icon.png" alt="search-icon">
            </a>
          </form>
        </div>
        <p>Sign up to get updated to our latest recipes!</p>
      </div>
    </div>
  </footer>
  <script src="app.js"></script>
</body>

</html>