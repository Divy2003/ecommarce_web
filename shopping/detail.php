<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="css/prog.css" type="text/css">
  
</head>
<body>
<?php
   require 'header.php';
            ?>
    <section class="section-prog4">
      <div class="leftt-div">
          <img class="productlast_img" src="img/logo.jpg" alt="Product 1">
      </div>
      <div class="rightt-div">
         <h1 id="h">Product-1</h1>
        <br>
         <hr><br>
         <p id="p1">COMPANY:abc ltd</p>
         <p id="p2">BRAND MODEL:altra pro mex</p>  
         <p id="p3">COMPANY ORIGIN:india</p>
         <p >AVAILABILITY:IN STOCK</p>
         <h1>360</h1>
         
         <br><hr>
<br>         
         <table align="center" class="tablee">
          <tr>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                  <?php
                   }
              else{
                if(check_if_added_to_cart(1)){
                    echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
                }else{
                    ?>
                    <a href="cart_add.php?id=1" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                      <?php
                }   }
                 ?> </tr>
          </table>
     
       </div>
  </section>
  <section class="disc">
  <br>
          <h1>Description</h1>
          <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum temporibus nam, aut minus esse labore ullam nihil nulla sunt vero voluptatem possimus, ad aliquid ipsa vel rem dolorem distinctio eaque. Rem saepe magnam tenetur accusantium dolorum nesciunt fuga error voluptate animi doloremque ea necessitatibus ullam odit officia, beatae cupiditate!</p>
  <br><br>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum temporibus nam, aut minus esse labore ullam nihil nulla sunt vero voluptatem possimus, ad aliquid ipsa vel rem dolorem distinctio eaque. Rem saepe magnam tenetur accusantium dolorum nesciunt fuga error voluptate animi doloremque ea necessitatibus ullam odit officia, beatae cupiditate!</p>
  
  
  </section>

    
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