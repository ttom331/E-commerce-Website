<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css" class="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/e89f7f9e54.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="row vh-100 g-0">
        <!--left side-->
        <div class="col-lg-6 position-relative d-none d-lg-block"> <!--d none-image dissaperars on small screens-->
            <div class="bg-holder" style="background-image: url(assets/pencils.jpg);"></div>
        </div>
        <!--/left side-->

        <!--Right side-->
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <!--Logo-->
                    <a href="#" class="d-flex justify-content-center mb-4"><img src="assets/logo.jpg" alt="" width="100">
                    </a>

                    <!--/Logo-->

                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Sign Up</h3>
                        <p class="text-success">Sign up successfull, you will need to sign in.</p>
                    </div>

                    <!--Form-->
                    <form action="#">
                        <a href="login.php" class="btn btn-success btn-lg w-100 mb-3">Continue</a>
                    </form>

                    <!--/Form-->
                </div>
            </div>
        </div>

        <!--/Right side-->
    </div>
</body>
</html>