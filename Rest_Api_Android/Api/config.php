<?php
    define('DB_HOST','localhost');
    define('DB_USER','admin');
    define('DB_PASS','admin15342');
    define('DB_NAME','db_api');

    $konek = new Mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die(mysqli_errno($konek));
    
?>