<?php
    include("../config.php");
     #ambil data di tabel dan masukkan ke array
     $query = "SELECT transaksi.id, konsumen.nama, konsumen.email, Peruqyah.nama_peruqyah, Peruqyah.no_hp, Peruqyah.foto FROM transaksi JOIN konsumen ON transaksi.id_konsumen=konsumen.id JOIN Peruqyah ON transaksi.id_peruqyah = Peruqyah.id ";
     $sql = mysqli_query ($conn,$query);
     $data = array();
     while ($row = mysqli_fetch_assoc($sql)) {
         array_push($data, $row);
     }
      
     #setting judul laporan dan header tabel
     $judul = "Laporan Data Transaksi";
     $header = array(
             array("label"=>"ID", "length"=>10, "align"=>"L"),
             array("label"=>"Nama Konsumen", "length"=>30, "align"=>"L"),
             array("label"=>"Email", "length"=>35, "align"=>"L"),
             array("label"=>"Nama Peruqyah", "length"=>50, "align"=>"L"),
             array("label"=>"No HP", "length"=>25, "align"=>"L"),
             array("label"=>"Nama Foto", "length"=>35, "align"=>"L"), 
 
         );
      
     #sertakan library FPDF dan bentuk objek
     require_once("bahan/fpdf.php");
     $pdf = new FPDF();
     $pdf->AddPage();
      
     #tampilkan judul laporan
     $pdf->SetFont('Arial','B','16');
     $pdf->Cell(0,20, $judul, '0', 1, 'C');
      
     #buat header tabel
     $pdf->SetFont('Arial','','10');
     $pdf->SetFillColor(255,0,0);
     $pdf->SetTextColor(255);
     $pdf->SetDrawColor(128,0,0);
     foreach ($header as $kolom) {
         $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
     }
     $pdf->Ln();
      
     #tampilkan data tabelnya
     $pdf->SetFillColor(224,235,255);
     $pdf->SetTextColor(0);
     $pdf->SetFont('');
     $fill=false;
     foreach ($data as $baris) {
         $i = 0;
         foreach ($baris as $cell) {
             $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
             $i++;
         }
         $fill = !$fill;
         $pdf->Ln();
     }
      
     #output file PDF
 
     $pdf->Output();
?>