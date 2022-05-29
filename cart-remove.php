<?php
 require 'includes/common.php';
 $id=$_GET['pid'];
 $uid=$_SESSION['id'];
 $sql="delete from users_items where user_id=$uid AND item_id=$id ";
 mysqli_query($com, $sql);
 header('location: cart.php');
?>
