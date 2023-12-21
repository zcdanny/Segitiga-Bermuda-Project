<?php
session_start();
include "../connection.php";
if (isset($_POST['email_user']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email_user = validate($_POST['email_user']);
    $password = validate($_POST['password']);

    $sql = "SELECT * FROM user WHERE email_user='$email_user' AND password='$password'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            if ($row['email_user'] === $email_user && $row['password'] === $password) {
                $_SESSION['email_user'] = $row['email_user'];
                $_SESSION['nama_user'] = $row['nama_user'];
                $_SESSION['id_user'] = $row['id_user'];
                // Periksa peran (role) dan arahkan sesuai ke halaman yang sesuai
                if ($row['role'] === 'ADMIN') {
                    header("Location:../crud_user.php");
                } else {
                    header("Location:../index.php");
                }
                exit();
            } else {
                header("Location:../login.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location:../login.php?error=Incorrect Username or Password");
            exit();
        }
    } else {
        // Handle kesalahan eksekusi query
        header("Location:../login.php?error=Database error");
        exit();
    }
}
