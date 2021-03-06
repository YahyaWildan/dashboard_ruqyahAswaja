<?php
    include('../config.php');

    if($conn){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $konsumen = query("SELECT * FROM konsumen WHERE username = '$username' AND password='$password'");
        
        $result['data'] = array();
        $index = array();
        
        if(mysqli_affected_rows($conn)>0){
            $index['id'] = $konsumen[0]['id'];
            $index['nama'] = $konsumen[0]['nama'];
            array_push($result['data'],$index);
            $result['success'] = '1';
        }else{
            $result['success']='0';
        }
    }else{
        $result['success']='0';
    }
    echo json_encode($result);
    mysqli_close($conn);
?>