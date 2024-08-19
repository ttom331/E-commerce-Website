<?php

include("connection.php");


$stmt = $con->prepare("SELECT * FROM product LIMIT 4");  //limit of 4 products to be taken in array

$stmt->execute();

$trending_products = $stmt->get_result();

?>