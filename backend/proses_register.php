<?php
session_start();
include "../connection.php";

$nama_user = $_POST['nama_user'];
$username_user = $_POST['username'];
$email = $_POST['email_user'];
$password_user = $_POST['password'];
$confirm_pw = $_POST['confirm_pw'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$role = 'USER';
$foto_user = 'default.jpg';

//validasi jika password & password_confirmation sama
if ($password_user != $confirm_pw) {
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
    $_SESSION['nama_user'] = $_POST['nama_user'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email_user'] = $_POST['email_user'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['confirm_pw'] = $_POST['confirm_pw'];
    $_SESSION['jenis_kelamin'] = $_POST['jenis_kelamin'];
    $_SESSION['no_telp'] = $_POST['no_telp'];
    $_SESSION['alamat'] = $_POST['alamat'];

    header("location:../register.php");
    return;
}

//check apakah user dengan username tersebut ada di table users
$query = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username_user' OR email_user = '$email'");
$row = $query->fetch_array(MYSQLI_ASSOC);
//jika username sudah ada, maka return kembali ke halaman register.
if ($row != null) {
    $_SESSION['error'] = 'Username atau email yang anda masukkan sudah ada di database.';
    $_SESSION['nama_user'] = $_POST['nama_user'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email_user'] = $_POST['email_user'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['confirm_pw'] = $_POST['confirm_pw'];
    $_SESSION['jenis_kelamin'] = $_POST['jenis_kelamin'];
    $_SESSION['no_telp'] = $_POST['no_telp'];
    $_SESSION['alamat'] = $_POST['alamat'];
    header("location:../register.php");
} else {
    //hash password
    //$password = password_hash($password_user, PASSWORD_DEFAULT);
    //username unik. simpan di database.

    if ($jenis_kelamin == 0) {
        $result = mysqli_query($connection, "INSERT INTO `user` (`nama_user`, `username`, `password`, `jenis_kelamin`, `email_user`, `no_telp`, `alamat`, `role`, `foto_user`) VALUES ('$nama_user', '$username_user', '$password_user', 'Pria', '$email', '$no_telp', '$alamat', '$role', '$foto_user')");
    } else if ($jenis_kelamin == 1) {
        $result = mysqli_query($connection, "INSERT INTO `user` (`nama_user`, `username`, `password`, `jenis_kelamin`, `email_user`, `no_telp`, `alamat`, `role`, `foto_user`) VALUES ('$nama_user', '$username_user', '$password_user', 'Wanita', '$email', '$no_telp', '$alamat', '$role', '$foto_user')");
    }

    var_dump($result);
    $_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan email dan password yang sudah dibuat.';
    header("location:../login.php");
}
