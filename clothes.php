<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clothes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style>
        nav {
            display: block;
            background-color: #000000;
            overflow: auto;
            padding-top: 10px;
        }
        
        .web-site-name {
            color: #ffffff;
			cursor: pointer;
        }
        
        li{
            color: #ffffff;
            float: right;
            padding: 0px 25px 0px 25px;
            margin: 0px 15px 0px 15px;
            display: block;
            list-style-type: none;
        }
        
        li a{
            color: #ffffff;
            text-decoration: none;
			padding: 10px;
        }
        
        li a:hover {
            background-color: #ffffff;
            color: #000000;
			border: white;
            border-radius: 10px;
        }
		.foot .media-icons a{
            color: white;
            font-size: 25px;
            margin-right: 30px;
        }
</style>
</head>

<body>

    <nav class="navBar">
        <ul class="web-site-name">
            3'S.com
            <li class="link">
                <a href="signup.html">Sign Up</a>
            </li>
            <li class="link">
<?php
		if(isset($_SESSION['USER_LOGIN'])){
		echo '<a href="logout.php" target="_blank">Logout</a>';
		}
		else{
			echo '<a href="login.php" target="_blank">Login</a>';
		}
		?>
            </li>
            <li class="link">
                <a href="#catagories">Buy Now</a>
            </li>
        </ul>
    </nav>
	<div class="container">
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4">
		<a href="electronics.php"type="submit" class="btn btn-primary btn-lg btn-block">Electronics</a> 
		</div>
		<div class="col-lg-4">
		<a href="jewellery.php"type="submit" class="btn btn-primary btn-lg btn-block">Jwellary</a>
		</div>
		<div class="col-lg-4">
		<a href="mycart.php" type="submit" class="btn btn-primary btn-lg btn-block">My Cart</a>
		</div>
	</div>
</div>
    <div class="container">
        <div class="row" style="margin-top:30px;">
            <div class="col-lg-6">
				<form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="Shirt.jpg" alt="shirt" width="200px" height="500px" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Shirts</h5>
                        <p class="card-text">( Men Regular Fit Solid Spread Collar Casual Shirt)</p>
						<b>Price:Rs.1399<br></b><br>
                        <button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Shirt">
						<input type="hidden" name="Price" value="1399">
                    </div>
                </div>
				</form>
            </div>
            <div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="jeans.jpg" alt="jeans" width="200px" height="500px" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jeans</h5>
                        <p class="card-text">( Regular Men Blue Jeans )</p>
						<b>Price:Rs.2299<br></b><br>
						<button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Jeans">
						<input type="hidden" name="Price" value="2299">
                    </div>
                </div>
				</form>
            </div>
        </div>
        <div class="row" style="margin-top:30px;">
            <div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="shorts.jpg" alt="shorts" width="200px" height="500px" class="card-img-top">
                    <div class="card-body">
                       <h5 class="card-title">Shorts</h5>
                        <p class="card-text">( 5 Pack:Men's Dry-Fit Sweat Resistant Active Athletic Performance Shorts )</p>
						<b>Price:Rs.2492<br></b><br>
                        <button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Shorts">
						<input type="hidden" name="Price" value="2492">
                    </div>
                </div>
				</form>
            </div>
            <div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="sarees.jpg" alt="sarees" width="200px" height="500px" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Sarees</h5>
                        <p class="card-text">(Nivah Fashion Women's Silk Embroidery Saree with Unstitched Blouse Piece)</p>
						<b>Price:Rs.2870<br></b><br>
                        <button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Sarees">
						<input type="hidden" name="Price" value="2870">
                    </div>
                </div>
				</form>
            </div>
        </div>
        <div class="row" style="margin-top:30px;">
            <div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
                <div class="card">
                   <img src="salwarsuit.jpg" alt="salwarsuit" width="200px" height="500px" class="card-img-top">
                    <div class="card-body">
                       <h5 class="card-title">Salwarsuit</h5>
                        <p class="card-text">(Indian/Pakistani Party Wear Wedding Wear Sharara Style Salwar Suit for Women Fiona )</p>
						<b>Price:Rs.6,199<br></b><br>
                        <button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Salwarsuit">
						<input type="hidden" name="Price" value="6199">
                    </div>
                </div>
				</form>
            </div>
            <div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="top.jpg" alt="top" width="200px" height="500px" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Tops</h5>
                        <p class="card-text">(MOUSYA Womens I Run A Girl Gang T-Shirt Girl Mom Shirt Short Sleeve Letter Printed Round Neck Summer Casual Tee Tops)</p>
						<b>Price:Rs.1,208</b><br><br>
                        <button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Tops">
						<input type="hidden" name="Price" value="1208">
                    </div>
                </div>
				</form>
            </div>
        </div>

    </div>

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