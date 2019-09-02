<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная страниица</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/js/basket.js"></script>
</head>
<body>
	<div id="login"></div>
	<header class="header" >
		<div class="container header-flex">
			<div class="header-left">
				<a class="brand" href="index.php"><img src="../img/brand.png" alt="brand"><p> bran</p><span>d</span></a>
				<details id="browse">
					<summary>Броуз</summary>
					
					<div class="mega-browse">
						<h3>Women</h3>
						<ul>
							<li><a href="#">Dresses</a></li>
							<li><a href="#">Tops</a></li>
							<li><a href="#">Sweaters/Knits</a></li>
							<li><a href="#">Jackets/Coats</a></li>
							<li><a href="#">Blazers</a></li>
							<li><a href="#">Denim</a></li>
							<li><a href="#">Leggings/Pants</a></li>
							<li><a href="#">Skirts/Shorts</a></li>
							<li><a href="#">Accessories </a></li>
						</ul>
						<h3>Man</h3>
						<ul>
							<li><a href="#">Dresses</a></li>
							<li><a href="#">Blazers</a></li>
							<li><a href="#">Denim</a></li>
							<li><a href="#">Leggings/Pants</a></li>
						</ul>
						
					</div>
				</details>

				<form action="#">
					
					<input type="search">
					<button class="submit" type="submit"><a href="#"><i class="far fa-search"></i></a></button>
				</form>
				
			</div>
			<div class="header-right">
				<!--<?//var_dump($user); die(Что-то не так...)?>-->
				<a href="/basket/"><img src="../img/cart.svg" alt="cart"><span id="counter"><?=$count?></span></a>
				<a class="my-acc" href="/checkout/"><?= $user?></a>
				<p class="totalCart"></p>
			</div>
		</div>
	</header>
	    <nav class="parent-nav">
            <div class="container nav">
            	<?= $menu ?>
                
            </div>
        </nav>
	<div class="the-brand">

        <div class="container brand-img">
            <div class="text-brand">
                <h2>THE BRAND</h2>
                <h3>OF LUXERIOUS <span>FASHION</span></h3>
            </div>
        </div>
    </div>
  

	<?=$content?>

    
    <div class="parr-subscribe">
    	<div class="container subscribe">
    		<img src="../img/face.png" alt="face">
    		<div class="sub-text-left">
    			<p class="sub-p1">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”</p>
    			<h2>Bin Burhan</h2>
    			<p class="sub-p2">Dhaka, Bd</p>
    		</div>
    		<div class="sub-right">
    			<h2>Subscribe</h2>
    			<p>FOR OUR NEWLETTER AND PROMOTION</p>
    			<div class="email-button">
    				<div class="sub-email"><input  id="email" placeholder="Enter Your Email"></div>
    			<div class="sub-button">Subscribe</div>
    			</div>
    		</div>
    	</div>
    </div>

    <footer>
    	<div class="container footer">
   			<div class="brend2">
   				<a class="brand" href="#"><img src="../img/brand.png" lt="brand"><p> bran</p><span>d</span></a>
   				<br>
   				<p>Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships. <br><br>Efficiently plagiarize 24/365 action items and focused infomediaries.Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.</p>
   			</div>
    		<div class="ssulky">
    			<div class="company">
	    			<h1>company</h1>
	    			<br>
	    			<ul>
	    				<li><a href="#">Home</a></li>
	    				<li><a href="#">Shop</a></li>
	    				<li><a href="#">About</a></li>
	    				<li><a href="#">How It Works</a></li>
	    				<li><a href="#">Contact</a></li>
	    			</ul>
	    		</div>
	    		<div class="information">
	    			<h1>INFORMATION</h1>
	    			<br>
	    			<ul>
	    				<li><a href="#">Tearms & Condition</a></li>
	    				<li><a href="#">Privacy Policy</a></li>
	    				<li><a href="#">How to Buy</a></li>
	    				<li><a href="#">How to Sell</a></li>
	    				<li><a href="#">Promotion</a></li>
	    			</ul>
	    		</div>
	    		<div class="category">
	    			<h1>SHOP CATEGORY</h1>
	    			<br>
	    			<ul>
	    				<li><a href="#">Men</a></li>
	    				<li><a href="#">Women</a></li>
	    				<li><a href="#">Child</a></li>
	    				<li><a href="#">Apparel</a></li>
	    				<li><a href="#">Brows All</a></li>
	    			</ul>
	    		</div>
    		</div>
    	</div>
   		<div class="par-copyright">
   			<div class="container copyright">
    		<p>&copy 2017 Brand  All Rights Reserved.</p>
    		<div class="icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-vk"></i></a>
                <a href="#"><i class="fab fa-yandex"></i></a>
                <a href="#"><i class="fab fa-odnoklassniki"></i></a>
            </div>
    	</div>
   		</div>
    </footer>
</body>
</html>