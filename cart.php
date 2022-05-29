<?php
require 'includes/common.php';
  if(!isset($_SESSION['email'])){
     header('location: index.php');
  }
?>


<html>
    <head>
        <title>Cart</title>
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
        <?php
             include 'includes/header.php';
        ?>
        <div class="container table-responsive content"  >
            <table class="table table-striped " style="margin: auto;max-width: 500px">
            <thead>
                <tr>
                    <th>Item Number </th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th class="text-center">   Action     </th>
                       </tr>
                      </thead>
                      <tbody>
                          <?php
                          $total=0;
                          $uid=$_SESSION['id'];
                          $query="select c.pid,c.name,c.price from users a inner join users_items b on a.id=b.user_id
                                  inner join items c on b.item_id=c.pid where a.id=$uid  ";
                            $result= mysqli_query($com, $query);
                       
                         if(mysqli_num_rows($result)==0){?>
                          <?php echo "<center><h2>Add items to the cart first!</h2></center>";?>
                       <?php  }
                         else{ 
                               
                                while ($row = mysqli_fetch_array($result)) {?>
                          <tr>
                              <td class="text-center"><?php
                    $n=$row['pid'];
                    echo "$n" ;
                    ?></td>
                    <td><?php
                    $nm=$row['name'];
                    echo "$nm" ;?></td>
                    <td><?php
                    $pr=$row['price'];
                    $total=$total+$row['price'];
                    echo "$pr";?></td>
                    <td  class="text-center"><a  href="cart-remove.php?pid='<?php echo $n;?>'" class="remove_item_link "  > Remove</a> </td>
                          </tr>
                                    
                            <?php    }?>
                         
                          
                          <tr>
                               <td> </td>
                     <td class="font-weight-bold">Total:   </td>
                   
                     <td class="font-weight-bold"><?php echo $total ?></td>
                     
                     <td  class="text-center"><a href="success.php" class="btn btn-sm btn-primary ">Confirm Order</a></td>
                          </tr>
                       <?php  }?>
                            </tbody>
        </table>
    </div>
        <?php
              include 'includes/footer2.php';
        ?>
    </body>
     </html>