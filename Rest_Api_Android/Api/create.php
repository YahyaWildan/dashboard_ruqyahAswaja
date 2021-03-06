<?php
    // include_once 'config.php';
    $konek = mysqli_connect("localhost","admin","admin15342","db_api");
    $nama=$_POST['nama'];
    $usia=$_POST['usia'];
    $kota=$_POST['kota'];

    $sql = "INSERT INTO tb_data( nama, usia, kota)VALUES('$nama','$usia','$kota')";

    $query=mysqli_query($konek,$sql);
    if($query){
        echo "Data Inserted";
    }else{
        echo "Failed";
    }
    mysqli_close($konek);
?>