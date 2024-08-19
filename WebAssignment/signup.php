<?php 
session_start(); # 

// files you want to include
	include("connection.php"); 
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$pass = $_POST['pass'];
        $email = $_POST['email'];

		if(!empty($user_name) && !empty($pass) && !empty($email) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(4); // see function
			$query = "insert into users (customer_ID,username,pass,email) values ('$user_id','$user_name','$pass', '$email')";

			mysqli_query($con, $query); // save

			header("Location: signupSuccess.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
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
                        <h3 class="fw-bold">Sign Up</h3>
                        <p class="text-secondary">Create a new account</p>
                    </div>

                    <!--Form-->
                    <form method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class='bx bx-envelope' ></i>
                            </span>
                            <input type="email" class="form-control form-control-lg fs-6" name="email" placeholder="Email address" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class='bx bx-square-rounded'></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" name="user_name" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class='bx bx-square-rounded'></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" name="pass" placeholder="Password" required>
                        </div>
                        <button class="btn btn-success btn-lg w-100 mb-3">Continue</button>
                    </form>

                    <!--/Form-->

                    <div class="text-center">
                        <small><a href="login.php" class="fw-bold">Go Back</a></small>
                    </div>
                </div>
            </div>
        </div>

        <!--/Right side-->
    </div>
</body>
</html>