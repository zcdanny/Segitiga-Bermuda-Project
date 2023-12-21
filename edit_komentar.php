<?php
include "connection.php";

$id_komentar = $_POST['id_komentar'];
//$komentar = $_POST['komentar'];
/* $id_alusista = $_POST['id_alusista'];
$id_user = $_POST['id_user']; */

$komentar = mysqli_query($connection, "SELECT * FROM komentar WHERE id_komentar = $id_komentar");

$row = mysqli_fetch_assoc($komentar);

/* mysqli_query($connection, "UPDATE komentar SET komentar = '$komentar' WHERE id_komentar = '$id_komentar' ");

header("location:tempat_alusista_detail.php?id=$id_alusista"); */

?>
<div class="mb-3" hidden>
    <label for="id_komentar" class="col-form-label">id_komentar</label>
    <input type="text" class="form-control" name="id_komentar" id="id_komentar" value="<?php echo $row['id_komentar'] ?>" readonly>
</div>
<div class="mb-3" hidden>
    <label for="id_user" class="col-form-label">id_user</label>
    <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $row['id_user'] ?>" readonly>
</div>
<div class="mb-3" hidden>
    <label for="id_alusista" class="col-form-label">id_alusista</label>
    <input type="text" class="form-control" name="id_alusista" id="id_alusista" value="<?php echo $row['id_alusista'] ?>" readonly>
</div>
<div class="mb-3">
    <label for="komentar" class="col-form-label">Silahkan masukkan ulasan</label>
    <textarea class="form-control" id="komentar" name="komentar" style="height: 150px"><?php echo $row['komentar'] ?></textarea>
</div>