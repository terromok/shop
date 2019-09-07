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

function itemEdit($id,$name,$description,$price) {  
    //$db = getDb(); 
    //echo $id;
    /*$name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $description = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['description'])));
    $price = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['price'])));*/
    //$name = $name;
    //$description = $_POST['description'];
    //$price = $_POST['price'];
    $sql = "UPDATE `goods` SET `name`='{$name}',`price`='{$price}', `description`='{$description}' WHERE id = {$id}";
    //$sql = "UPDATE `goods` SET `name`= '{$name}' WHERE 1";
    return executeQuery($sql);
    //return getOneGood($id);
    header("Location: /goodedit/{$id}");
    //var_dump($name);
    //echo $description;
    //$sql = "SELECT * FROM goods WHERE id = {$id}";
    //$result = getAssocResult($sql)[0];
    //return $result;
}