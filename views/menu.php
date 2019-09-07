<? if (!$allow):?>
<form action="/login/" method="post">
    <input type='text' name='login' placeholder='Логин'>
    <input type='password' name='pass' placeholder='Пароль'>
    Save? <input type='checkbox' name='save'>
    <input type='submit' name='send'>
</form>
<?else:?>
Добро пожаловать, <?=$user?> <a href='/logout/'>выход</a><br>
<?endif;?>

<!--<a href="/">Главная</a>
<a href="/news/">Новости</a>
<a href="/catalog/">Каталог</a>
<a href="/feedback/">Отзывы</a>
<a href="/basket/">Корзина <span id="counter"><?=$count?></span></a>-->

<ul class="menu">
	<? if ($user == admin) :?>
		<li><a href="/admin/">Админка</a>
			<div class="mega">
				<ul>
					<li><a href="/goodsedit/">Редактор каталога</a></li>
					<!--<li><a href="">Редактор заказов</a></li>-->
				</ul>
			</div>
		</li>
	<?endif;?>
    <li><a href="/">Главная</a></li>
    <li><a href="/feedback/">Отзывы</a></li>
    <li><a href="/catalog/">Man</a>
						<div class="mega">
							<div class="triangle"></div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
						</div>
    </li>
    <li><a href="/catalog/">Women</a>
						<div class="mega">
							<div class="triangle"></div>
							<div class="mega-flex">
								<h3>Women</h3>
								<ul>
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Tops</a></li>
									<li><a href="#">Sweaters/Knits</a></li>
									<li><a href="#">Skirts/Shorts</a></li>
									<li><a href="#">Accessories </a></li>
								</ul>
								<h3>Trololo</h3>
								<ul>
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Tops</a></li>
									<li><a href="#">Sweaters/Knits</a></li>
									<li><a href="#">Skirts/Shorts</a></li>
									<li><a href="#">Accessories </a></li>
								</ul>
							</div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
								<h3>Women</h3>
								<ul>
									<li><a href="#">Dresses</a></li>
								</ul>
							</div>
						</div>
    </li>
    <li><a href="/catalog/">Kids</a>
						<div class="mega">
							<div class="triangle"></div>
							<div class="mega-flex">
								<h3>Women</h3>
								<ul>
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Tops</a></li>
								</ul>
							</div>
							<div class="mega-flex">
								<h3>Women</h3>
								<ul>
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Tops</a></li>
									<li><a href="#">Sweaters/Knits</a></li>
									<li><a href="#">Jackets/Coats</a></li>
									<li><a href="#">Blazers</a></li>
								</ul>
							</div>
						</div>
    </li>
    <li><a href="/catalog/">Accoseriese</a>
						<div class="mega">
							<div class="triangle"></div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
						</div>
    </li>
    <li><a href="/catalog/">Featured</a>
						<div class="mega">
							<div class="triangle"></div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
						</div>
    </li>
    <li><a href="/catalog/">Hot Deals</a>
						<div class="mega">
							<div class="triangle"></div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
							<div class="mega-flex">
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
							</div>
						</div>
    </li>
</ul>
