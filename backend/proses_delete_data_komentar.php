<?php
include "../connection.php";

$id_alusista = $_GET['id_alusista'];
$id_komentar = $_GET['id_komentar'];

mysqli_query($connection, "DELETE FROM komentar WHERE id_komentar = '$id_komentar'");

header("location: ../alusista_detail.php?id=$id_alusista");
