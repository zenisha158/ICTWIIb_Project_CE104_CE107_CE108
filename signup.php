<?php
require_once('connection.php');

if (isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['psw']) && !empty($_POST['psw']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['psw-repeat']) && !empty($_POST['psw-repeat'])){
    //Stores Values in Variable
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    $selectq = mysqli_query($conn, "select * from users where username ='{$username}' ") or die(mysqli_error($conn));

    $count = mysqli_num_rows($selectq);
	if((strlen($password) > 8 && strlen($password) < 15)){
		if ($count > 0) {
			$response['flag'] = 0;
			//Already Registrion message.....
			echo '<div style="background-color:#52b350; padding:10px; font-size:26px; weight:500;"><center>You are already registered.<br>Click Here For <a href="login.php">Login</a></center></div>';
			} else {
				$insertquery = mysqli_query($conn, "insert into users (`username`,`email_id`,`password`) "
                . "values ('{$username}','{$email}','{$password}')") or die(mysqli_error($conn));
				//Below Function will Give you last Inserted Record ID
				$lastinsertid = mysqli_insert_id($conn);
				if ($insertquery) {
					$response['flag'] = 1;
					//Messege for Succesfully Registration....
					echo '<div style="background-color:#52b350; padding:10px; font-size:26px; weight:500;"><center>Registered Succesfully.</center></div>';
					//Email Function
					 $to = "$email";
					$subject = "E-commerce Website:";
					$message="Welcome to our Website..."."<br><br><br>"."Buy the items as you want."."<br>".
					"We have best products as you wanted"."<br>"."<br>"."Your Username:".$username."<br>"
					."Your Password:".$password."<br>";

					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// More headers
					$headers .= 'From: <webmaster@example.com>' . "\r\n";
					//$head
					if(mail($to,$subject,$message,$headers)){
					echo "<div style='background-color:green;font-size:20px;font-weight:600; padding: 10px;'>
					Your account is created successfully.You can buy the items now.</div>";
					}
					else{
						echo "<div style='background-color:rgba(255,0,0,0.6); padding:10px;'>
							Server is not responding please try again later..</div>";
					}


				}else {
						echo "Please Try Again Something Went Wrong";
						}
			}
	}else{
		echo "Please enter password in 8-15 characters.";
	}
} else {

    $response['flag'] = 0;
    $response['message'] = "Required fields missing";
}
//echo json_encode($response);


?>
<!DOCTYPE html>
<html>
<head>

<link href="signup.css" rel="stylesheet" type="text/css" />
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

<form method="POST" style="border:1px solid #ccc">
  <div class="container">
  <center>
    <h1>Sign Up</h1>
    <p>Please fill this form to create an account.</p>
    </center>
	<hr>
	<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
	  <button type="button" class="cancelbtn">Cancel</button>
      
    </div>
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
