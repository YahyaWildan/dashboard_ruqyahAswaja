<?php
    include('../../config.php');
        $id_konsumen = $_POST['id_konsumen'];
        $id_peruqyah = $_POST['id_peruqyah'];
        $jasa = $_POST['jasa'];
        $harga = $_POST['harga'];
        // $waktu = time();

        $sql = "INSERT INTO transaksi(id_konsumen,id_peruqyah,jasa,harga)VALUES('$id_konsumen','$id_peruqyah','$jasa','$harga')";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "Data Inserted";
        }else{
            echo "Failed";
        }
        
    mysqli_close($conn);

?>