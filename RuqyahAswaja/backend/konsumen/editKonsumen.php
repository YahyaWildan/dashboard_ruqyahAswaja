<?php
include_once("../../config.php");
    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email=  $_POST['email'];
        // $foto=$_POST['foto'];
        
        $sql=mysqli_query($conn, "UPDATE konsumen SET nama='$nama',username='$username',password='$password',email='$email' WHERE id=$id");
        var_dump($sql);
        if($sql){
            header("Location: ../../pages/dashboard/index_konsumen.php");

        }
   } 
?>