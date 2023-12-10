<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indi aggro center</title>
    <link rel="stylesheet" href="css/prog.css" type="text/css">
  </head>

<body>

<?php
            require 'header.php';
           ?>

<br>
    <section class="background firstsection" id="home">
        <div class="firstbox" style="color: rgb(25, 205, 61);font-size: 150%;">
            <marquee direction="left">you can contact us by submit a form</colour>
            </marquee>
        </div>
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">The future products are here</p>
                <p class="text-small">  the future of Products are here because you can most advance and
                    new,improved,garranted, products from heare and all the
                    products are available here </p>
                   
                <div class="signin-up">
                     <button class="btn-last" onclick="window.open ('signup.php')">Signup</button>
                    <button class="btn-last" onclick="window.open ('login.php')">Login</button>
                </div>

            </div>

            <div class="secondhalf">
                <img src="img/logo.jpg" alt="logo image">
            </div>
        </div>
    </section>
    <h1 class="section" id="services">Our Services</h1>
    <section class="total-servicess">

        <div align="center"><button class="service" onclick="window.open ('index.php')">
                    <h1>Buy Aggreculture products</h1>
                </button></div>
        <br>
        <div align="center">
            <button class="service">
                <h1>Rental services <br>(comming soon....)</h1>
            </button>
        </div>
        <br>
        <div align="center">
            <button class="service">
                <h1>Learn Different Farming Technicues <br>(comming soon....)  </h1>
            </button>
        </div>
        <br>
        <div align="center">
            <button class="service">
                <h1>Wather Forcast <br>(comming soon....)</h1>
            </button>
        </div>
        
        <br>
        <div align="center">
            <button class="service">
                <h1>Live Mandi Bhav <br>(comming soon....)</h1>
            </button>
        </div>
        <br>
        <div align="center">
            <button class="service">
                <h1>Goverment Schemes for farmers <br>(comming soon....)</h1>
            </button>
        </div>
    </section>
    <br>
    <section class="about-us" id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to our online store! We are dedicated to providing high-quality products and excellent customer
                service. With a wide range of options to choose from, you're sure to find exactly what you're looking
                for.</p>
            <p>Our team is passionate about delivering the best shopping experience to our customers. We source our
                products from trusted suppliers to ensure both quality and style. Customer satisfaction is our top
                priority, and we strive to make your online shopping experience smooth and enjoyable.</p>
        </div>
    </section>
    <br>

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