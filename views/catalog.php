
	<div class="par-arrivals">
		<div class="container arrivals">
	    	<div class="new-arrivals">
		    	<p>New Arrivals</p>
		    </div>
		    <div class="breadcrums">
		    	<h3>Home / Men /<span>New Arrivals</span>  </h3>
		    </div>
	    </div>
	</div>
	<div class="container nav-product">
		<nav class="sidebar">
			<ul class="sidebar-nav">
				<li><h3>category</h3>
					<div class="mega-sidebar">
						<ul>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Bags</a></li>
							<li><a href="#">Denim</a></li>
							<li><a href="#">Hoodies & Sweatshirts</a></li>
							<li><a href="#">Jackets & Coats</a></li>
							<li><a href="#">Pants</a></li>
							<li><a href="#">Polos</a></li>
							<li><a href="#">Shirts</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="#">Shorts</a></li>
							<li><a href="#">Sweaters & Knits</a></li>
							<li><a href="#">T-Shirts</a></li>
							<li><a href="#">Tanks</a></li>
						</ul>
					</div>
				</li>
				<li><h3>BRAND</h3>
					<div class="mega-sidebar">
						<ul>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Bags</a></li>
							<li><a href="#">Denim</a></li>
							<li><a href="#">Hoodies & Sweatshirts</a></li>
							<li><a href="#">Jackets & Coats</a></li>
							<li><a href="#">Pants</a></li>
							<li><a href="#">Polos</a></li>
							<li><a href="#">Shirts</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="#">Shorts</a></li>
							<li><a href="#">Sweaters & Knits</a></li>
							<li><a href="#">T-Shirts</a></li>
							<li><a href="#">Tanks</a></li>
						</ul>
					</div>
				</li>
				<li><h3>dESIGNER</h3>
					<div class="mega-sidebar">
						<ul>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Bags</a></li>
							<li><a href="#">Denim</a></li>
							<li><a href="#">Hoodies & Sweatshirts</a></li>
							<li><a href="#">Jackets & Coats</a></li>
							<li><a href="#">Pants</a></li>
							<li><a href="#">Polos</a></li>
							<li><a href="#">Shirts</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="#">Shorts</a></li>
							<li><a href="#">Sweaters & Knits</a></li>
							<li><a href="#">T-Shirts</a></li>
							<li><a href="#">Tanks</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
		<div class="product">
			<div class="top-filter">
				<div class="trend">
					<h4>Trending now</h4>
					<p>Bohemian    |    Floral    |    Lace<br> Floral    |    Lace    |    Bohemian</p>
				</div>
				<div class="size">
					<h4>Size</h4>
					<!---<label><input type="checkbox"><p>XXS</p></label>
					<label><input type="checkbox"><p>XS</p></label>
					<label><input type="checkbox"><p>S</p></label>
					<label><input type="checkbox"><p>M</p></label>
					<label><input type="checkbox"><p>L</p></label>
					<label><input type="checkbox"><p>XL</p></label>
					<label><input type="checkbox"><p>XXL</p></label>-->
				</div>
				<div class="price">
					<h4>pRICE</h4>
					<meter min="5" max="70" value="28"> 28 метров</meter>
				</div>
			</div>
			<div class="sort-filter">
				<p>Sort Bhhhhhhhhhhhhhhhhhhhhhhhfffy</p>
			</div>

		<div id="product-flex">
			
			<?foreach ($goods as $good): ?>

			<div class="parrent-product">
				<a class="product-item" href="/item/<?=$good['id']?>/">
					<img src="../img/<?=$good['image']?>" alt="">
					<p><?=$good['name']?></p>
					<span>$<?=$good['price']?>
					</span>
				</a>
				<button class="buy" data-id="<?=$good['id']?>">Купить</button>
			</div>
			<? endforeach; ?>
		</div>
		<div class="pages"></div>

		</div>
	</div>
	<div id="cart"></div>


