<?php
    include "../connection.php";

    $id = $_GET['id'];
    $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username'];
    $password_user = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email_user = $_POST['email_user'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $role = $_POST['role'];
    $foto_user = $_FILES['foto_user']['name'];
    $file_tmp = $_FILES['foto_user']['tmp_name'];
    
    // JIka Upload Foto Baru
    if (strlen($foto_user) > 0){
        move_uploaded_file($file_tmp, '../assets/images/user/' . $foto_user);

        mysqli_query($connection, "UPDATE user SET nama_user = '$nama_user', username = '$username_user', password = '$password_user', jenis_kelamin = '$jenis_kelamin', 
        email_user = '$email_user', no_telp = '$no_telp', alamat = '$alamat', role = '$role', foto_user = '$foto_user' WHERE id_user = '$id' ");
    }
    
    // Jika Tidak Upload Foto Baru
    else{
        mysqli_query($connection, "UPDATE user SET nama_user = '$nama_user', username = '$username_user', password = '$password_user', jenis_kelamin = '$jenis_kelamin', 
        email_user = '$email_user', no_telp = '$no_telp', alamat = '$alamat', role = '$role' WHERE id_user = '$id' ");
    }
    
    header("location:../crud_user.php");
