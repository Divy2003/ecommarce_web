 <?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        
        $order_amount = $_GET['price'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
           
        // Deduct order amount from user balance
        $update_wallet_query = "UPDATE users SET wallet_balance = wallet_balance - $order_amount WHERE id = $user_id";
        $update_wallet_result = mysqli_query($con, $update_wallet_query) or die(mysqli_error($con));
    
        // Update order status to 'Confirmed'
        $confirm_query = "UPDATE users_items SET status='Confirmed' WHERE user_id = $user_id";
        $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));
    
        // Record the transaction in the transactions table
        $transaction_type = 'debit';
        $timestamp = date('Y-m-d H:i:s');
        $transaction_query = "INSERT INTO transactions (user_id, amount, type, timestamp) VALUES ($user_id, $order_amount, '$transaction_type', '$timestamp')";
        $transaction_result = mysqli_query($con, $transaction_query) or die(mysqli_error($con));
        header('location: wallet.php?transaction_id=' . mysqli_insert_id($con));


        // Insert order information into the orders table
    $user_products_query = "SELECT item_id FROM users_items WHERE user_id='$user_id' AND status='Confirmed'";
    $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));

    while($row = mysqli_fetch_array($user_products_result)) {
        $item_id = $row['item_id'];

        // Insert order into the orders table
        $insert_order_query = "INSERT INTO orders (user_id, item_id) VALUES ('$user_id', '$item_id')";
        mysqli_query($con, $insert_order_query) or die(mysqli_error($con));
    }

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
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p><br><br><hr><br><br>
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
        </div>
        <script src="resp.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
