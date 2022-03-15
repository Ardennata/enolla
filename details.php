<?php 
session_start();

include 'config.php';

if(!isset($_SESSION["user_id"])) {
  header("Location: login.php");
}

?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enolla</title>
    <link rel="stylesheet" href="css/details.css" />
    <script src="https://kit.fontawesome.com/3c84978b9c.js" crossorigin="anonymous"></script>
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
        <div class="small-container single-product">
          <div class="row">
            <div class="col-2">
              <img src="img/fashion.jpg" width="100%" id="ProductImg" />
              <div class="small-img-row">
                <div class="small-img-col">
                  <img src="img/fashion.jpg" width="100%" class="small-img" />
                </div>
                <div class="small-img-col">
                  <img src="img/enolla fix.png" width="100%" class="small-img" />
                </div>
                <div class="small-img-col">
                  <img src="img/1363ee088e197f922447bb990a3b27d6.jfif" width="100%" class="small-img" />
                </div>
                <div class="small-img-col">
                  <img src="img/f4118a6d-ffcf-4e2e-b0ac-f048d3f3e704.jpg" width="100%" class="small-img" />
                </div>
              </div>
            </div>
            <div class="col-2">
              <h1>Baju Perempuan</h1>
              <h4>Rp 150.000</h4>
              <select>
                <option>Select Size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
              </select>
              <input type="number" value="1" />
              <a href="#" class="btn">Add to cart</a>
              <h3>Product Details</i></h3>
              <br />
              <p>baju ini sangat nyaman dipakai dan bagus pokoknya bagus banget dan cocok sekali untuk kalian yang suka barang barang branded karena designnya yang sangat elit</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Konten -->

    <script src="js/produk.js"></script>
  </body>
</html>
