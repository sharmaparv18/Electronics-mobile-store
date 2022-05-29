<?php


function addtocart($item_id){
    include 'includes/common.php';
    $user=$_SESSION['id'];
$sql="select * from users_items where  item_id='$item_id'  AND user_id ='$user' AND status='Added to cart' ";
$result= mysqli_query($com, $sql);
if(mysqli_num_rows($result)){
    return 1;
}
 else {
    return 0;    
        }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

