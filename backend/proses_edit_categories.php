<?php
    include "../connection.php";

    $id = $_GET['id'];
    $nama_kategori = $_POST['nama_kategori'];
    $foto_kategori = $_FILES['foto_kategori']['name'];
    $file_tmp = $_FILES['foto_kategori']['tmp_name'];

    // JIka Upload Foto Baru
    if (strlen($foto_kategori) > 0) {
        move_uploaded_file($file_tmp, '../assets/images/kategori/' . $foto_kategori);

        mysqli_query($connection, "UPDATE kategori SET nama_kategori = '$nama_kategori', foto_kategori = '$foto_kategori' WHERE id_kategori = '$id' ");
    }
    
    // Jika Tidak Upload Foto Baru
    else{
        mysqli_query($connection, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id' ");
    }
    
    header("location:../crud_categories.php");
