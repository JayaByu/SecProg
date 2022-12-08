<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aomori</title>
    <link rel="shortcut icon" href="gambar/icons8-leaf-64.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
</head>
<body>
<div class="header" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a class="logo" href="home" >Yokosso!</a>
            <ul>
                <li><a  class="active" href="home.php">Home</a></li>
                <li><a  href="category.php">Category</a></li>
                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <li><a href="order">Order</a></li>
                
                <?php
                } else {
                  ?>
                  <li><a href="signup.php" onclick="alert('Login Required');">Order</a></li>
                <?php
                }
                ?>
                <li><a  href="contact">Contact Us</a></li>

                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                
                <?php
                } else {
                  ?>
                  <a href="signup.php" title="login"><i class="fas fa-sign-in-alt"></i></a>
                <?php
                }
                ?>
            </ul>
    </div>
    
        <div class="factitle" id="facilities">
            <h1>Category</h1>
        </div>

        <div class="facility">
            

            <a href="buah.php" target="_blank" class="item item0">
              
              
              <div class="btn">
                <h1>BUAH</h1>
              </div>
            </a>
            <a href="makanan.php" target="_blank" class="item item1">
              
              <div class="btn">
                <h1>MAKANAN</h1>
              </div>
            </a>
            <a href="flyingfox.php" target="_blank" class="item item2">
              
              
              <div class="btn">
                  <h1>PERALATAN ELEKTRONIK</h1>
              </div>
            </a>
        
            <a href="waterpark.php" target="_blank" class="item item3">
              
              
              <div class="btn">
                <h1>PERALATAN RUMAH TANGGA</h1>
              </div>
            </a>
            <a href="wargame.php" target="_blank" class="item item4">
              
              
              <div class="btn">
                <h1>HIASAN RUMAH</h1>
              </div>
            </a>
            <a href="playground.php" target="_blank" class="item item5">
              
              
              <div class="btn">
                  <h1>ALAT KEBERSIHAN</h1>
              </div>
            </a>
            <a href="hotel.php" target="_blank" class="item item6">
              
              
              <div class="btn">
                <h1>AKSESORIS KENDARAAN</h1>
              </div>
            </a>
            <a href="food.php" target="_blank" class="item item7">
              
              
              <div class="btn">
                <h1>PAKAIAN</h1>
              </div>
            </a>
            <a href="kereta.php" target="_blank" class="item item8">
              
              
              <div class="btn">
                  <h1>COFFEE</h1>
              </div>
            </a>
        
        </div>

        
    </div>
    <div class="footer">
        <div class="footer-logo">AOMORI</div>
        <div class="alamat"></div>

    </div>
    <script type="text/javascript">
        var lastScrollTop = 0;
            navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function(){
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.style.top ="-60px";
            } else {
                navbar.style.top="0";
            }
            lastScrollTop = scrollTop;
        })    
    </script>
    <script src="js/herojs.js"></script>

</body>
</html>
