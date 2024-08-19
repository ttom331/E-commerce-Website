<?php

include("connection.php");


$stmt = $con->prepare("SELECT * FROM product where product_Category = 'book'");

$stmt->execute();

$trending_products = $stmt->get_result();


?>