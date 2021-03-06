<?php
    include('../../config.php');

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $sql = "INSERT INTO user(nama, username, password, email)VALUES('$nama','$username','$password','$email')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>alert('Daftar Admin Sukses!!!')</script>";
        echo "<script>top.location='../../pages/dashboard/index_admin.php'</script>";
    }else{
        echo "<script>alert('Daftar Admin Gagal!!!')</script>";
        echo "<script>top.location='../../pages/dashboard/addAdmin.php'</script>";
    }
?>