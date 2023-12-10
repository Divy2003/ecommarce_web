<nav class="navbar">
        <ul class="navlist">
            <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
            <li><a href="home.php">Home</a></li>
            <li><a href="index.php">Products</a></li>
            <li><div class="dropdown">
                <a onclick="myFunction()" class="dropbtn">Services</a>
                <div id="myDropdown" class="dropdown-content">
                  <a href="index.php">BUY-PRODUCT</a>
                  <hr>
                  <a href="#">comming soon...</a>
                  <a href="#">...</a>
                  <a href="#">...</a>
                  
                </div>
              </div></li>
            <li><a href="contact.php">contact</a></li>
            

        </ul>
        <div class="rightnav">
        <span onclick="window.open ('wallet.php')"><ion-icon name="wallet-outline" style="font-size: 35px;"></ion-icon></span>
            <span onclick="window.open ('cart.php')"><ion-icon name="cart-outline"  style="font-size: 35px;"></ion-icon></span>
            <span onclick="openNav()"><ion-icon name="menu-outline" style="font-size: 35px;"></ion-icon></span>
            
        </div>  
        <div id="mySidenav" class="sidenav">
        <ul >
                           <?php
                           if(isset($_SESSION['email'])){
                           ?><li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            
                           <li><a href="order.php"><span class="glyphicon glyphicon-log-out"></span>MyOrders</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
          </div>
    </nav>