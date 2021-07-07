<?php
session_start();
require('connection.php');
if(isset($_POST['login']) ){
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	//$username=mysqli_real_escape_string($conn,$_POST['uname']);
	//$password=mysqli_real_escape_string($conn,$_POST['psw']);
	$sql="select * from users where username='{$username}' and password='{$password}' ";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
	$count=mysqli_num_rows($res);
	//$username=$row['username'];
	//$password=$row['password'];
	if($count==1){
		$_SESSION['USER_LOGIN']='yes';
		$_SESSION['username']=$row['username'];
		$_SESSION['password']=$row['password'];
		
		//if($res){
		
		header('location:index.php');
		//}
		}
	else{
		echo '<div class="alert alert-primary" role="alert" style="margin-top:10px; padding:20px;background-color:rgba(255,0,0,0.5);letterspacing:2; ">
		<h1><center>You have not registered yet.<br><a href="signup.php">Click Here</a> to Register.</center></h1>
</div>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<style>
.foot .media-icons a{
            color: white;
            font-size: 25px;
            margin-right: 30px;
        }

</style>
</head>
<body>
<center>
<h2>Login Form</h2>
</center>
<form method="POST">
  <div class="imgcontainer">
    <img src="png-transparent-computer-icons-user-profile-avatar-heroes-silhouette-avatar-thumbnail.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="login" >Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" >Cancel</button>
    <span class="psw">Forgot <a href="forgot1.php">password?</a></span>
  </div>
</form>
<footer>
		<div class="foot" style="width:100%; background:#000000; color:#ffffff; padding:20px; text-align:center;">
			<p>Coprights @Virtual Store.All Rights Reserverd | Cotact Us:+91 1234567890</p>
			<div class="media-icons">
			<a target="_blank" href="https://www.facebook.com/zenisha.savaliya.9"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.instagram.com/__zenisha____/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/zenisha-s-a74a51204/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
</footer>
</body>
</html>
