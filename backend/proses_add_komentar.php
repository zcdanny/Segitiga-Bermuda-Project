<?php
    include "../connection.php";

    $id_alusista = $_POST['id_alusista'];
    $id_user = $_POST['id_user'];    
    $komentar = $_POST['komentar']; 
    $tgl_komentar = $_POST['tgl_komentar'];


    mysqli_query(
        $connection,
        "INSERT INTO `komentar` (`id_alusista`, `id_user`, `komentar`, `tgl_komentar`)
        VALUES ('$id_alusista', '$id_user', '$komentar', '$tgl_komentar') ");
    
    header("location:../alusista_detail.php?id=$id_alusista");
?>