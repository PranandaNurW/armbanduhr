<?php 
session_start();

if ( isset($_SESSION["login"])) {
	header("Location: ./index.php");
	exit;
}

require 'functions.php';

if(isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

	//cek username
	if(mysqli_num_rows($result) === 1) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			//set session
			$_SESSION["login"] = true;
			$_SESSION["username"] = $_POST["username"];

			header ("Location: ./index.php");
			exit;
		}
	}

	$error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armbanduhr</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- /bootstrap -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- /font awesome -->

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- /css -->

</head>

<body class="color-second-bg">

    <div class="container-fluid my-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">
    
            <!-- <div class="col-xs"> -->
            
                <div class="card o-hidden border-0 shadow-lg my-5" style="width: 400px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4>ARMBANDUHR</h4>
                                        <h6 class="mb-4">Please Log in</h3>
                                    </div>

                                    <?php if (isset($error)) : ?>
                                        <p class="font-lato font-size-14" style="color: red; font-style: italic; font-weight: bold;">username / password salah</p>
                                    <?php endif; ?> 

                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control"
                                                id="username" required placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control"
                                                id="password" required placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" name="login" class="btn btn-primary btn-block py-2">Log in</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="signup.php">Create An Account</a>
                                    </div>
                                </div>

                            
                    </div>
                </div>

            <!-- </div> -->

        </div> 

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custom js -->
<script src="./index.js"></script>

</body>
</html>