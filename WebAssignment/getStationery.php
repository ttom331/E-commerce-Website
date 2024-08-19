<?php

include("connection.php");
$cat = "All";
$_SESSION['cat'] = $cat;

$stmt = $con->prepare("SELECT * FROM product where product_Category = 'stationery'");

$stmt->execute();

$trending_products = $stmt->get_result();

if(isset($_POST['cat_Pencil'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'pencil'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}elseif(isset($_POST['cat_Pen'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'pen'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}elseif(isset($_POST['cat_Ruler'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'ruler'");

    $stmt->execute();

    $trending_products = $stmt->get_result();
    $cat = 'ruler';
    $_SESSION['cat'] = $cat;


}elseif(isset($_POST['cat_Eraser'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'eraser'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}elseif(isset($_POST['cat_Case'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'pencilCase'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}elseif(isset($_POST['cat_Paper'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'paper'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}elseif(isset($_POST['cat_Glue'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'glue'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}elseif(isset($_POST['cat_Highlighter'])){
    $stmt = $con->prepare("SELECT * FROM product where product_Type = 'highlighter'");

    $stmt->execute();

    $trending_products = $stmt->get_result();

}


?>