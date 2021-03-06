<?php
    include('../../config.php');

    
    $nama_peruqyah=$_POST['nama_peruqyah'];
    $no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];
    $foto=gambar();
    if(!$foto){
        return false;
    }
    
    $sql = "INSERT INTO Peruqyah(nama_peruqyah,no_hp,alamat,foto) VALUES('$nama_peruqyah','$no_hp','$alamat','$foto')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>alert('Tambah Peruqyah Sukses!!!')</script>";
        echo "<script>top.location='../../pages/dashboard/index_peruqyah.php'</script>";
    }else{
        echo "<script>alert('Tambah Peruqyah Gagal!!!')</script>";
        echo "<script>top.location='../../pages/dashboard/add_Peruqyah.php'</script>";
    }      
    
        
  
?>