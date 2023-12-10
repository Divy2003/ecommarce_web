<?php
 
    require 'contact_conn.php';
   
   
?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="css/prog.css" type="text/css">
  
</head>
<body>
<?php
    require 'header.php';
    ?>
    
<section class="contact">

   <form action="" method="post">
      <h3>get in touch</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn-last">
   </form>

</section>
    <hr><br>
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
</body>
</html>


