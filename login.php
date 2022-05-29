<?php

?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link rel="stylesheet" href="style.css" type="text/css"/>
     <style>
       
     </style>
    </head>
    <body>
        <div class="modal" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>LOGIN</h3>
                        <button type="button" class="close" data-dismiss="modal" > &times; </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="login_submit.php" >
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control form-control-sm">
                </div>
                  <div class="form-group">
                    <input type="password" name="pwd" placeholder="Password" class="form-control form-control-sm">
                </div>
                          
                <div class="form-group">
               <button class="btn btn-primary "  name="submit" type="submit" >Login</button>
                
                </div>
                            <div>
                                <p>Don't have an account ? <a href="signup.php">Register</a>
                            </div>
                            <div><a href='#'>Forget Password ?</a></div>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
        
   
