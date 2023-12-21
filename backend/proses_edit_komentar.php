<?php
    include "../connection.php";

    $id_komentar = $_POST['id_komentar'];
    $id_alusista = $_POST['id_alusista'];
    $komentar = $_POST['komentar'];
    
    $result = mysqli_query($connection, "UPDATE komentar SET komentar = '$komentar' WHERE id_komentar = '$id_komentar' ");
    
    if ($result) {
        echo 
        "<script>
        alert('Berhasil update data!');
        location.href='../alusista_detail.php?id=$id_alusista';
        </script>";
    } else {
        'gagal';
    }
    

//    header("location: ../alusista_detail.php?id=$id_alusista");
