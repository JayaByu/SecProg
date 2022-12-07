<!DOCTYPE html>
<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <link rel="icon" type="image/png" href="gambar/icons8-leaf-64.png">
   </head>
   <body>
      <div class="container" id="container">
         <div class="form-container login-container">
            <form action="login-check.php" method="post">
               <h1>Login</h1>
               <span>Fill your account</span>
               <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>
               <!-- Username -->
               <input type="text" name="uname" placeholder="Username"><br>
               <!-- Password -->
               <input type="password" name="password" placeholder="Password"><br>
               <button type="submit">Sign In</button>
            </form>
         </div>
         <div class="side-container">
            <div class="behindbox">
               <div class="topbox side-right">
                  <h1>Yokoso Minnasan!</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis praesentium velit error magni rem</p>
                  <a href="signup.php" class="button" id="signUp">Sign Up</a>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

