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
            margin-top:20px;
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
                    <a class="nav-link mx-3" aria-current="page" href="stationery.php" style="color: #C50E51; font-weight: 900;">Stationery</a>
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


    <div class="container" style="background:#C50E51;">
        <section class="section mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7 text-center desc">
                        <h2 class="h1 mb-3">Penciluxe - Help</h2>
                        <p class="mx-lg-8">Find all the information you need here!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon-lg rounded-3 text-white" style="background-color: #C50E51;"><i class="fa fa-question-circle"></i></div>
                                <div class="ps-3 col">
                                    <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="aboutus.php">About Us</a></h5>
                                    <p class="m-0">Support for purchasing products.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon-lg rounded-3 text-white" style="background-color: #C50E51;"><i class="fa fa-id-badge"></i></div>
                                <div class="ps-3 col">
                                    <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="#">Delivery & Collection</a></h5>
                                    <p class="m-0">Information on Penciluxe delvieries and collections</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon-lg rounded-3 text-white" style="background-color: #C50E51;"><i class="fa fa-user"></i></div>
                                <div class="ps-3 col">
                                    <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="#">Your Account</a></h5>
                                    <p class="m-0">Having trouble with your account?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon-lg rounded-3 text-white" style="background-color: #C50E51;"><i class="fa fa-user"></i></div>
                                <div class="ps-3 col">
                                    <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="#">Refunds & Returns</a></h5>
                                    <p class="m-0">View FAQs for refunds and returns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

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
