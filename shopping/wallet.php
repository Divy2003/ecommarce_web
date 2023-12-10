<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['email'])) {
    header('location: login.php');
    exit();
}

$user_id = $_SESSION['id'];
  // Retrieve wallet balance from the users table
  $get_balance_query = "SELECT wallet_balance FROM users WHERE id = $user_id";
  $balance_result = mysqli_query($con, $get_balance_query) or die(mysqli_error($con));
  $row = mysqli_fetch_assoc($balance_result);
  $wallet_balance = $row['wallet_balance'];

// Fetch transactions 
$transaction_query = "SELECT * FROM transactions WHERE user_id = $user_id ORDER BY timestamp DESC";
$transaction_result = mysqli_query($con, $transaction_query) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    
    <link rel="stylesheet" href="css/prog.css" type="text/css">
</head>
<body>
<?php 
   require 'header.php';?>
    <?php
  
    if(mysqli_num_rows($transaction_result) > 0) {
        ?>
        <h2>Transaction History</h2>
        <br><hr><br>
        <div class="container">
        <table border="1" class="table">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Timestamp</th>
                </tr>
    
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($transaction_result)) {
                    echo '<tr>';
                    echo '<td>' . $row['transaction_id'] . '</td>';
                    echo '<td>' . $row['amount'] . '</td>';
                    echo '<td>' . $row['type'] . '</td>';
                    echo '<td>' . $row['timestamp'] . '</td>';
                    echo '</tr>';              
                }   
               echo '<h2>' . "Your current wallet balance is: Rs " . $wallet_balance . '</h2>';
              echo '<br>'
               
                ?>
            </tbody>
        </table>
        </div>
        <?php
    } else {
        echo '<p>No transactions found.</p>';
    }
    ?>
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
