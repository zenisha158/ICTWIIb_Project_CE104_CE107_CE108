<?php
session_start();
?>
<html>
<head>
<title>Welcome To our Website</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar">
	<ul class="web-site-name">
	       3'S.com
		<li class="link">
			<a href="signup.php">Sign Up</a>
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
			<a href="#catagories">Catagories</a>
		</li>	
	</ul>
</nav>
<div class="content">
	<div class="image">
	   <div class="info">
           <center>
				<h1>"We sell Best Product.."</h1>
				<p>"Flat 40% OFF on premium brands.."</p>
				<a href="#"class="button">Shop Now</a>
             </center>
        </div>
	</div>	
	<div class="catagories" id="catagories">
	<h1 class="cat">Catagories</h1>
		<div class="items">
			<a href="electronics.php">
			<div class="caption">
				<h2>Electronics</h2>
				<img src="electronics.jpg" class="thumbnail">
				<p>Original Electronics From The Best Brand.</p>
			</div>	
			</a>
		</div>
		<div class="items">
			<a href="clothes.php">
			<div class="caption">
				<h2>Clothes</h2>
			    <img src="clothes.jpg" class="thumbnail">
				<p>Designer Clothes From The Best Brand.</p>
			</div>	
			</a>
		</div>
		<div class="items">
			<a href="jewellery.php">
			<div class="caption">
				<h2>Jewellery</h2>
				<img src="jewellery.jpg" class="thumbnail">
				<p>Original Jewellery From The Best Brand.</p>
			</div>	
			</a>
		</div>
	</div>
</div>
<center>
<footer>
		<div class="container">
			<p>Copyrights @Virtual Store.All Rights Reseverd | Contact Us:+91 1234567890</p>
		</div>
</footer>
</center>
</body>
</html>