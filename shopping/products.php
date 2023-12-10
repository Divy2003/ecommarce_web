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
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Store!</h1>
                     </div>
            </div>
        
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
          <img class="product_img" src="img/img2.jpg" alt="Product 1">
          <h3>Product 2</h3>
    
          <span class="price">400</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(2)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=2" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
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
          <img class="product_img" src="img/img4.jpg" alt="Product 1">
          <h3>Product 4</h3>
    
          <span class="price">800</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(4)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=4" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                   <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
               <?php
           }   }
             ?>    
          </div>
    </div> 

</section>
                    
<section class="featured-products">
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
    <div class="product2">
          <img class="product_img" src="img/img6.jpg" alt="Product 1">
          <h3>Product 6</h3>
    
          <span class="price">300</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(6)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=6" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                   <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
             
              <?php
           }   }
             ?>    
          </div>
    </div> 
    <div class="product2">
          <img class="product_img" src="img/img2.jpg" alt="Product 1">
          <h3>Product 7</h3>
    
          <span class="price">800</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(7)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=7" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                   <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
              <?php
           }   }
             ?>    
          </div>
    </div>
    <div class="product2">
          <img class="product_img" src="img/img1.jpg" alt="Product 1">
          <h3>Product 8</h3>
    
          <span class="price">180</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(8)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=8" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                   <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
               <?php
           }   }
             ?>    
          </div>
    </div> 

</section>

<section class="featured-products">
   <div class="product2">
          <img class="product_img" src="img/img4.jpg" alt="Product 1">
          <h3>Product 9</h3>
    
          <span class="price">150</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                  <?php
                   }
              else{
                if(check_if_added_to_cart(9)){
                    echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
                }else{
                    ?>
                    <a href="cart_add.php?id=9" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                    <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
                    <?php
                }   }
                 ?> 
          </div>
    </div>  
    <div class="product2">
          <img class="product_img" src="img/img3.jpg" alt="Product 1">
          <h3>Product 10</h3>
    
          <span class="price">100</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
                <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(10)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=10" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
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
          <h3>Product 12</h3>
    
          <span class="price">120</span>
          <br>
          <div>
          <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn-block">Buy Now</a></p>
                 <?php
                  }
             else{
               if(check_if_added_to_cart(12)){
                   echo '<a href="#" class=btn-block btn-success disabled>Added to cart</a>';
               }else{
                   ?>
                   <a href="cart_add.php?id=12" class="btn-block" name="add" value="add" class="btn-block ">Add to cart</a>
                   <a href="detail.php" class="btn-block" class="btn-block ">View</a>    
               <?php
           }   }
             ?>    
          </div>
    </div> 

</section>
            </div>
            <br><br><br><br><br><br><br><br>
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
        </div>
        <script src="resp.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
