<!-- to logout -->
<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	unset($_SESSION['basket']);

}

header("Location: login.php");
die;