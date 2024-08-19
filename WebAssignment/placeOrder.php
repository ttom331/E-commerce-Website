<?php 
session_start();

include('connection.php');

if(isset($_POST['place_Order'])){


    //get user info and store in database
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $order_Cost = $_SESSION['updatedTotal'];
    $order_Status = "on_hold";
    $customer_ID = $_SESSION['customer_ID'];
    $order_Date = date('Y-m-d H:i:s');

    $stmt1 = $con->prepare("INSERT INTO orders(order_Cost, order_Status, customer_ID, user_Address, order_Date)
    VALUES (?,?,?,?,?);");

    $stmt1->bind_param("isiss", $order_Cost, $order_Status, $customer_ID, $address, $order_Date);

    $stmt1->execute();

    //issue new order and store order information

    $order_ID = $stmt1->insert_id;

    echo $order_ID;

    

    
    //get products from basket
    foreach($_SESSION['basket'] as $key => $value){

        $product = $_SESSION['basket'][$key];
        $product_ID = $product['product_ID'];
        $product_Name = $product['product_Name'];
        $product_Image = $product['product_Image'];
        $product_Price = $product['product_Price'];
        $product_Quantity = $product['product_Quantity'];

         //store each single item in order_items

        $stmt2 = $con->prepare("INSERT INTO order_items(order_ID,product_ID,product_Name,product_Image,product_Price,product_Quantity,customer_ID, order_Date)
                        VALUES (?,?,?,?,?,?,?,?)");
                        
        $stmt2->bind_param('iissiiis', $order_ID,$product_ID,$product_Name,$product_Image,$product_Price, $product_Quantity,$customer_ID,$order_Date);

        $stmt2->execute();
    }






    //remove everything from basket
    //unset($_SESSION['basket']);



    //inform user whether everything is fine or there is a problem
    header('location: payment.php?order_Status=Order placed successfully!');
}





?>