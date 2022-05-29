
  <?php
  include 'common.php';
   include "login.php";
               ?>
  
<nav class="navbar navbar-expand-sm  navbar-light bg-light" >
    <div class="container">
        <?php if(!isset($_SESSION['email'])){?>
        <a href="index.php" class="navbar-brand "  style="font-size: 1.6em;">E-Store</a>
        <?php }
        else{ ?>
        <a href="home.php" class="navbar-brand "  style="font-size: 1.6em;">E-Store</a>
        <?php }?>
        
          <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#mymenu">
                <span class="navbar-toggler-icon " ></span>
            </button>
         <div class="collapse navbar-collapse " id="mymenu">
            <ul class="navbar-nav ml-auto">
                <?php 
               
                if(!isset($_SESSION['email'])){?>
              <li class="nav-item  "><a href="signup.php" class="nav-link  ">
               <i class="fas fa-list men-pad" ></i> Sign Up</a></li>
            
               <li class="nav-item "><a type="button" data-target="#mymodal" data-toggle="modal" class="nav-link ">
                       <i class="fas fa-user  men-pad"></i>Login</a></li>
                 <li class="nav-item  "><a href="about.php" class="nav-link ">
                         <i  class="fas fa-align-justify  men-pad"></i>About Us</a></li>     
                         <li class="nav-item  "><a href="contact.php" class="nav-link ">
                 <i class="fas fa-mobile-alt men-pad "></i>Contact</a></li>
  <?php }
     else{?>
                   <li class="nav-item  "><a href="cart.php" class="nav-link  ">
                 <i class="fa fa-shopping-cart men-pad" ></i>Cart</a></li>
                <li class="nav-item  "><a href="settings.php" class="nav-link ">
                        <i class="fas fa-user men-pad"></i>Settings</a></li>
                        <li class="nav-item  "><a href="logout.php" class="nav-link ">
                       <i class="fas fa-sign-out-alt men-pad"></i>Logout</a></li> 
  <?php }?>
            </ul>
    </div>
</nav>
