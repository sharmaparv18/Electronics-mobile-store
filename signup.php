<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}
?>

<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link rel="stylesheet" href="style.css" type="text/css"/>
     <style>
       
     </style>
    </head>
    <body>
        <?php include 'includes/header.php';
        ?>
        <div class=" container-fluid content">
            <div class="row">
                <div class=" col-md-7 col-12 " > 
                    <img src="mob1/mob0.jpg" alt="mobiles" class="img-fluid">
                </div>
                <div class=" col-md-4  col-12 "  style="margin-top:30px;">
                    <form  method="POST" action="signup_submit.php">
            <h2>SIGN UP</h2>
             <?php  if(isset($_GET["error"])){
                          echo " <p class='text-danger ' >".$_GET['error']."</p>";
                          echo '<br>';
                        }?>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control " required>
            
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control "required>
             <?php  if(isset($_GET["error1"])){
                          echo " <p class='text-danger ' >".$_GET['error1']."</p>";
                          
                        }?>
            </div>
            <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control ">
             <?php  if(isset($_GET["error2"])){
                          echo " <p class='text-danger' >".$_GET['error2']."</p>";
                         
                        }?>
            </div>
            <div class="form-group">
                <input type="text" name="contact" placeholder="Contact" class="form-control "  required>
             <?php  if(isset($_GET["error3"])){
                          echo " <p class='text-danger ' >".$_GET['error3']."</p>";
                          
                        }?>
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="City" class="form-control " required>
            </div>
            <div class="form-group">
                <input type="text" name="address" placeholder="Address" class="form-control" required>
            </div>
            <?php  if(isset($_GET["error4"])){
                          echo " <p class='text-danger ' >".$_GET['error4']."</p>";
                          echo '<br>';
                        }?>
            <div class="text-right">
                <button type="submit" class =" btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
                </div>
            </div>
        </div>
        <?php        include 'includes/footer2.php';?>
    </body>
</html>


