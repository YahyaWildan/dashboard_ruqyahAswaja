<?php
    include('../../config.php');

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $sql = "INSERT INTO konsumen(nama, username, password, email)VALUES('$nama','$username','$password','$email')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>alert('Daftar Konsumen Sukses!!!')</script>";
        echo "<script>top.location='../../pages/dashboard/index_konsumen.php'</script>";
    }else{
        echo "<script>alert('Daftar Konsumen Gagal!!!')</script>";
        echo "<script>top.location='../../pages/dashboard/add_konsumen.php'</script>";
    }   
?>