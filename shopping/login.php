<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/prog.css" type="text/css">
 <style>
 .row{    
  width: 13cm;
  margin: auto;}</style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div>
                        <div>
                            <div>
                                <h3>LOGIN</h3><br>
                            </div>
                            <div class="panel-body">
                                
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
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

        
    </body>
</html>
