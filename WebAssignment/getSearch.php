<?php

include("connection.php");

//sql statment for selecting all products that are containing the input from the user in the product name. 
$stmt = $con->prepare("SELECT * FROM product where product_Name LIKE '%$search%'");


$stmt->execute();

$get_search = $stmt->get_result();

?>