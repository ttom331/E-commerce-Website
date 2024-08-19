<?php

session_start();





if (isset($_POST["add_To_Wishlist"])){


  //if user already added product to basket
  if(isset($_SESSION['wishlist'])){

    $products_Array_ids = array_column($_SESSION['wishlist'],"product_ID");
    if(!in_array($_POST['product_ID'], $products_Array_ids)){

      $product_ID = $_POST['product_ID'];
      $product_Name = $_POST['product_Name'];
      $product_Price = $_POST['product_Price'];
      $product_Image = $_POST['product_Image'];
      $product_Quantity = $_POST['product_Quantity'];
  
      $product_Array = array(
        'product_ID' => $product_ID,
        'product_Name'=> $product_Name,
        'product_Price' => $product_Price,
        'product_Image' => $product_Image,
        'product_Quantity' => $product_Quantity
      );
  
      $_SESSION['wishlist'][$product_ID] = $product_Array;


      //product already added
    }else{

      echo '<script>alert("Product already in your wishlist!");</script>';
      //echo '<script>window.location="index.php";</script>';

    }

    //if this is the first product
  }else{

    $product_ID = $_POST['product_ID'];
    $product_Name = $_POST['product_Name'];
    $product_Price = $_POST['product_Price'];
    $product_Image = $_POST['product_Image'];
    $product_Quantity = $_POST['product_Quantity'];

    $product_Array = array(
      'product_ID' => $product_ID,
      'product_Name'=> $product_Name,
      'product_Price' => $product_Price,
      'product_Image' => $product_Image,
      'product_Quantity' => $product_Quantity
    );

    $_SESSION['wishlist'][$product_ID] = $product_Array;



  }

  //calculate total

  
//remove order from basket
}elseif(isset($_POST['remove_Product'])){

  $product_ID = $_POST['product_ID'];
  unset($_SESSION['wishlist'][$product_ID]);



}else if(isset($_POST['edit_Quantity'])){


  //get id and quantity from form
  $product_ID = $_POST['product_ID'];
  $product_Quantity = $_POST['product_Quantity'];

  //get product array from the session
  $product_Array = $_SESSION['wishlist'][$product_ID];

  //update the product quantity 
  $product_Array['product_Quantity'] = $product_Quantity;


  //return array back to its place.
  $_SESSION['wishlist'][$product_ID] = $product_Array;

  //calculate total
  calculateTotalBasket();
  calculateTotalQuantity();




}else{
  //header('location: index.php');

}

function calculateTotalQuantity(){
  global $totalQuantity;
  
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
                <form class="d-flex" role="search" action="search.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>
            <li class="nav-item d-flex mx-4">
                <a class="accountButton" href="account.php" style="text-decoration: none;"><i class="fa-regular fa-user my-3 mx-1"></i>Account</a>
            </li>
            <li class="nav-item d-flex mx-4">
                <a class="wishlistButton" href="wishlist.php" style="text-decoration: none; color: #C50E51; font-weight: 900;"><i class="fa-regular fa-heart my-3 mx-1"></i>Wishlist</a>
            </li>
            <li class="nav-item d-flex mx-4">
                <a class="basketButton" href="basket.php" style="text-decoration: none;"><i class="fa-solid fa-cart-shopping my-3 mx-1"></i>Basket</a>
            </li>
          </div>
        </div>
    </nav>

    <section class="basket container my-5 py-5">
        <div class="container mt-5">
            <h2 class= "font-weight-bold">Your Wishlist</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
            </tr>


            <?php if(isset($_SESSION['wishlist'])) foreach($_SESSION['wishlist'] as $key => $value){ ?>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/<?php echo $value['product_Image']; ?>"/>
                        <div>
                            <p><?php echo $value['product_Name']; ?></p>
                            <small><span>£</span><?php echo $value['product_Price']; ?></small>
                            <br>
                            <form method="POST" action="wishlist.php">
                              <input type = "hidden" name="product_ID" value="<?php echo $value['product_ID'];?>"/>
                              <input type="submit" class="remove-btn" name="remove_Product" value="Remove"/>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>

            <?php } ?>
  

        </table>

    </section>


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
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.57348593182!2d-74.00599512526003!3d40.72586666928451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sBroadway-Lafayette%20St!5e0!3m2!1spl!2spl!4v1624523797308!5m2!1spl!2spl"
          class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

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