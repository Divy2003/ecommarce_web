<?php
session_start();
require 'check_if_added.php';
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
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/background.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/download.jpeg"style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/background.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
  <h1 class="section">Products category</h1>
<section>
  <div class="categories-container">
      <a href="products.php"><div class="category-box">
          <img src="img/seeds.jpeg" alt="Seeds">
          <h3>Seeds</h3>
      </div></a>
      <a href="products.php"><div class="category-box">
          <img src="img/fertiliizer.jpg" alt="Fertilizers">
          <h3>Fertilizers</h3>
      </div></a>
     <a href="products.php"> <div class="category-box">
          <img src="img/pesticide.jpeg" alt="Pesticides">
          <h3>Pesticides</h3>
      </div></a>
     <a href="products.php"> <div class="category-box">
        <img src="img/farm_machion.jpeg" alt="Farm Machinery">
        <h3>Machinery</h3>
    </div></a>
    <a href="products.php"><div class="category-box">
      <img src="img/tools.jpeg" alt="Gardening Tools">
      <h3>Tools</h3>
    </div> </a>
  </div>
  <h1 class="section">Products on sale</h1>
 <br>
<section class="featured-products">


<div class="product2">
          <img class="product_img" src="img/img1.jpg" alt="Product 1">
          <h3>Product 1</h3>
    
          <span class="price">360</span>
          <br>
          <div>
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
                         <a href="detail.php" class="btn-block" class="btn-block ">View</a>
                         <?php
                     }   }
                 ?> 
          </div>
    </div> 
    <div class="product2">
          <img class="product_img" src="img/img3.jpg" alt="Product 1">
          <h3>Product 3</h3>
    
          <span class="price">500</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
            <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
               
                <?php
                   }
              else{
                if(check_if_added_to_cart(3)){
                    echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
                }else{
                    ?>
                    <a href="cart_add.php?id=3" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                    <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
                    <?php
                }   }
                 ?> 
          </div>
    </div> 
    <div class="product2">
          <img class="product_img" src="img/img6.jpg" alt="Product 1">
          <h3>Product 11</h3>
    
          <span class="price">90</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                  <?php
                   }
              else{
                if(check_if_added_to_cart(11)){
                    echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
                }else{
                    ?>
                    <a href="cart_add.php?id=11" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                    <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
                    <?php
                }   }
                 ?> 
          </div>
    </div> 
    <div class="product2">
          <img class="product_img" src="img/img5.jpg" alt="Product 1">
          <h3>Product 5</h3>
    
          <span class="price">130</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                  <?php
                   }
              else{
                if(check_if_added_to_cart(5)){
                    echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
                }else{
                    ?>
                    <a href="cart_add.php?id=5" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                    <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
                    <?php
                }   }
                 ?> 
          </div>
    </div> 
  
    </section>
</section>
            <br><br> 
            <br><hr><br>

    
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