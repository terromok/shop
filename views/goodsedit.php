<div class="container" id="product-flex">
			
	<?foreach ($goods as $good): ?>
	<div class="parrent-product">
		<a class="product-item" href="/itemedit/<?=$good['id']?>/">
			<img src="../img/<?=$good['image']?>" alt="">
			<p><?=$good['name']?></p>
			<span>$<?=$good['price']?>
			</span>
		</a>
	</div>
	<? endforeach; ?>
</div>