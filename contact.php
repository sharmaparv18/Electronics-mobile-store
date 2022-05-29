<?php
include 'includes/common.php';
?>
<html>
<head>
       
       <title>About Us</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link rel="stylesheet" href="style.css" type="text/css">
        <style>
              @media (max-width: 577px) {
             .thumbs .card{
                 margin: 10px;
             }
             .contact .row  h2, p,h6{
                 text-align: center;
             }
             .contact .row img{
                
             }
        </style>
    </head>
    <body >
        <?php include 'includes/header.php';
        ?>
        <div class="container contact content">
            <div class="row" >
                <div class="col-md-9 col-12" style="margin-top:20px;">
                    <h2 class="text-secondary">LIVE SUPPORT</h2>
                    <h6 class="text-secondary" style="font-size:1.1em">24 hours | 7 days a week | 365 days a year | LIVE Technical Support</h6>
                  
                    <p style="text-align:justify;">Customers are researching ways to utilize messaging apart from chatting with friends. The fact is
                        , research has shown that 9 out of 10 customers desire the capability to message your company.
                        But a majority of organizations don’t provide it. By using Live Support, you receive 2 of the
                        most significant messaging options you’ll require for keeping in touch with your customers.
                       See More on Mobile Options 
                        </p>
                </div>
                <div class="col-md-2 col-12" >
                    <img src="mob1/contact2.png" alt='contact_jpeg' class="mx-auto d-block pimg ">
                        
                </div>
            </div>
            <div class="row">
                   <div class="col-md-8 col-12" style="margin-top:20px;"> 
                       <h2 class="text-secondary">CONTACT US</h2>
                       <form method="POST" action="contact_script.php">
                           <div class="form-group">
                               <label for="name"><h6 style="margin-bottom:-3px;"> Name:</h6></label>
                           <input type="text" id="name" name="name" class="form-control">
                           </div>
                            <div class="form-group">
                               <label for="email"><h6 style="margin-bottom:-3px;"> Email:</h6></label>
                           <input type="email" id="email" name="email" class="form-control">
                           </div>
                            <div class="form-group">
                               <label for="msg"><h6  style="margin-bottom:-3px;"> Message:</h6></label>
                               <textarea id="msg" name="msg" class="form-control" rows="5"></textarea>
                           </div>
                           <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </form>
                </div>
                <div class="col-md-4 col-12 " style="margin-top:20px;">
                    <h2 class="text-secondary text-center">Company Information</h2>
                    <p style="text-align: justify ;margin-left: 15px;">
                        Consortium for Common Food Names<br>
                        2107 Wilson Blvd. Suite 600<br>
                        Arlington, VA 22201-3061 USA<br>
                        Phone : (1 571) 272 8600 ?<br>
                        Fax : (1 571) 273 0464 <br>
                        Email usptoinfo@uspto.gov <br>
                        Follow us on <a href="#" style="white-space:pre;">  <i class="fab fa-facebook-square"></i> </a>
                      <a href="#" style="white-space:pre;">  <i class="fab fa-instagram"></i> </a>
                        <a href="#" style="white-space:pre;"> <i class="fab fa-twitter"></i> </a>
                      
                        
                    </p>
                </div>
            </div>
        </div>
        
        <?php        include 'includes/footer2.php';
        ?>
    </body>
</html>