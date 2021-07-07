<?php

echo '<p style="margin-top:100px;"><center> <h1>Thank You For visiting our Website.<br>Hope you enjoy your shopping</h1></center></p>.';
			//Email Function
					$to = "shahgolu566@gmail.com";
					$subject = "E-commerce Website:";
					$message="Welcome to our Website..."."<br><br><br>"."Buy the items as you want."."<br>".
					"We have best products as you wanted"."<br>"."<br>"."Your Username:"."<br>"
					."Your Password:"."<br>";

					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// More headers
					$headers .= 'From: <webmaster@example.com>' . "\r\n";
					//$head
					if(mail($to,$subject,$message,$headers)){
					echo "<div style='background-color:green;font-size:20px;font-weight:600; padding: 10px;'>
					Your trasection is sucessfully done.</div>";
					}
					else{
						echo "<div style='background-color:rgba(255,0,0,0.6); padding:10px;'>
							Server is not responding please try again later..</div>";
					}
			
			?>