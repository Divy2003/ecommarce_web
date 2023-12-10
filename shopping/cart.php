<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
       
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
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
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>&price=<?php echo $sum?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><hr><br><br><br><br>
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
