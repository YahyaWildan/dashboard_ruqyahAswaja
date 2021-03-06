<?php
    $dbHost = 'localhost';
    $dbUser = 'admin';
    $dbPass = 'admin15342';
    $dbName = 'RuqyahApps';
  
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if ($conn->connect_error) {
        echo "Connection Error ".$conn->connect_error;
    }    
    

    $ip_foto = "http://192.168.43.52/RuqyahAswaja/img/";
    function gambar(){
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        if($error === 4){
            echo "<script>alert('Pilih Foto Dahulu!')</script>";
            return false;
        }
        
        $eksetensiFotoValid = ['jpg','jpeg','png'];
        $ekstensiFoto = explode('.',$namaFile);
        $ekstensiFoto = strtolower(end($ekstensiFoto));

        if(!in_array($ekstensiFoto,$eksetensiFotoValid)){
            echo "<script>alert('Anda bukan mengupload gambar')</script>";
        }

        if($ukuranFile > 1000000){
            echo "<script>alert('Ukuran Foto Terlalu Besar!')</script>";
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .='.';
        $namaFileBaru .=$ekstensiFoto;
        move_uploaded_file($tmpName,'/var/www/RuqyahAswaja/img/'.$namaFileBaru);
        return $namaFileBaru;
    }

    function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
//     <!-- Nama DB : RuqyahApps
// username DB : root
// password : oMyRK$+j\ToLDd3[ -->
}
?>

