<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$pass = $_POST['pass'];

		if(!empty($user_name) && !empty($pass) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pass'] === $pass)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

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
                        <h3 class="fw-bold">Log In</h3>
                        <p class="text-secondary">Get access to your account</p>
                    </div>

                    <!--Social login-->
                    <button class="btn btn-lg btn-outline-secondary btn-outline-custom w-100 mb-3"><i class='bx bxl-google text-danger me-1 fs-6'></i>
                        Login with Google
                    </button>
                    <button class="btn btn-lg btn-outline-secondary btn-outline-custom w-100"><i class='bx bxl-facebook text-primary me-1 fs-6'></i>
                        Login with Facebook
                    </button>
                    <!--/social login-->

                    <!--Divider-->
                    <div class="position-relative">
                        <hr class="text-secondary divider">
                        <div class="divider-content-center">or</div>
                    </div>

                    <!--/Divider-->

                    <!--Form-->
                    <form method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class='bx bx-user'></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" name="user_name" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class='bx bx-lock-alt' ></i>
                            </span>
                            <input type="password" class="form-control form-control-lg fs-6" name="pass" placeholder="Password">
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div>
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg w-100 mb-3">Login</button>
                    </form>

                    <!--/Form-->

                    <div class="text-center">
                        <small>Don't have an account? <a href="signup1.html" class="fw-bold">Sign Up</a></small>
                    </div>
                    <div class="text-center">
                        <small><a href="index.html" class="fw-bold">Go Back</a></small>
                    </div>
                </div>
            </div>
        </div>

        <!--/Right side-->
    </div>
</body>
</html>