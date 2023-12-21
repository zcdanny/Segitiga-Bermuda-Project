<?php
    include "../connection.php";

    $nama_kategori = $_POST['nama_kategori'];
    $foto_kategori = $_FILES['foto_kategori']['name'];
    $file_tmp = $_FILES['foto_kategori']['tmp_name'];
    
    move_uploaded_file($file_tmp, '../assets/images/kategori/' . $foto_kategori);
    
    mysqli_query(
        $connection,
        "INSERT INTO `kategori` (`nama_kategori`, `foto_kategori`)
        VALUES ('$nama_kategori', '$foto_kategori' ) ");
    
    header("location:../crud_categories.php");
    ?>