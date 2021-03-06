<?php
    include('../config.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $result = array();
        $result['data'] = array();
        $select = "SELECT * FROM Peruqyah";
        $response = mysqli_query($conn,$select);

        while($row = mysqli_fetch_assoc($response)){
            $index['id'] = $row['id'];
            $index['nama_peruqyah'] = $row['nama_peruqyah'];
            $index['no_hp'] = $row['no_hp'];
            $index['alamat'] = $row['alamat'];
            $index['foto'] = $ip_foto.$row['foto'];
            array_push($result['data'], $index);
        }
         $result['success'] = "1";
        echo json_encode($result);
        mysqli_close($conn); 
    }
?>