<?php
    include "../connection.php";

    $nama_alusista = $_POST['nama_alusista'];
    $id_kategori = $_POST['id_kategori'];    
    $lokasi = $_POST['lokasi'];
    $fasilitas = $_POST['fasilitas'];
    $jumlah = $_POST['jumlah'];
    $deskripsi = $_POST['deskripsi'];

    $foto_1 = $_FILES['foto_1']['name'];
    $file_tmp_1 = $_FILES['foto_1']['tmp_name'];

    $foto_2 = $_FILES['foto_2']['name'];
    $file_tmp_2 = $_FILES['foto_2']['tmp_name'];

    $foto_3 = $_FILES['foto_3']['name'];
    $file_tmp_3 = $_FILES['foto_3']['tmp_name'];

    $foto_4 = $_FILES['foto_4']['name'];
    $file_tmp_4 = $_FILES['foto_4']['tmp_name'];

    
    move_uploaded_file($file_tmp_1, '../assets/images/alusista/' . $foto_1);
    move_uploaded_file($file_tmp_2, '../assets/images/alusista/' . $foto_2);
    move_uploaded_file($file_tmp_3, '../assets/images/alusista/' . $foto_3);
    move_uploaded_file($file_tmp_4, '../assets/images/alusista/' . $foto_4);

    
    mysqli_query(
        $connection,
        "INSERT INTO `alusista` (`nama_alusista`, `id_kategori`, `lokasi`, `fasilitas`, `jumlah`, `deskripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`)
        VALUES ('$nama_alusista', '$id_kategori', '$lokasi', '$fasilitas', '$jumlah', '$deskripsi', '$foto_1', '$foto_2', '$foto_3', '$foto_4') ");
    
    header("location:../crud_alusista.php");
?>