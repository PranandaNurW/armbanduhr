<?php 
session_start();
if ( isset($_SESSION["login"])) {
    header("Location: ./index.php");
    exit;
}

require 'functions.php';

if(isset($_POST["register"]) ) {

    	if(registrasi($_POST) > 0) {
    		echo "<script>
    				alert('Register Success!')
                    document.location.href = 'login.php';
    			</script>";
    	} else {
    		echo mysqli_error($db);
    	}
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
    <link rel="stylesheet" href="./style.css">
    <!-- /css -->

</head>

<body class="color-second-bg">

    <div class="container-fluid my-5">
        <div class="row justify-content-center">

            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 550px;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control"
                                        id="password" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="repassword" class="form-control"
                                        id="repassword" placeholder="Repeat Password" required>
                                </div>
                            </div>
                            <button type="submit" name="register" class="btn btn-primary btn-block py-2">Sign Up</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <small>Already have an account?</small>
                            <a class="small" href="login.php"> Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custom js -->
<script src="./index.js"></script>

</body>
</html>