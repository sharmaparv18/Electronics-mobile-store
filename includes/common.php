<?php
$com= mysqli_connect("localhost", "root", "", 'store2')or die(mysqli_error($com));
if(!isset($_SESSION)){
session_start();
}

?>