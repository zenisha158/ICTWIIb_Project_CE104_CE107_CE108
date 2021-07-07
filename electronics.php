<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronics</title>
<link href="electronics.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
		<a href="clothes.php"type="submit" class="btn btn-primary btn-lg btn-block">Clothes</a> 
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
	<div class="row" style="margin-top:30px; ">
		<div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
			<div class="card">
				<img src="moble1.jpg" class="card-img-top" alt="..." width="200px" height="500px">
					<div class="card-body">
						<h3 class="card-title">Redmi Note 10</h3>
						<p class="card-text">(Shadow Black, 4GB RAM, 64GB Storage) - Amoled Dot Display | 48MP Sony Sensor IMX582 | Snapdragon 678 Processor)</p>
						<b>Price:Rs.13,000</b><br><br>
						<button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Redmi Note 10">
						<input type="hidden" name="Price" value="13000">
					</div>
			</div>
			</form>
		</div>
		<div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
			<div class="card">
				<img src="mobile2.jpg" class="card-img-top" alt="..." width="200px" height="500px">
					<div class="card-body">
						<h3 class="card-title">Apple iPhone 12 Pro Max</h3>
						<p class="card-text">(512GB) - Pacific Blue|Memory Storage Capacity	512 GB|Operating System	IOS 14|)</p>
						<b>Price:Rs.1,53,500</b><br><br>
						<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
						<input type="hidden" name="Item_Name" value="Apple iPhone 12 Pro Max">
						<input type="hidden" name="Price" value="153500">
					</div>
			</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
			<div class="card">
				<img src="laptop1.jpg" class="card-img-top" alt="..." width="200px" height="460px">
				<div class="card-body">
					<h3 class="card-title">Dell G3 3500</h3>
					<p class="card-text">Gaming 15.6inch ( 39.62 cms) 120hz FHD Display Laptop (10th Gen i7-10750H / 8 GB / 512 SSD / GTX 1650 4GB / 1Yr Premium Warranty/ Win 10 + MS Office H&S 2019)</p>
		            <b>Price:Rs. 82,490</b><br><br>	
					<button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
					<input type="hidden" name="Item_Name" value="Dell G3 3500">
					<input type="hidden" name="Price" value="82490">
				</div>
			</div>
			</form>
		</div>
	<div class="col-lg-6">
	<form action="manage_cart.php" method="POST">
		<div class="card">
			<img src="laptop2.jpg" class="card-img-top" alt="..." width="200px" height="500px">
				<div class="card-body">
					<h3 class="card-title">Apple MacBook Pro</h3>
					<p class="card-text"> (16-inch, 16GB RAM, 1TB Storage, 2.3GHz 9th Gen Intel Core i9) - Space Grey</p>
		            <b>Price:Rs. 2,15,990</b><br><br>
					<button type="submit" name="add_to_cart" class="btn btn-primary btn-info">Add to cart</button>
					<input type="hidden" name="Item_Name" value="Apple MacBook Pro">
					<input type="hidden" name="Price" value="215990">
				</div>
		</div>
		</form>
	</div>
</div>
	
<div class="row">
	<div class="col-lg-6">
	<form action="manage_cart.php" method="POST">
		<div class="card">
			<img src="Tv1.jpg" class="card-img-top" alt="..." width="200px" height="500px">
				<div class="card-body">
					<h3 class="card-title">Samsung TV QA65Q90RAKXXL </h3>
					<p class="card-text">Samsung 163 cm (65 Inches) 4K Ultra HD Smart QLED TV QA65Q90RAKXXL (Black) (2019 model)</p>
					<b>Price:Rs. 1,76,690</b><br><br>
					<button type="submit"name="add_to_cart" class="btn btn-primary btn-info">Add to Cart</button>
					<input type="hidden" name="Item_Name" value="Samsung TV QA65Q90RAKXXL">
					<input type="hidden" name="Price" value="176690">
				</div>
		</div>
		</form>
	</div>
	<div class="col-lg-6">
	<form action="manage_cart.php" method="POST">
		<div class="card">
			<img src="Tv2.jpg" class="card-img-top" alt="..." width="200px" height="480px">
				<div class="card-body">
					<h3 class="card-title">Samsung HD Ready Smart LED TV UA32T4350AKXXL</h3>
					<p class="card-text">Samsung 80 cm (32 inches) HD Ready Smart LED TV UA32T4350AKXXL (Glossy Black) (2020 Model)</p>
		            <b>Price:Rs.19,490</b><br><br>
					<button type="submit" name="add_to_cart" name="add_to_cart" class="btn btn-primary btn-info">Add To Cart</button>
					<input type="hidden" name="Item_Name" value="Samsung HD Ready Smart LED TV UA32T4350AKXXL">
					<input type="hidden" name="Price" value="19490">
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
