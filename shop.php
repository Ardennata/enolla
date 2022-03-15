<?php 

session_start();

if(!isset($_SESSION["user_id"])) {
  header("Location: login.php");
}

echo $_SESSION["user_id"];

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enolla</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navbar -->
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <div class="logo_name">
            <img src="img/enolla fix.png" />
          </div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav_list">
        <li>
          <!-- <form action=""> -->
          <i class="bx bx-search"></i>
          <!-- <a href="#">
              <input type="text" placeholder="Search..." />
            </a>
            <spans class="tooltip">Search</spans>
          </form> -->
        </li>
        <li>
          <a href="#">
            <i class="bx bx-shopping-bag"></i>
            <spans class="links_name">Shop</spans>
          </a>
          <!-- <spans class="tooltip">Dashboard</spans> -->
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cart"></i>
            <span id="cart-count-info">0</span>
            <spans class="links_name">Order</spans>
          </a>
          <!-- <spans class="tooltip">Order</spans> -->
        </li>
      </ul>
      <div class="profile_content">
        <div class="profile">
          <a href="logout.php">
            <i class="bx bx-log-out" id="logout"></i>
            <spans class="links_name">Logout</spans>
          </a>
        </div>
      </div>
    </div>
    <!-- Navbar -->

    <!-- Konten -->
    <div class="content">
      <div class="konten">
        <div class="Company">Enolla Official</div>
        <!-- Promo -->
        <div class="promo">
          <div class="slider">
            <div class="slides">
              <input type="radio" name="radio-btn" id="radio1" />
              <input type="radio" name="radio-btn" id="radio2" />
              <input type="radio" name="radio-btn" id="radio3" />
              <input type="radio" name="radio-btn" id="radio4" />
              <div class="slide first">
                <img src="img/fashion.jpg" alt="" />
              </div>
              <div class="slide">
                <img src="img/fashion.jpg" alt="" />
              </div>
              <div class="slide">
                <img src="img/fashion.jpg" alt="" />
              </div>
              <div class="slide">
                <img src="img/fashion.jpg" alt="" />
              </div>
              <!-- automatic navigation start -->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
              </div>
              <!-- automatic navigation end -->
            </div>
            <!-- manual navigation start -->
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- manual navigation start -->
          </div>
        </div>
        <!-- Promo -->

        <!-- Shop -->
        <section class="category">
          <h1 class="heading">SHOP</h1>
          <div class="box-container">
            
            <!-- <div class="box">
              <div class="gambar">
                <img src="img/fashion.jpg" />
              </div>
              <a href="#"><h1>HAHAHAHAHAHA</h1></a>
            </div>
            <div class="box">
              <div class="gambar">
                <img src="img/fashion.jpg" />
              </div>
              <a href="#"><h1>HAHAHAHAHAHA</h1></a>
            </div>
            <div class="box">
              <div class="gambar">
                <img src="img/fashion.jpg" />
              </div>
              <a href="#"><h1>HAHAHAHAHAHA</h1></a>
            </div>
            <div class="box">
              <div class="gambar">
                <img src="img/fashion.jpg" />
              </div>
              <a href="#"><h1>HAHAHAHAHAHA</h1></a>
            </div>
            <div class="box">
              <div class="gambar">
                <img src="img/fashion.jpg" />
              </div>
              <a href="#"><h1>HAHAHAHAHAHA</h1></a>
            </div>
            <div class="box">
              <div class="gambar">
                <img src="img/fashion.jpg" />
              </div>
              <a href="#"><h1>HAHAHAHAHAHA</h1></a>
            </div> -->
          </div>
        </section>
        <!-- Shop -->
      </div>
    </div>
    <!-- Konten -->
    <script src="js/style.js"></script>
  </body>
</html>
