<?php
    include_once 'config.php';
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $usia=$_POST['usia'];
    $kota=$_POST['kota'];

    $sql = "UPDATE tb_data SET nama='$nama',usia='$usia',kota='$kota' WHERE id='$id'";
    $query=mysqli_query($konek,$sql);
?>