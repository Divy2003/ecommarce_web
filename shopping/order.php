<?php
session_start();
require 'connection.php';

if(!isset($_SESSION['email'])){
    header('location:index.php');
} else {
    $user_id = $_SESSION['id'];

    // Retrieve user's orders from the orders table
    $order_history_query = "SELECT o.order_date, i.name, i.price FROM orders o 
                            INNER JOIN items i ON o.item_id = i.id 
                            WHERE o.user_id = '$user_id'
                            ORDER BY o.order_date DESC";

    $order_history_result = mysqli_query($con, $order_history_query) or die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <link rel="stylesheet" href="css/prog.css" type="text/css">
      
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container">
        <h2>Your Order History</h2>
        <table class="table" border=1>
            <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($order_history_result)) { ?>
                    <tr>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                    </tr>
                <?php } ?>
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
