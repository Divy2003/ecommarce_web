<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/prog.css" type="text/css">
 
    </head>

    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container form-container">
                <div class="row">
                    <div>
                        <h1><b>SIGN UP</b></h1><br>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><hr><br><br>
<footer class="footer">

 <section class="grid">

   <div class="box">
      <h3>quick links</h3>
      <a href="prog.html">  Home</a>
      <a href="#services">  Services</a>
      <a href="prog3.html">  Myprofile</a>
      <a href="contact.html">  Contact</a>
   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="signin.html">  Signin</a>
      <a href="signup.html">  Signup</a>
      <a href="cart.html">  Cart</a>
      <a href="orders.html">  Orders</a>
   </div>

   <div class="box">
      <h3>contact us</h3>
      <a href="tel:1234567890"> +123 456 7890</a>
      <a href="tel:11122233333">+111 222 3333</a>
      <a href="mailto:divy@gmail.com">divy@gmail.com</a>
      <a href="https://www.google.com"> Ahmedabad, India - 380007 </a>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#">Facebook</a>
      <a href="#">Twitter</a>
      <a  href="#">Instagram</a>
      <a href="#">Linkedin</a>
   </div>

 </section>
  <div  style="background-color: #647d55;">
    <p class="text-footer">
      copyright &copy; 2025 - www.indiaggro.com - all right reserced
    </p>
  </div>
</footer>

 <script src="resp.js"></script>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


        </div>
    </body>
</html>
