<?php
    include('../config.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $result = array();
        $result['data'] = array();
        $select = "SELECT * FROM transaksi";
        $response = mysqli_query($conn,$select);

        while($row = mysqli_fetch_assoc($response)){
            $index['id_transaksi'] = $row['id_transaksi'];
            $index['id_konsumen'] = $row['id_konsumen'];
            $index['id_peruqyah'] = $row['id_peruqyah'];
            $index['jasa'] = $row['jasa'];
            $index['harga'] = $row['harga'];
            array_push($result['data'], $index);
        }
         $result['success'] = "1";
        echo json_encode($result);
        mysqli_close($conn); 
    }
?>