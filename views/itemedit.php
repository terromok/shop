

<div class="container">
	<img width="150" src="/img/<?=$good['image']?>" alt=""></a><br>
	<p>Наименование</p><input type="text" name="name" placeholder="" value="<?=$good['name']?>"><br>
    <p>Описание</p><input type="text" name="description" placeholder="" value="<?=$good['description']?>"><br>
    <p>Цена</p><input type="text" name="price" placeholder="fdf" value="<?=$good['price']?>"><br>
    <br>
    <button class="itemedit" id="<?=$good['id']?>">Сохранить изменения</button><hr>
</div>