<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Segitiga Bermuda - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3256899f8.js" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
    <div class="container p-3">
        <div class="container-fluid p-5">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <?php
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['message'] ?>
                    </div>
                <?php
                }
                ?>
                <form class="my-5 py-5" action="backend/login_validate.php" method="post">
                    <h1 class="mb-3 text-center">Sign In</h1>


                    <!-- Error Notification -->
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" id="form2Example1" class="form-control" name="email_user" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="password" required />
                    </div>

                    <!-- Submit button -->
                    <input class="btn btn-primary btn-block mb-2" type="submit" name="login" value="Sign In">

                    <!-- Register buttons -->
                    <div class="text-end">
                        <a href="register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>