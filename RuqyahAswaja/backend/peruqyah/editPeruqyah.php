<?php
include_once("../../config.php");
    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $nama_peruqyah = $_POST['nama_peruqyah'];
        $no_hp = $_POST['no_hp'];
        $alamat=  $_POST['alamat'];
        $fotoLama=$_POST['fotoLama'];
        // $foto = $_POST['foto'];
        if($_FILES['foto']['error']===4){
            $foto = $fotoLama;
            
        }else{
            $foto = gambar();
        }        
        $sql=mysqli_query($conn, "UPDATE Peruqyah SET nama_peruqyah='$nama_peruqyah',foto='$foto',no_hp='$no_hp',alamat='$alamat' WHERE id=$id");
        // var_dump($sql);
        if($sql){
            header("Location: ../../pages/dashboard/index_peruqyah.php");

        }
   } 
?>