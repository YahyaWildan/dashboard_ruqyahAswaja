<?php
    $dbHost = 'localhost';
    $dbUser = 'admin';
    $dbPass = 'admin15342';
    $dbName = 'RuqyahApps';
  
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if ($conn->connect_error) {
        echo "Connection Error ".$conn->connect_error;
    }
      
?>