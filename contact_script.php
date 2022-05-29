<?php
include 'includes/common.php';
if(isset($_REQUEST['submit'])){

                    $name=mysqli_real_escape_string($com, $_POST['name']);
	$email=mysqli_real_escape_string($com, $_POST['email']);
	$msg=mysqli_real_escape_string($com, $_POST['msg']);
     $reg="insert into query(name,email,message) values('$name','$email','$msg')";

	$result=mysqli_query($com, $reg) or die(mysqli_error($reg));

	
	echo "<center>Thankyou for contacting us.<br>Our Representative will contact you soon. <br>";
}
?>
<a href="index.php"> <?php echo "<br>Continue Shopping..!!</center>"; ?> </a>
        

