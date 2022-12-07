<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/stylegallery.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
    <link rel="icon" type="image/png" href="gambar/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kusuma Agrowisata</title>
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
                <li><a  href="streetview">STREET VIEW</a></li>
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
                <li><a  class="active" href="gallery">GALLERY</a></li>
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

    <div class="divider">
        <h1>OUR GALLERY</h1>
    </div>

    <div class="gridsection">
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery4.jpg" data-lightbox="ourgallery"><img src="gambar/gallery4.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery19.jpg" data-lightbox="ourgallery"><img src="gambar/gallery19.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery2.jpg" data-lightbox="ourgallery"><img src="gambar/gallery2.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery6.jpg" data-lightbox="ourgallery"><img src="gambar/gallery6.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery12.jpg" data-lightbox="ourgallery"><img src="gambar/gallery12.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery13.jpg" data-lightbox="ourgallery"><img src="gambar/gallery13.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery16.jpg" data-lightbox="ourgallery"><img src="gambar/gallery16.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/hotel.jpg" data-lightbox="ourgallery"><img src="gambar/hotel.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        
    </div>

    <div class="gridsection2">
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery1.jpg" data-lightbox="ourgallery"><img src="gambar/gallery1.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery5.jpg" data-lightbox="ourgallery"><img src="gambar/gallery5.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery11.jpg" data-lightbox="ourgallery"><img src="gambar/gallery11.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery3.jpg" data-lightbox="ourgallery"><img src="gambar/gallery3.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery20.jpg" data-lightbox="ourgallery"><img src="gambar/gallery20.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery10.jpg" data-lightbox="ourgallery"><img src="gambar/gallery10.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery9.jpg" data-lightbox="ourgallery"><img src="gambar/gallery9.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        <div class="grid">
            <div class="gridimg">
                <a href="gambar/gallery17.jpg" data-lightbox="ourgallery"><img src="gambar/gallery17.jpg"></a>
            </div>
            <div class="overly">
                <h2>GALLERYXX</h2>
            </div>
        </div>
        
    </div>

    <div class="titlevidx">
        <h1>VIDEO</h1>
    </div>

    <div class="vidx">
        <iframe width="480" height="300" src="https://www.youtube.com/embed/j9sR1W2goAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="480" height="300" src="https://www.youtube.com/embed/n4J2PMaz1S8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="vidx">
        <iframe width="480" height="300" src="https://www.youtube.com/embed/O4pK3YtiuBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="480" height="300" src="https://www.youtube.com/embed/_22XdVWBx4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="footer">
        <div class="footer-logo">KUSUMA</div>
        <div class="alamat">Kawasan Wisata Kusuma Agro, Jalan Abdul Gani Atas, Ngaglik, Kecamatan Batu, Ngaglik, Batu, Batu City, East Java 65311</div>

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

    <script src="js/lightbox-plus-jquery.min.js"></script>

    
</body>
</html>