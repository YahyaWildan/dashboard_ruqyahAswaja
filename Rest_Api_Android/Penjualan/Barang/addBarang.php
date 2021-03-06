<?php
    // include_once 'config.php';
    $konek = mysqli_connect("localhost","admin","admin15342","penjualan");

    $kd_brg=$_POST['kd_brg'];
    $nm_barang=$_POST['nm_barang'];
    $satuan=$_POST['satuan'];
    $harga=$_POST['harga'];
    $harga_beli=$_POST['harga_beli'];
    $stok=$_POST['stok'];
    $stok_min=$_POST['stok_min'];

    $sql = "INSERT INTO barang( kd_brg,nm_barang, satuan, harga, harga_beli, stok, stok_min)VALUES('$kd_brg','$nm_barang','$satuan','$harga','$harga_beli','$stok','$stok_min')";

    $query=mysqli_query($konek,$sql);
    if($query){
        echo "Data Inserted";
    }else{
        echo "Failed";
    }
    mysqli_close($konek);
?>