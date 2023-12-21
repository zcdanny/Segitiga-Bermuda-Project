<?php
session_start();

if (!isset($_SESSION['email_user'])) {
  // Jika belum login
  $id_user = '';
  $loginButton = '<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>';
  $signupButton = '<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>';
  $userGreeting = '';
  $logoutButton = '';
  $reviewButton = '';
} else {
  // Jika sudah login
  $id_user = $_SESSION['id_user'];
  $loginButton = '';
  $signupButton = '';
  $userGreeting = '<li class="nav-item"><a class="nav-link" href="#">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
  $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';
  $reviewButton = '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_ulasan">Tambah Ulasan</button>';
}

include("connection.php");

$id_alusista = $_GET['id'];
$alusista = mysqli_query($connection, "SELECT * FROM alusista WHERE id_alusista = $id_alusista;");
$komentar = mysqli_query($connection, "SELECT komentar.*, user.nama_user, user.foto_user FROM komentar JOIN user ON user.id_user = komentar.id_user WHERE komentar.id_alusista = $id_alusista;");

foreach ($alusista as $value) {
  $nama_alusista = $value['nama_alusista'];
  $id_kategori = $value['id_kategori'];
  $lokasi = $value['lokasi'];
  $fasilitas = $value['fasilitas'];
  $jumlah = $value['jumlah'];
  $deskripsi = $value['deskripsi'];
  $foto_1 = $value['foto_1'];
  $foto_2 = $value['foto_2'];
  $foto_3 = $value['foto_3'];
  $foto_4 = $value['foto_4'];
}
?>

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

  <!-- CDN Bootstrap 5.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item active"><a class="nav-link" href="alusista.php">Alusista</a></li>

            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
              </div>
            </li>


            <?php echo $loginButton; ?>
            <?php echo $signupButton; ?>
            <?php echo $userGreeting; ?>
            <?php echo $logoutButton; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/alusista/<?php echo $foto_1 ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Jumlah : <?php echo number_format($jumlah); ?></h4>

            <h2><?php echo $nama_alusista; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- begin :: deskripsi -->
  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
            <img src="assets/images/alusista/<?php echo $foto_1 ?>" alt="" class="img-fluid" width="100%">
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/alusista/<?php echo $foto_2 ?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/alusista/<?php echo $foto_3 ?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/alusista/<?php echo $foto_4 ?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <p><i class="fa fa-map-marker"></i> <strong><?php echo $lokasi ?></strong></p>
          <br>
          <h4><?php echo $nama_alusista ?></h4>
          <br>
          <h6>Deskripsi</h6>
          <br>
          <p> <?php echo $deskripsi ?> </p>
          <br>
        </div>
      </div>
    </div>
  </div>
  <!-- end :: deskripsi -->

  <!-- begin :: available & price -->
  <div class="section">
    <div class="container">
      <div class="section-heading" style="border: 0">
        <h2>Jumlah</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h6>Jumlah : <?php echo number_format($jumlah); ?> / orang</h6>
        </div>
      </div>
    </div>
  </div>
  <!-- end :: available & price -->

  <!-- begin :: ketentuan & fasilitas -->
  <div class="section">
    <div class="container">
      <div class="section-heading" style="border: 0">
        <h2>Fasilitas</h2>
      </div>
      <ul class="" style="list-style: circle;">
        <?php
        $sql = "SELECT * FROM alusista WHERE id_alusista = $id_alusista";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<ul>";
          $fasilitas_list = explode("\n", $row['fasilitas']);
          foreach ($fasilitas_list as $fasilitas_item) {
            echo "<li>" . trim($fasilitas_item) . "</li>";
          }
          echo "</ul>";
        } ?>
      </ul>
    </div>
  </div>
  <!-- end :: ketentuan & fasilitas -->

  <!-- begin :: komentar -->
  <div class="section">
    <div class="container">
      <div class="section-heading" style="border: 0">
        <h2>Ulasan</h2>
      </div>

      <?php echo $reviewButton ?>

      <!-- begin :: modal add ulasan -->
      <div class="modal fade" id="modal_add_ulasan" tabindex="-1" aria-labelledby="modal_add_ulasan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal_add_ulasan">Tambah Ulasan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="form_add_ulasan" action="backend/proses_add_komentar.php" method="POST">
                <div class="mb-3" hidden>
                  <label for="id_user" class="col-form-label">id_user</label>
                  <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $id_user ?>" readonly>
                </div>
                <div class="mb-3" hidden>
                  <label for="id_alusista" class="col-form-label">id_alusista</label>
                  <input type="text" class="form-control" name="id_alusista" id="id_alusista" value="<?php echo $id_alusista ?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="komentar" class="col-form-label">Silahkan masukkan ulasan</label>
                  <textarea class="form-control" id="komentar" name="komentar" style="height: 150px"></textarea>
                </div>
                <div class="mb-3" hidden>
                  <label for="tgl_komentar" class="col-form-label">tgl_komentar</label>
                  <input type="date" class="form-control" name="tgl_komentar" id="tgl_komentar" value="<?php echo date('Y-m-d') ?>">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end :: modal add ulasan -->

      <?php foreach ($komentar as $key => $value) { ?>
        <div class="down-content">
          <div class="row align-items-center mt-4">
            <div class="col-1 align-self-start">
              <img src="assets/images/user/<?php echo $value['foto_user'] ?>" alt="" width="100%">
            </div>
            <?php if ($value['id_user'] == $id_user) { ?>
              <div class="col-11 border py-3">
                <div class="row">
                  <h6 class="col-10 align-items-center"><?php echo $value['nama_user'] ?></h6>
                </div>
                <p class="n-m"><em>"<?php echo $value['komentar'] ?>"</em></p>
                <p>--- <?php echo date('d, M Y', strtotime($value['tgl_komentar'])) ?></p>
                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_ulasan" onclick="edit_data('<?php echo $value['id_komentar'] ?>')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                  </svg>
                </a>
                <a href="backend/proses_delete_data_komentar.php?id_alusista=<?php echo $value['id_alusista'] ?>&id_komentar=<?php echo $value['id_komentar'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                  </svg>
                </a>
              </div>

              <!-- begin :: modal edit ulasan -->
              <div class="modal fade" id="modal_edit_ulasan" tabindex="-1" aria-labelledby="modal_edit_ulasan" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="modal_edit_ulasan">Tambah Ulasan</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="form_edit_ulasan" action="backend/proses_edit_komentar.php" method="POST">
                      <div class="modal-body" id="modal-body-edit">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- end :: modal edit ulasan -->

            <?php } else { ?>
              <div class="col-11 border py-3">
                <h6><?php echo $value['nama_user'] ?></h6>
                <p class="n-m"><em>"<?php echo $value['komentar'] ?>"</em></p>
                <p>--- <?php echo date('d, M Y', strtotime($value['tgl_komentar'])) ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!-- end :: komentar -->

  <!-- begin :: map & contact -->
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="section-heading">
            <h2>Map</h2>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.514450669144!2d112.7340344741299!3d-7.295949271716189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb97917c2fad%3A0x21b1122d5fe174cc!2sSurabaya%20Zoo!5e0!3m2!1sen!2sid!4v1700706040546!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-md-3">
          <div class="section-heading">
            <h2>Contact Details</h2>
          </div>

          <div class="left-content">
            <p>
              <span>Phone</span>
              <br>
              <strong>
                <a href="tel:+62315678703">+62 31-5678-703</a>
              </strong>
            </p>
            <p>
              <span>Whatsapp</span>
              <br>
              <strong>
                <a href="https://api.whatsapp.com/send?phone=62895379933535&text=Mohon%20Infomasi%20lebih%20lengkap%20mengenai%20paket-paket%20tersebut">
                  +62 8953-7993-3535</a>
              </strong>
            </p>
            <p>
              <span>Instagram</span>
              <br>
              <strong>
                <a href="https://www.instagram.com/kebunbinatangsurabaya/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">kebunbinatangsurabaya</a>
              </strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end :: map & contact -->

  <!-- begin :: form contact -->
  <div class="section">
    <div class="container">
      <div class="section-heading">
        <h2>Any Question? Contact us with form below</h2>
      </div>

      <div class="contact-form">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-sm-12">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name" required="">
              </fieldset>
            </div>

            <div class="col-sm-6">
              <fieldset>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
              </fieldset>
            </div>

            <div class="col-sm-6">
              <fieldset>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required="">
              </fieldset>
            </div>

            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Notes" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="filled-button">Send Request</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end :: form contact -->

  <!-- begin :: footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright © 2023 SegitigaBermuda - Template by: <a href="https://www.phpjabbers.com/">SegitigaBermuda.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end :: footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>

  <!-- begin :: CDN jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- end :: CDN jquery -->

  <!-- begin :: jquery edit data komentar -->
  <script>
    function edit_data(id_komentar) {
      console.log(id_komentar)
      $.ajax({
        method: 'POST',
        url: 'edit_komentar.php',
        data: {
          id_komentar: id_komentar
        },
        success: function(result) {
          $('#modal-body-edit').html(result);
        }
      })
    }
  </script>
  <!-- end :: jquery edit data komentar -->
</body>

</html>