<?php
require 'includes/common.php';

if(isset($_REQUEST['submit'])){
    $email= mysqli_escape_string($com, $_POST['email']);
    $pwd= md5(mysqli_escape_string($com, $_POST['pwd']));
    $query="select id,email from users where email='$email' AND password='$pwd'";
    $result=mysqli_query($com, $query);
    if(mysqli_num_rows($result)){
        $row= mysqli_fetch_array($result);
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['id'];
        header('location:home.php');
    }
    else{
        include 'includes/header.php';
       
        echo 'You may have entered wrong password or email . Please try again.';
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

