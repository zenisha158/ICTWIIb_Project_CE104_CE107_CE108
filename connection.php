<?php
//session_start();
$conn = mysqli_connect('localhost','root','','ecommerce');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}//else{
		//echo "You have succesfully logged in";
	//}
?>