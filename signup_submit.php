<?php
require 'includes/common.php';


if(isset($_REQUEST['submit'])){
      if(($_REQUEST['name']=="" ) || ($_REQUEST['email']=="" ) || ($_REQUEST['password']=="" ) || ($_REQUEST['contact']=="" ) ||
                ($_REQUEST['city']=="" ) || ($_REQUEST['address']=="" ) ){
             header('location:signup.php?error=Please fill all the fields ');
                                           }
              else{
                         $name =mysqli_real_escape_string($com,  $_POST['name']);
                      
                      $email = mysqli_real_escape_string($com, $_POST['email']);
                     $pw=$_POST['password'];
                       $ph=mysqli_real_escape_string($com,$_POST['contact']);
                     $city=mysqli_real_escape_string($com, $_POST['city']);
                        $add=mysqli_real_escape_string($com, $_POST['address']);
                        
           if(strlen($_POST['password'])<6){
               header('location:signup.php?error2=too short password ');
                             }
             else if (strlen($_POST['contact'])!=10){
                header('location:signup.php?error3=Enter a valid 10 digit no.');
                                         }
                   else{                      
                         $pwd= md5($pw);
                         $q="select id from users where email='$email' ";
                             $result= mysqli_query($com, $q);
                                            if(mysqli_num_rows($result)){
                                              header('location:signup.php?error4=email id already exists ');
                                                 }
                                             else{
                                                 $sql="insert into users(name,email,password,contact,city,address) VALUES ('$name','$email','$pwd','$ph','$city','$add') ";
                                                    $result=mysqli_query($com, $sql);
                                                  $id=mysqli_insert_id($com);
                                                        
                                                    $_SESSION['email']=$email;
                                                    $_SESSION['id']=$id;
                                                    header('location: home.php');
       
                                                       }
                   }
                }
        }

?>