<!DOCTYPE html>
<html>
   <head>
      <title>SignUp</title>
      <link rel="stylesheet" type="text/css" href="css/signup.css">
      <link rel="icon" type="image/png" href="gambar/icons8-leaf-64.png">
   </head>
   <body>
      <div class="container" id="container">
         <div class="banner login-container">
            <h1>Hajimemashite!</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <a href="login.php" class="button" id="login">Login</a>
         </div>
         <div class="side-container">
            <div class="behindbox">
               <div class="topbox-signup singup-right">
                  <form action="signup-check.php" method="post">
                    <h1>Create Account</h1>
                        <span>Fill your email and username</span>
                     <?php if (isset($_GET['error'])) { ?>
                     <p class="error"><?php echo $_GET['error']; ?></p>
                     <?php } ?>
                     <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                     <?php } ?>
                     <!-- Name -->
                     <?php if (isset($_GET['name'])) { ?>
                     <input type="text" 
                        name="name" 
                        placeholder=""
                        value="<?php echo $_GET['name']; ?>"><br>
                     <?php }else{ ?>
                     <input type="text" 
                        name="name" 
                        placeholder="Name"><br>
                     <?php }?>
                     <!-- Username -->
                     <?php if (isset($_GET['uname'])) { ?>
                     <input type="text" 
                        name="uname" 
                        placeholder=""
                        value="<?php echo $_GET['uname']; ?>"><br>
                     <?php }else{ ?>
                     <input type="text" 
                        name="uname" 
                        placeholder="Username"><br>
                     <?php }?>
                     <!-- Password -->
                     <input type="password" 
                        name="password" 
                        placeholder="Password"><br>
                     <label>Repeat Password</label>
                     <input type="password" 
                        name="re_password" 
                        placeholder=""><br>
                     <button type="submit">Sign Up</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

