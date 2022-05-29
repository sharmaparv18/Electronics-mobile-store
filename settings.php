<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
<html>
    <head>
        <title>Settings</title>
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
        <?php include 'includes/header.php'?>
        <form style="margin-top: 25px;min-height:52%" method="POST" action="settings_script.php">
            <div class="col-sm-4  mx-auto">
            <h3>Change Password</h3>
            <div class="form-group">
            <input type="password" name="password" placeholder="Old Password" class="form-control form-control-sm">
            </div>
            <div class="form-group">
            <input type="password" name="pass" placeholder="New Password" class="form-control form-control-sm" pattern=".{6,}">
            </div>
            <div class="form-group">
            <input type="password" name="newpass" placeholder="Re-type New Password" class="form-control form-control-sm" pattern=".{6,}">
            </div>
             <?php
                        if(isset($_GET["error"])){
                          echo " <p class='text-success ' >".$_GET['error']."</p>";
                          echo '<br>';
                        }
                         if(isset($_GET["error2"])){
                          echo " <p class='text-danger ' >".$_GET['error2']."</p>";
                          echo '<br>';
                        }
                        ?>
            
            <button type="submit" class="btn btn-primary btn-sm" name="submit" >Change</button> 
            </div>
         </form>
        <?php include 'includes/footer2.php '?>
        
        
    </body>
</html>


