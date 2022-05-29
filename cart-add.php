<?php
require 'includes/common.php';
$pid=$_GET['id'];
$uid=$_SESSION['id'];
$query="insert into users_items(user_id,item_id,status) values($uid,$pid,'Added to cart')";
mysqli_query($com, $query);
header('location: home.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

