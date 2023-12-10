<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/prog.css" type="text/css">
 
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                              <br><hr><br>  <p>You have been logged out. <a href="login.php">Login again.</a></p><br><hr><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
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
