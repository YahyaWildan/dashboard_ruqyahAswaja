<?php
    $conn = mysqli_connect("localhost","admin","admin15342","RuqyahApps");
    if($conn){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM konsumen WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $response = array();
        $row = mysqli_num_rows($result);
        if($row > 0){
            array_push($response, array(
                'status' => 'OK'
            ));
        }else{
            array_push($response, array(
                'status' => 'FAILED'
            ));
        }        
    }else{
        array_push($response, array(
            'status' => 'OK'
        ));
    }
    echo json_encode(array("server_response" => $response));
    mysqli_close($conn);
?>