<?php
    $konek = mysqli_connect("localhost","admin","admin15342","penjualan");

    $result = array();
    $result['data'] = array();
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($konek, $sql);

    while($row = mysqli_fetch_array($query)){
        $index['kode_barang'] = $row['0'];
        $index['nama_barang'] = $row['1'];
        $index['satuan'] = $row['2'];
        $index['harga'] = $row['3'];
        $index['harga_beli'] = $row['4'];
        $index['stok'] = $row['5'];
        $index['stok_min'] = $row['6'];
        array_push($result['data'],$index);
    }
    $result['success']="1";
    echo json_encode($result);
    mysqli_close($konek);
?>