<?php
include 'includes/common.php';
?>

<html>
<head>
       
       <title>Home</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link rel="stylesheet" href="style.css" type="text/css">
        <style>
            
        </style>
    </head>
    <body >
        <?php include 'includes/header.php';
 include 'check.php';
        ?>
        <div class="container-fluid content">
            <div class="thumbs">
                <div class="row mg" style="margin-top:10px;">
                    <div class="col-sm-4">
                        <div class="card" >
                            <div class="card-header "> <h6 class="text-center">Samsung Galaxy S5</h6></div>
                            <img class="card-img-top mx-auto pimg" src="mob1/mob2.jpg" >
                             <div class=" card-body ">
                                 <p class="text-dark">
                                 Smartphone Waterproof Phone ,
                                 Android 4.4.2 KitKat ,
                                 Main Camera  16 MP  , 
                                  5.1 inches (432 ppi pixel density)
                                  <br>
                                 More about <a href="#"> Galaxy S5>></a>
                             </p>
                             <?php if(addtocart(1)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                             </div>
                             
                        </div>
                        </div>
                       
                       <div class="col-sm-4">
                        <div class="card">
                           <div class="card-header "> <h6 class="text-center">Apple Iphone 6s</h6></div>
                           <img class="card-img-top mx-auto pimg " src="mob1/mob7.jpg">
                           <div class="card-body ">
                               <p class="text-dark">
                                   	16M colors, 4.0 inches, Corning Gorilla Glass,
                                        iOS 7  upgradable to iOS 12.4.6  , Dual-core 1.3 GHz Cyclone ,
                                        main camera 8 MP    <br>
                                 More about <a href="#">Iphone 6s>></a>
                               </p>
                               <?php if(addtocart(2)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                           </div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="card">
                           <div class="card-header "> <h6 class="text-center">Apple Iphone X</h6></div>
                         <img class="card-img-top mx-auto pimg " src="mob1/mob8.jpg">
                           <div class="card-body ">
                               <p class="text-dark">
                                   Super Retina OLED capacitive touchscreen, 16M colors,
                                             5.8 inches, iOS 11.1.1, main camera 12MP ,	Hexa-core 2.39 GHz
                                             <br>
                                 More about <a href="#">Iphone X>></a>
                               </p>
                                  <?php if(addtocart(3)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                           </div>
                        </div>
                        </div>
                    </div>
                <div class="row mg" style="margin-top:15px;">
                    <div class="col-sm-4">
                        <div class="card" >
                            <div class="card-header "> <h6 class="text-center">Samsung Galaxy S10</h6></div>
                            <img class="card-img-top mx-auto pimg" src="mob1/mob4.jpg" >
                             <div class=" card-body ">
                                 <p class="text-dark">
                                 Smartphone Waterproof Phone ,
                                 Android 4.4.2 KitKat ,
                                 Main Camera  16 MP  , 
                                  5.1 inches (432 ppi pixel density)
                                  <br>
                                 More about <a href="#"> Galaxy S10>></a>
                             </p>
                               <?php if(addtocart(4)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                             </div>
                             
                        </div>
                        </div>
                       
                       <div class="col-sm-4">
                        <div class="card">
                           <div class="card-header "> <h6 class="text-center">Apple Iphone 5s</h6></div>
                           <img class="card-img-top mx-auto pimg " src="mob1/mob9.jpg">
                           <div class="card-body ">
                               <p class="text-dark">
                                   	16M colors, 4.0 inches, Corning Gorilla Glass,
                                        iOS 7  upgradable to iOS 12.4.6  , Dual-core 1.3 GHz Cyclone ,
                                        main camera 8 MP    <br>
                                 More about <a href="#">Iphone 5s>></a>
                               </p>
                               <?php if(addtocart(5)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                           </div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" >
                           <div class="card-header "> <h6 class="text-center">Samsung Galaxy S11</h6></div>
                         <img class="card-img-top mx-auto pimg " src="mob1/mob13.jpg">
                           <div class="card-body ">
                               <p class="text-dark">
                                   Super Retina OLED capacitive touchscreen, 16M colors,
                                             5.8 inches, iOS 11.1.1, main camera 12MP ,	Hexa-core 2.39 GHz
                                             <br>
                                 More about <a href="#">Galaxy s11>></a>
                               </p>
                                  <?php if(addtocart(6)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                           </div>
                        </div>
                        </div>
                    </div>
                 <div class="row mg" style="margin-top:15px;">
                    <div class="col-sm-4">
                        <div class="card" >
                            <div class="card-header "> <h6 class="text-center">Moto G8 Plus</h6></div>
                            <img class="card-img-top mx-auto pimg" src="mob1/mob10.jpg" >
                             <div class=" card-body ">
                                 <p class="text-dark">
                                 Smartphone Waterproof Phone ,
                                 Android 4.4.2 KitKat ,
                                 Main Camera  16 MP  , 
                                  5.1 inches (432 ppi pixel density)
                                  <br>
                                 More about <a href="#"> Moto G8 Plus>></a>
                             </p>
                             <?php if(addtocart(7)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                             </div>
                              
                        </div>
                        </div>
                       
                       <div class="col-sm-4">
                        <div class="card">
                           <div class="card-header "> <h6 class="text-center">Oneplus 6</h6></div>
                           <img class="card-img-top mx-auto pimg " src="mob1/mob11.jpg">
                           <div class="card-body ">
                               <p class="text-dark">
                                   	16M colors, 4.0 inches, Corning Gorilla Glass,
                                        iOS 7  upgradable to iOS 12.4.6  , Dual-core 1.3 GHz Cyclone ,
                                        main camera 8 MP    <br>
                                 More about <a href="#">Oneplus 6>></a>
                               </p>
                               <?php if(addtocart(8)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                           </div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="card">
                           <div class="card-header "> <h6 class="text-center">Oneplus 8</h6></div>
                         <img class="card-img-top mx-auto pimg " src="mob1/mob12.jpg">
                           <div class="card-body ">
                               <p class="text-dark">
                                   Super Retina OLED capacitive touchscreen, 16M colors,
                                             5.8 inches, iOS 11.1.1, main camera 12MP ,	Hexa-core 2.39 GHz
                                             <br>
                                 More about <a href="#">Oneplus 8>></a>
                               </p>
                                <?php if(addtocart(9)){ ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                             <?php }
                             else{ ?>
                               <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                             <?php   }?>
                           </div>
                        </div>
                        </div>
                    </div>
                
            
            </div>
        </div>
      <?php
        include 'includes/footer2.php';
      ?>
    </body>
</html>

