<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Cart</title>
<link href="electronics.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center border rounded bg-light" style="margin:10px 0 10px 0;">
			<h1>My Cart</h1>
		</div>
	</div>
	<div class="col-lg-8">
		<table class="table">
			<thead class="text-center">
				<tr>
					<th scope="col">Serial No.</th>
					<th scope="col">Item Name</th>
					<th scope="col">Item Price</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody class="text-center">
				<?php
				$total=0;
				if(isset($_SESSION['cart']))
				{
					foreach($_SESSION['cart'] as $key=> $value)
					{
						$sr=$key+1;
						$total = $total + $value['Price'];
						//print_r($value);
						echo "
						<tr>
						<td>$sr</td>
						<td>$value[Item_Name]</td>
						<td>$value[Price]</td>
						<td>
						<form action='manage_cart.php' method='POST'>
						<button name='Remove_Item'class='btn btn-sm btn-outline-danger '>REMOVE</button>
						<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
						</form>
						</td>
						</tr>";
					}
				}
				?>
					
				
			</tbody>
		</table>
	</div>
	<div class="col-lg-3">
		<div class="border bg-light rounded p-4 ">
			<h3>Total:</h3>
			<h3 class="text-right" style="text-size:20px;"><?php echo "$total";?></h3>
			<br>
			<form method="POST" action="final_page.php" >
			<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
			<label class="form-check-label" for="flexRadioDefault2" style="margin-left:50px;"> Cash On Delivery</label>
			<br>	
			<br>
			<br>
			</div>
			<button class="btn btn-primary btn-block" name="make_payment"> Make Payment</button>
			<!--//Email Function
					$to = "shahjay16092002@gmail.com";
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
			
			-->
			
			</form>
		</div>
	</div>
</div>
</body>
</html>