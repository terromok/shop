<?php

function deleteFromBasket($id) {
    $id=(int)$id;
    $session_id = session_id();
    $sql = "DELETE FROM `basket` WHERE `basket`.`id` = {$id} AND `session_id`='$session_id'";
    return executeQuery($sql);
}

function addOneToBasket($id) {
    $id=(int)$id;
    $session_id = session_id();
    $sql = "UPDATE `basket` SET `quantyty`=`quantyty`+1, `summ_row` = `summ_row` + `goods_price` WHERE 
        `session_id`='{$session_id}' AND `id`={$id}";
    executeQuery($sql);
    getBasket();
}

function deleteOneFromBasket($id) {   
    $id=(int)$id;
    $session_id = session_id();
    $sql = "UPDATE `basket` SET `quantyty`=`quantyty`-1, `summ_row` = `summ_row` - `goods_price` WHERE 
        `session_id`='{$session_id}' AND `id`={$id}";
    executeQuery($sql);
    getBasket();
}

function summFromBasket() {
    $session_id = session_id();
    $sql = "SELECT SUM(basket.summ_row) as summ FROM `basket`, `goods` WHERE basket.goods_id=goods.id AND `session_id` ='$session_id'";
    return getAssocResult($sql)[0]['summ'];
}

function getBasket() {
    $session_id = session_id();

    $sql = "SELECT basket.summ_row as summ_row, basket.quantyty as quantyty, basket.id as basket_id, goods.id as good_id, goods.name as name, goods.price as price, goods.image as image FROM `basket`, `goods` WHERE basket.goods_id=goods.id AND `session_id`='{$session_id}'";
    $basket = getAssocResult($sql);
    return $basket;
}

function getEditedRowBasket($id) {
    $session_id = session_id();
    $sql = "SELECT * FROM `basket` WHERE `id`={$id} AND `session_id`='{$session_id}'";
    $basketRow = getAssocResult($sql);
    return $basketRow[0];
}

function getBasketCount() {
    $session_id = session_id();
    $sql = "SELECT COUNT(*) as count FROM `basket` WHERE `session_id`='$session_id'";
    $result = getAssocResult($sql);
    $count = [];
    if (isset($result[0]))
        $count = $result[0];
    return $count['count'];
}

function addToBasket($id) {

    $id = (int)$id;
    $session_id = session_id();
    $sql = "SELECT `price` FROM `goods` WHERE `id`={$id}";
    $price = getAssocResult($sql)[0]['price'];

    $sql = "SELECT `quantyty` FROM `basket` WHERE `session_id`='{$session_id}' AND `goods_id`={$id}";
    $row = getAssocResult($sql);
    //var_dump($row);
    
    $quantyty=$row[0]["quantyty"];
    //если есть увеличим счетчик товара
    if ($quantyty!=null) {
        $sql = "UPDATE `basket` SET `quantyty`=`quantyty`+1, `summ_row` = `summ_row` + {$price} WHERE 
        `session_id`='{$session_id}' AND `goods_id`={$id}";
        return executeQuery($sql);
    }
    else
    {
    //если нет то просто добавим товар в корзину с количеством 1, 
    $sql = "INSERT INTO `basket` (`session_id`, `goods_id`, `goods_price`, `quantyty`, `summ_row`) VALUES ('{$session_id}', '{$id}', '{$price}', 1, '{$price}')";
    return executeQuery($sql);

    };
}