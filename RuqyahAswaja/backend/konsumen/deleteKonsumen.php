<?php
    include_once('../../config.php');
    $id = $_GET['id'];

    $sql=mysqli_query($conn, "DELETE FROM konsumen WHERE id=$id");
    // var_dump($sql);
    if($sql){
        header("location:../../pages/dashboard/index_konsumen.php");
    }
?>