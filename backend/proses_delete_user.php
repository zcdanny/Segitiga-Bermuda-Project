<?php
    include "../connection.php";
    
    $id = $_GET['id'];
    
    mysqli_query($connection, "DELETE FROM user WHERE id_user = '$id' ");
    
    header("location:../crud_user.php");
?>