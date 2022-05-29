<?php
require 'includes/common.php';
include 'includes/header.php';
if(!isset($_SESSION['email'])){
     header('location: index.php');
 }
 if(isset($_REQUEST['submit'])){
 $pwd= mysqli_escape_string($com,md5($_POST['password']));
 $npas=mysqli_escape_string($com,$_POST['pass']);
 $npass=mysqli_escape_string($com,$_POST['newpass']);
 $id=$_SESSION['id'];
 $q="select * from users where id=$id AND password='$pwd'";
 $result=mysqli_query($com, $q);
 if(mysqli_num_rows($result)){
     if((strlen($npas)== strlen($npass)) AND ($npas==$npass)){
         $npas= md5($npas);
         $sql="update users set password='$npas' where id=$id";
         mysqli_query($com, $sql);
         header('location:settings.php?error=Password updated successfully ');
         
     }
     else{
         header('location:settings.php?error2=Passwords did not matched ');
         
     }
 }
 else{
       header('location:settings.php?error2=This is not your correct password ');
 }
 }
 ?>


