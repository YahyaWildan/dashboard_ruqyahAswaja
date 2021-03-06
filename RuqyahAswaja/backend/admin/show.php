<?php
    include("../../config.php");
    $admins = mysqli_query($conn, "SELECT * FROM user");
?>