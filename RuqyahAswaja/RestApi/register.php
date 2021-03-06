<?php
    // $conn = mysqli_connect("localhost","admin","admin15342","RuqyahApps");
    include('../config.php');

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $sql = "INSERT INTO konsumen(nama, username, password, email)VALUES('$nama','$username','$password','$email')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "Data Inserted";
    }else{
        echo "Failed";
    }
    mysqli_close($conn);      
?>