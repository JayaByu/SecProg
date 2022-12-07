<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kusuma Agrowisata</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" type="image/png" href="gambar/logo.png">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
</head>
<body>
    <div class="header" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a class="header-logo" href="index.html" ><img src="gambar/logox.png"  ></a>
            <ul>
                <li><a  class="active" href="home">HOME</a></li>
                <li><a  href="#facilities">FACILITIES</a></li>
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
                <li><a  href="contact">CONTACT US</a></li>

                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                
                <?php
                } else {
                  ?>
                  <a href="signin.php" title="login"><i class="fas fa-sign-in-alt"></i></a>
                <?php
                }
                ?>
                
                
            </ul>
    </div>

    <div class="hero">
      <div class="myslide">
        <div class="txt">
          <h1>Selamat Datang Di Aomori</h1>
          <a href="#facilities" class="btnhero">EXPLORE</a>
        </div>
        <img src="gambar2/makanan1.jpeg" style="width: 100%; height: 100%;">
      </div>
      
      <div class="myslide">
        <div class="txt">
          <h1> Segala Kebutuhan Yang Anda Inginkan <br> Telah Tersedia</h1>
          <a href="#facilities" class="btnhero">EXPLORE</a>
        </div>
        <img src="gambar3/tv.png" style="width: 100%; height: 100%;">
      </div>
      
      <div class="myslide">
        <div class="txtss">
          <h1>Banyak Kebutuhan Yang Dapat <br> Anda Miliki</h1>
          <a href="#facilities" class="btnhero">EXPLORE</a>
        </div>
        <img src="gambar4/piring.jpg" style="width: 100%; height: 100%;">
      </div>
      
      <div class="myslide">
        <div class="txtsx">
          <h1>Berbagai Fasilitas Yang Dapat Anda Nikmati Juga</h1>
          <a href="#facilities" class="btnhero">EXPLORE</a>
        </div>
        <img src="gambar5/rakdinding.jpg" style="width: 100%; height: 100%;">
      </div>
      
      <div class="myslide">
        <div class="txts">
          <h1>Terima Kasih Untuk Kepercayaan Anda <br> Kepada Aori</h1>
          <a href="#facilities" class="btnhero">EXPLORE</a>
        </div>
        <img src="gambar9/kopitoraja.jpg" style="width: 100%; height: 100%;">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      
    </div>

    <div class="badan">

        <div class="background">
            <h1 id="explore">BACKGROUND</h1>
            <p class="desc">Kusuma Agrowisata berdiri pada 1991 dan merupakan salah satu pioneer Wisata Agro di Indonesia. Kami adalah satu-satunya wisata agro yang berfasilitas hotel. Kami juga menawarkan wisata petik di kebun apel, jeruk, jambu merah, buah naga, strawberry dan sayur hidroponik bebas pestisida.

                Area wisata kami terletak pada ketinggian ± 1000 meter dari permukaan laut dan berudara sejuk. Anda dapat memetik sendiri buah-buah tersebut FRESH langsung dari pohon sambil berkeliling ditemani oleh pemandu kami. Pemandu kami akan menjelaskan tentang budidaya tanaman dan hal-hal yang berkaitan tentang buah-buah tersebut.
                
                Selain wisata petik, kami juga menawarkan wisata outbound dimana Anda dapat bermain War Game di arena airsoft gun kami, mengendarai ATV di mini off-road track kami atau bergelantungan dan meluncur dari menara Flying Fox.
                
                Anda juga dapat berkunjung pada 'specialty' restaurant kami, Apple House dan Strawberry House dimana kami menyajikan menu-menu special kami mengunakan bahan buah apel atau strawberry.</p>
        </div>
        


        
        
        

            

            <a href="buah" target="_blank" class="item item0">
              
              
              <div class="btn">
                <h1>BUAH</h1>
              </div>
            </a>
            <a href="makanan" target="_blank" class="item item1">
              
              <div class="btn">
                <h1>MAKANAN</h1>
              </div>
            </a>
            <a href="flyingfox" target="_blank" class="item item2">
              
              
              <div class="btn">
                  <h1>PERALATAN ELEKTRONIK</h1>
              </div>
            </a>
        
            <a href="waterpark" target="_blank" class="item item3">
              
              
              <div class="btn">
                <h1>PERALATAN RUMAH TANGGA</h1>
              </div>
            </a>
            <a href="wargame" target="_blank" class="item item4">
              
              
              <div class="btn">
                <h1>HIASAN RUMAH</h1>
              </div>
            </a>
            <a href="playground" target="_blank" class="item item5">
              
              
              <div class="btn">
                  <h1>ALAT KEBERSIHAN</h1>
              </div>
            </a>
            <a href="hotel" target="_blank" class="item item6">
              
              
              <div class="btn">
                <h1>AKSESORIS KENDARAAN</h1>
              </div>
            </a>
            <a href="food" target="_blank" class="item item7">
              
              
              <div class="btn">
                <h1>PAKAIAN</h1>
              </div>
            </a>
            <a href="kereta" target="_blank" class="item item8">
              
              
              <div class="btn">
                  <h1>COFFEE</h1>
              </div>
            </a>
        
        </div>

        <div class="services">
          <h1>What We Offer</h1>
          <div class="cen">
          <div class="service"> 
          <i class="fas fa-mobile-alt" style="color:rgb(167, 11, 50)"></i>
          <h2>Convenience</h2>
          <p></p>
        </div>
        <div class="service">
            <i class="far fa-money-bill-alt" style="color:green"></i>
            <h2>Cheap Price</h2>
            <p>y<br></p>
            </div>
        <div class="service">
          <i class="far fa-smile-beam" style="color:rgb(238, 238, 30)"></i>
          <h2>Satisfaction</h2>
          <p></p>
        </div>

      </div>
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
