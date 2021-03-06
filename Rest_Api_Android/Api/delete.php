<?php
    include_once 'config.php';

    $id = $_GET['id'];

    $sql=mysqli_query($konek, "DELETE FROM tb_data WHERE id=$id");
   
?>