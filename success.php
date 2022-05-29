<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
     header('location: index.php');
 }
 $uid=$_SESSION['id'];
 $sql="update users_items SET status='Confirmed' where user_id=$uid";
 mysqli_query($com, $sql);
?>
<html>
    <head>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <?php         include 'includes/header.php';?>
        <div class="container text-center content" style="margin-top: 40px;">
            <h3 >Your order has been confirmed.</h3>
            <h4>Thank you for shopping with us</h4>
            <p><a href="home.php">Click here</a> to purchase more exciting products.</p>
            
        </div>
        <?php include 'includes/footer2.php';?>
    </body>
</html>

