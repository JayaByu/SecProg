<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylestrview.css">
    <link rel="icon" type="image/png" href="gambar/logo.png">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
    <title>Street View</title>
</head>
<body>
    <div class="header" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a class="header-logo" href="index.html" ><img src="gambar/logox.png"  ></a>
            <ul>
                <li><a  href="home">HOME</a></li>
                <li><a  class="active" href="streetview">STREET VIEW</a></li>
                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <li><a href="order">ORDER</a></li>
                
                <?php
                } else {
                  ?>
                  <li><a href="signin" onclick="alert('Login Required');">ORDER</a></li>
                <?php
                }
                ?>
                <li><a  href="gallery">GALLERY</a></li>
                <li><a  href="contact">CONTACT US</a></li>

               <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <a href="logout.php" title="logout"><i class="fas fa-sign-out-alt"></i></a>
                
                <?php
                } else {
                  ?>
                  <a href="signin.php" title="login"><i class="fas fa-sign-in-alt"></i></a>
                <?php
                }
                ?>
            </ul>
    </div>

    <div class="strview">
        <p><iframe src="https://www.google.com/maps/embed?pb=!4v1621068280148!6m8!1m7!1skm8h-6DI8z_1jEK4g_YP7Q!2m2!1d-7.88262348414247!2d112.5146048363908!3f260.5593733197204!4f5.341224019304292!5f0.7820865974627469"  style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>

    </div>
</body>
</html>