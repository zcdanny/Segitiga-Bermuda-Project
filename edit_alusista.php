<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Segitiga Bermuda </title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<?php
include "connection.php";
$id = $_GET["id"];

$alusistadbs = mysqli_query($connection, "SELECT * FROM alusista WHERE id_alusista = '$id' ");

foreach ($alusistadbs as $alusistadb) {
    $nama_alusista = $alusistadb['nama_alusista'];
    $id_kategori = $alusistadb['id_kategori'];
    $lokasi = $alusistadb['lokasi'];
    $fasilitas = $alusistadb['fasilitas'];
    $jumlah = $alusistadb['jumlah'];
    $deskripsi = $alusistadb['deskripsi'];
    $foto_1 = $alusistadb['foto_1'];
    $foto_2 = $alusistadb['foto_2'];
    $foto_3 = $alusistadb['foto_3'];
    $foto_4 = $alusistadb['foto_4'];
}
session_start();

if (!isset($_SESSION['email_user'])) { // Periksa apakah pengguna sudah login
    header("Location: login.php");
    exit();
} else {
    // Jika sudah login
    $userGreeting = '<li class="nav-item"><a class="nav-link" href="#">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
    $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';
}
?>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>Segitiga <em>Bermuda</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Management Data</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item active" href="crud_alusista.php">alusista</a>
                                <a class="dropdown-item" href="crud_user.php">USER</a>
                                <a class="dropdown-item" href="crud_categories.php">CATEGORIES</a>
                            </div>
                        </li>
                        <?php echo $userGreeting; ?>
                        <?php echo $logoutButton; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Form Start -->
    <div class="container-fluid">
        <div class="row px-xl-5 justify-content-center">
            <!-- left column -->
            <div style="margin-top: 9rem;" class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary border-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title mb-0 text-light">EDIT DATA alusista</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="backend/proses_edit_alusista.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama alusista</label>
                                <input type="text" class="form-control" name="nama_alusista" value="<?php echo $nama_alusista; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="id_kategori">
                                    <?php $categorys = mysqli_query($connection, "SELECT * FROM kategori");
                                    foreach ($categorys as $category) { ?>
                                        <option value="<?php echo $category['id_kategori'] ?>" <?php if ($category['id_kategori'] == $id_kategori) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                            <?php echo $category['nama_kategori'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi; ?>">
                            </div>
                            <div class="form-group">
                                <label>Fasilitas</label>
                                <textarea class="form-control" rows="5" name="fasilitas"><?php echo $fasilitas; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Alusista</label>
                                <input type="text" class="form-control" name="jumlah" value="<?php echo $jumlah; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="5" name="deskripsi"><?php echo $deskripsi; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto alusista</label>
                                <input class="form-control" type="file" name="foto_1">
                                <input type="hidden" name="foto_lama_1" value="<?php echo $foto_1; ?>">
                                <label></label>
                                <input class="form-control" type="file" name="foto_2">
                                <input type="hidden" name="foto_lama_2" value="<?php echo $foto_2; ?>">
                                <label></label>
                                <input class="form-control" type="file" name="foto_3">
                                <input type="hidden" name="foto_lama_3" value="<?php echo $foto_3; ?>">
                                <label></label>
                                <input class="form-control" type="file" name="foto_4">
                                <input type="hidden" name="foto_lama_4" value="<?php echo $foto_4; ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up location" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return location" required="">
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return date/time" required="">
                                    </fieldset>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter email address" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>
