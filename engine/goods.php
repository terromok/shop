<?php

function getOneGood($id) {
    $id = (int)$id;
    $sql = "SELECT * FROM goods WHERE id = {$id}";

    $result = getAssocResult($sql)[0];

    return $result;
}

function getAllGoods() {
    $sql = "SELECT * FROM goods WHERE 1";
    $result = getAssocResult($sql);
    return $result;
}

function itemEdit($id) {  
	$id = int($id);
    $db = getDb(); 
    //$name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));`name`='{$name}',
    //$description = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['description'])));, `description`='{$description
    $price = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['price'])));
    $sql = "UPDATE `goods` SET `price`='{$price}'}' WHERE id = {$id}";
    return executeQuery($sql);
    //$sql = "SELECT * FROM goods WHERE id = {$id}";
    //$result = getAssocResult($sql)[0];
    //return $result;
}