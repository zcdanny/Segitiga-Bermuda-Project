<?php
    include "../connection.php";
    
    $id = $_GET['id'];
    
    mysqli_query($connection, "DELETE FROM alusista WHERE id_alusista = '$id' ");
    
    header("location:../crud_alusista.php");
?>