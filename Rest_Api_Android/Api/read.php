<?php
    include_once 'config.php';

    $query = "SELECT * FROM tb_data";
    $result = mysqli_query($konek, $query);
    $arraydata = array();

    while($row = mysqli_fetch_assoc($result)){
        $arraydata[] = $row;
    }

    echo json_encode($arraydata);
?>