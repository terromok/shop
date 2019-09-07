<div class="container">
	<div class="suda"></div>
    <form method="post">
    	<a><img width="150" src="/img/<?=$good['image']?>" alt=""></a><br>
	    <input type="text" id="name" name="name" placeholder="Наименование товара" value="<?=$good['name']?>"><br>
    	<input type="text" id="description" name="description" placeholder="Описание товара" value="<?=$good['description']?>"><br>
    	<input type="text" id="price" name="price" placeholder="Цена товара" value="<?=$good['price']?>"><br>
    	<input type="submit" 
    			class="itemedit" 
    			id="<?=$good['id']?>" 
    			value="Сохранить" 
    			attr-name="<?=input.name.value?>"
    			attr-description="<?=$good['description']?>"
    			attr-price="<?=$good['price']?>">
	</form>
    <br>
    <a href="http://shop/goodsedit/">Назад в каталог</a>
</div>

