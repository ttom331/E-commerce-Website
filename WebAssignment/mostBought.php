<?php

include("connection.php");


$stmt = $con->prepare("SELECT TOP 4 product_ID FROM order_items");

$stmt->execute();

$trending_products = $stmt->get_result();

?>