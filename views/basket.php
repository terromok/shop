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
    <div id="cart"></div>
    <div class="container head-of-table"><p>Product Details</p>                                            <p>unite Price</p>           <p>Quantity</p>         <p>shipping</p>         <p>Subtotal</p>         <p>ACTION</p></div>
    <div class="container" id="container-cart">

    <?foreach ($basket as $item):?>

    <div id="item_<?=$item['basket_id']?>" class="product-in-cart">
        <div class="product-details">
            <div class="img-mini"><img src=../img/mini/<?=$item['image']?> alt=""></div>
            <div class="details">
                <h4><?=$item['name']?></h4>
                <p>Color: <span>Red</span></p>
                <p>Size: <span>XII</span></p>
                <button class="delete" id="<?=$item['basket_id']?>">Удалить</button>
            </div>
        </div>
        <div class="unite-price"><p>$<?=$item['price']?></p></div>
        <div class="quantyty"><p><?=$item['quantyty']?></p></div>
        <div class="shop-shipping"><p>free</p></div>
        <div class="Subtotal"><p>$<?=$item['summ_row']?></p></div>
        <div class="ACTION"></div>
    </div>
    <?endforeach;?>


Общая стоимость: <span id="summ">$<?=$summ?></span><br>
<h2>Оформите заказ</h2>
<form action="/order/" method="post">
    <input placeholder="Ваше имя" type="text" name="name">
    <input placeholder="Телефон" type="text" name="phone">
    <input placeholder="Адрес доставки" type="text" name="adres">
    <input type="submit">
</form>
