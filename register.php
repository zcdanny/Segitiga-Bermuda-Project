<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Register</title>

    <!-- begin :: cdn bootstrap for template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- end :: cdn bootstrap for template -->

    <!-- begin :: cdn bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: cdn bootstrap 5.2 -->

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3256899f8.js" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
    <div class="container-fluid">
        <div class="mx-auto col-10 col-md-8 col-lg-6 my-5">
            <?php
            if (isset($_SESSION['error'])) {
            ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_SESSION['error'] ?>
                </div>
            <?php
            }
            ?>
            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message'] ?>
                </div>
            <?php
            }
            ?>
            <h1 class="text-center">Register</h1>
            <form class="py-5" method="POST" action="backend/proses_register.php">
                <!-- begin :: Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="nama_user">Full Name</label>
                    <input type="text" id="nama_user" name="nama_user" class="form-control" value="<?php echo @$_SESSION['nama_user'] ?>" required />
                </div>
                <!-- end :: Name input -->

                <!-- begin :: jenis_kelamin -->
                <div class=" mb-4">
                    <label for="jenis_kelamin" class="form-label">Gender</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="0" checked <?php if (@$_SESSION['jenis_kelamin'] == '0') {
                                                                                                                    echo 'checked';
                                                                                                                } ?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="1" <?php if (@$_SESSION['jenis_kelamin'] == '1') {
                                                                                                                    echo 'checked';
                                                                                                                } ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <!-- end :: jenis_kelamin -->

                <!-- begin :: Email & no_telp input -->
                <div class="row mb-4">
                    <div class="form-outline col">
                        <label class="form-label" for="email_user">Email address</label>
                        <input type="email" id="email_user" name="email_user" class="form-control" value="<?php echo @$_SESSION['email_user'] ?>" required />
                    </div>

                    <div class="form-outline col">
                        <label class="form-label" for="no_telp">Phone Number</label>
                        <input type="text" id="no_telp" name="no_telp" class="form-control" value="<?php echo @$_SESSION['no_telp'] ?>" required />
                    </div>
                </div>
                <!-- end :: Email & no_telp input -->

                <!-- begin :: alamat input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="alamat">Address</label>
                    <textarea id="alamat" name="alamat" class="form-control" required><?php echo @$_SESSION['alamat'] ?></textarea>
                </div>
                <!-- end :: alamat input -->

                <!-- begin :: username input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?php echo @$_SESSION['username'] ?>" required />
                </div>
                <!-- end :: username input -->

                <!-- begin :: Password & Password confirm input -->
                <div class="row mb-4">
                    <div class="form-outline col-6">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" value="<?php echo @$_SESSION['password'] ?>" required />
                    </div>

                    <div class="form-outline col-6">
                        <label class="form-label" for="confirm_pw">Confirm Password</label>
                        <input type="password" id="confirm_pw" name="confirm_pw" class="form-control" value="<?php echo @$_SESSION['confirm_pw'] ?>" required />
                    </div>
                </div>
                <!-- end :: Password & Password confirm input -->

                <!-- begin :: Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
                <!-- end :: Submit button -->

                <!-- begin :: Register buttons -->
                <div class="text-center mb-5">
                    <p>Have any account <a href="login.php">Login</a></p>
                    <p class="mb-3">or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
                <!-- end :: Register buttons -->
            </form>
        </div>
    </div>

</body>

</html>