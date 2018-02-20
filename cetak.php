<?php
include 'class_kendaraan.php';

$kendaraan = new kendaraan('Honda',70000000);
/*
$kendaraan->setMerek('Toyota Harris');
$kendaraan->setHarga(50000000);
*/
//echo $kendaraan->statusHarga().'<br>';
echo 'Harga dari <b>'.$kendaraan->bacaMerek().'</b> adalah 
		<b>Rp. '.$kendaraan->bacaHarga().'</b>';


?>
