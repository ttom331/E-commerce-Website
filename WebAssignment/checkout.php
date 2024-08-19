<?php
include('connection.php');
include('functions.php');
session_start();

if (!empty($_SESSION["basket"]) && isset($_POST['checkout'])) {
  $discount = 0;
  // Assuming $customer_ID is retrieved from somewhere
  $customer_ID = $_SESSION['customer_ID']; // You need to retrieve this from somewhere

  // Prepare and execute the SQL query to check if the user is in the domain
  $stmt = $con->prepare("SELECT * FROM users WHERE (SUBSTRING_INDEX(email, '@', -1) = 'nhs.net' OR SUBSTRING_INDEX(email, '@', -1) = 'ac.uk') AND customer_ID=?");
  $stmt->bind_param('i', $customer_ID);
  $stmt->execute();
  
  $stmt->bind_param('i', $customer_ID);
  $stmt->execute();

  // Check for errors
  if ($stmt->error) {
      echo "Error executing query: " . $stmt->error;
      exit; // Handle the error gracefully, don't proceed further
  }

  // Fetch the result
  $result = $stmt->get_result();

  // Check if the user is in the domain
  if ($result->num_rows > 0) {
      //echo "User is in the domain."; // Debug output
      // If the user is in the domain, update the discount
      $discount = 10; // New discount (assuming 10%)
      $updateStmt = $con->prepare("UPDATE users SET domain_Discount = ? WHERE customer_ID = ?");
      $updateStmt->bind_param('di', $discount, $customer_ID);
      $updateStmt->execute();

      // Check for errors
      if ($updateStmt->error) {
          echo "Error updating discount: " . $updateStmt->error;
          exit; // Handle the error gracefully, don't proceed further
      }
  } else {
    $discount = 0;
      //echo "User is not in the domain."; // Debug output
  }

  

  $deliveryFee = 0;
  $deliveryAdd = $_SESSION['updatedTotal'];
  $productTotal = $_SESSION['updatedTotal'];
  $_SESSION['productTotal'] = $productTotal;


    if (isset($_POST["location"])){
      $location = $_POST['location'];
      if ($location == 'UK'){
        $location = 'UK';
        $deliveryFee = 0;
        $deliveryAdded = $deliveryFee + $deliveryAdd;
        $_SESSION['deliveryFee'] = $deliveryFee;
        $_SESSION['updatedTotal'] = $deliveryAdded;
      }elseif ($location == 'USA'){
        $location = 'USA';
        $deliveryFee = 7;
        $deliveryAdded = $deliveryFee + $deliveryAdd;
        $_SESSION['deliveryFee'] = $deliveryFee;
        $_SESSION['updatedTotal'] = $deliveryAdded;
      }elseif ($location == 'Germany'){
        $location = 'Germany';
        $deliveryFee = 5;
        $deliveryAdded = $deliveryFee + $deliveryAdd;
        $_SESSION['deliveryFee'] = $deliveryFee;
        $_SESSION['updatedTotal'] = $deliveryAdded;
      }elseif ($location == 'Mexico'){
        $location = 'Mexico';
        $deliveryFee = 10;
        $deliveryAdded = $deliveryFee + $deliveryAdd;
        $_SESSION['deliveryFee'] = $deliveryFee;
        $_SESSION['updatedTotal'] = $deliveryAdded;
      }else{
        $location = 'UK';
        $deliveryFee = 0;
      }
      if ($discount > 0){
        $domainDis = $deliveryAdded /100 *$discount;
        $_SESSION['domainDiscount'] = number_format($domainDis, 2);
        $deliveryAdded = $deliveryAdded - $domainDis;
        $_SESSION['updatedTotal'] = number_format($deliveryAdded, 2);

      }else{
        $domainDis = 0;
        $_SESSION['domainDiscount'] = $domainDis;
      }
      
      $_SESSION['location'] = $location;
    }
    
  



    //send user to home if basket is empty

}else{
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" class="">
    <script src="https://kit.fontawesome.com/e89f7f9e54.js" crossorigin="anonymous"></script>
    <title>Wev Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        section{
            padding: 60px 0;
        }
    </style>
</head>
<body>
    <!--Nav bar -->
    <nav class="navbar navbar-custom bg-light navbar-expand-md">
        <div class="container-fluid py-0">
            <a href="#frontPage" class="navbar-brand"></a>
            <!--toggle for mobile nav-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targets="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!--navbar links-->
            
            <div class="navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item d-flex mx-3 ">
                        <i class="fa-solid fa-circle-info my-3"></i>
                        <a class="nav-link my-1" href="help.php">Help</a>
                    </li>
                    <li class="nav-item d-flex mx-3">
                        <i class="fa-regular fa-heart my-3"></i>
                        <a class="nav-link my-1" href="signout.php">Sign Out</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid align-center">
            <a href="index.php"><img src="assets/logo.jpg" alt="..." height="36"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link mx-3" aria-current="page" href="stationery.php">Stationery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="books.php">Books</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Special Offers
                    </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="bookdeals.php">Book Deals</a></li>
                  <li><a class="dropdown-item" href="stationerydeals.php">Stationery Deals</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="deals">View All</a></li>
                </ul>
                </li>
                <form class="d-flex" role="search" method="POST" action="search.php">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>
            <li class="nav-item d-flex mx-4">
                <a class="accountButton" href="account.php" style="text-decoration: none;"><i class="fa-regular fa-user my-3 mx-1"></i>Account</a>
            </li>
            <li class="nav-item d-flex mx-4">
                <a class="wishlistButton" href="wishlist.php" style="text-decoration: none;"><i class="fa-regular fa-heart my-3 mx-1"></i>Wishlist</a>
            </li>
            <li class="nav-item d-flex mx-4">
                <a class="basketButton" href="basket.php" style="text-decoration: none;"><i class="fa-solid fa-cart-shopping my-3 mx-1"></i>Basket</a>
            </li>
          </div>
        </div>
    </nav>

    <!--Checkout-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Checkout</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="checkout-Form" method="POST" action="placeOrder.php">
                <div class="form-group checkout-small-element">
                    <label>First Name</label>
                    <input type="text" class="form-control" id="checkout-Name" name="name" placeholder="First Name" required/>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="checkout-Email" name="name" placeholder="Last Name" required/>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" id="checkout-Phone" name="phone" placeholder="Phone" required/>
                </div>
                <div class="form-group checkout-small-element">
                    <label>City/Town</label>
                    <input type="text" class="form-control" id="checkout-City" name="city" placeholder="City" required/>
                </div>
                <div class="form-group checkout-large-element">
                    <label>Address</label>
                    <input type="text" class="form-control" id="checkout-Address" name="address" placeholder="Address" required/>
                </div>
                <div class="form-group checkout-btn-container">
                    <p>Delivery Location:<?php echo $_SESSION['location'];?></p>
                    <p>Delivery Fee: £<?php echo $_SESSION['deliveryFee'];?></p>
                    <p>Product Total: £<?php echo $_SESSION['productTotal'];?></p>
                    <p>Email Domain Discount: £<?php echo $_SESSION['domainDiscount'];?></p>
                    <p>Final Amount: £<?php echo $_SESSION['updatedTotal'];?></p>
                    <input type="submit" class="btn" id="checkout-btn" name="place_Order"value="Place Order"/>
                </div>
            </form>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <img src="assets/logo.jpg" alt="..." height="36">
          </h6>
          <p>
            Think Positive, Think Stationery
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Stationery</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Books</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="account.php" class="text-reset">Account</a>
          </p>
          <p>
            <a href="basket.php" class="text-reset">Basket</a>
          </p>
          <p>
            <a href="wishlist.php" class="text-reset">Wishlist</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Yeovil</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Penciluxe@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Bootstrap</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>