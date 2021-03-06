<?php
    include("../../config.php");
    // $transaksis = mysqli_query($conn, "SELECT transaksi.id, konsumen.nama, Peruqyah.nama_peruqyah, Peruqyah.no_hp, transaksi.jasa, transaksi.harga FROM transaksi JOIN konsumen ON transaksi.id_konsumen=konsumen.id JOIN Peruqyah ON transaksi.id_peruqyah = Peruqyah.id ");
    $transaksis = mysqli_query($conn, "SELECT * FROM transaksi JOIN konsumen ON transaksi.id_konsumen=konsumen.id JOIN Peruqyah ON transaksi.id_peruqyah = Peruqyah.id ");
?>