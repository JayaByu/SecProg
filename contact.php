<?php 

include 'db_conn.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$message = $_POST['message']; // Get Comment from form

	$sql = "INSERT INTO contactus (name, email, message)
			VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Message sent')</script>";
	} else {
		echo "<script>alert('Message does not add.')</script>";
	}
}

?>
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
    <link rel="stylesheet" type="text/css" href="css/stylecontact.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
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
                <li><a  href="home.php">HOME</a></li>
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
                <li><a  href="gallery">GALLERY</a></li>
                <li><a   class="active" href="contact">CONTACT US</a></li>
                
                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                  ?>
                  <a href="logout.php" title="logout"><i class="fas fa-sign-out-alt"></i></a>
                
                <?php
                } else {
                  ?>
                  <a href="login.php" title="login"><i class="fas fa-sign-in-alt"></i></a>
                <?php
                }
                ?>
            </ul>
    </div>
    

    <div class="badan">
         
        <div class="contact-title">
            <h1>CONTACT US</h1>
        </div>
        <div class="contact-info">
            <div class="card">
                <i class="card-icon far fa-envelope"></i>
                <p>kusuma@gmail.com</p>
            </div>
      
            <div class="card">
                <i class="card-icon fas fa-phone"></i>
                <p>0812 3456 7890</p>
            </div>
      
            <div class="card">
                <i class="card-icon fas fa-map-marker-alt"></i>
                <p>Malang</p>
            </div>
        </div>

        <div class="contact-section">
            <form action="" method="POST">
            <div class="inner-width">
              <h1>Get in touch</h1>
              <input type="text" class="name" name="name" id="name" placeholder="Your Name">
              <input type="email" class="email" name="email" id="email" placeholder="Your Email">
              <textarea rows="1" placeholder="Message" class="message" name="message" id="message"></textarea>
              <button name="submit">SUBMIT</button>
            </div>
        </form>
        </div>


        <div class="maps">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.0273711396799!2d112.5151459680226!3d-7.883612678490962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78872c715cd301%3A0x97643e8c05c45e57!2sKusuma%20Agrowisata%20Resort%20%26%20Convention%20Hotel!5e0!3m2!1sid!2sid!4v1618202551614!5m2!1sid!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="umap"></iframe></p>
        </div>
        



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
</body>
</html>