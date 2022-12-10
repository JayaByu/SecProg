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
        <a class="logo" href="home.php" >Yokosso!</a>
            <ul>
                <li><a  class="active" href="home.php">Home</a></li>
                <li><a  href="category">Category</a></li>
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

    <div class="badan">
      <div class="background">
    </div>
  </div>

      <div class="main">
        <div class="contet">
          <div class="text">
            <h2>Aomori Item<span> .Store</span></h2>
            <p>We have a wide collection of items that make you feel happy.</p>
            <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
            ?>
            <a href="order.php" class="buton">Order Now</a>
            <?php
                } else {
            ?>
            <a href="signup.php" onclick="alert('Login Required');" class="buton">Order Now</a>
            <?php
            }
            ?>
          </div>

          <div class="slider">
          <div class="slides active">
            <img src="gambar/apples-g4a09e7525_1920.jpg">
          </div>
          <div class="slides">
            <img src="gambar/chair-gc20c887ab_1920.jpg">
          </div>
          <div class="slides">
            <img src="gambar/coupon-g166826455_1280.png">
          </div>
          <div class="slides">
            <img src="gambar/food-gafee750f5_1920.jpg">
          </div>
        </div>
        </div>

        <div class="bot">
          <ul class="dev">
            <li><a href="https://github.com/JayaByu"><ion-icon name="logo-github"></ion-icon></a></li>
          </ul>
          <div class="butslide">
              <p>High Quality</p>
              <span class="pre"><ion-icon name="arrow-round-back"></ion-icon></span>
              <span class="nxt"><ion-icon name="arrow-round-forward"></ion-icon></span>            
          </div>
        </div>
      </div>
      
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      <script>
        const slides = document.querySelectorAll('.slides');
        const pre = document.querySelector('.pre');
        const nxt = document.querySelector('.nxt');
        i = 0;
        function ActiveSlide(n) {
          for(slide of slides)
          slide.classList.remove('active')
          slides[n].classList.add('active')
        }

        nxt.addEventListener('click',function(){
          if(i == slides.length - 1){
            i = 0;
            ActiveSlide(i);
          }else{
            i++;
            ActiveSlide(i);
          }
        })

        pre.addEventListener('click',function(){
          if(i == 0){
            i = slides.length - 1;
            ActiveSlide(i);
          }else{
            i--;
            ActiveSlide(i);
          }
        })

      </script>
</body>
</html>
