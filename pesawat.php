<?php
include 'class_kendaraan.php';

$pesawat = new pesawat('Boeing 737',2000000000);
$pesawat->setTinggiMaks(7500);
$pesawat->setKecepatanMaks(650);

echo 'Biaya operasional pesawat <b>'.$pesawat->bacaMerek().'</b> dengan harga <b>Rp '.$pesawat->bacaHarga().'</b> yang memiliki tinggi
maksimum <b>'.$pesawat->bacaTinggiMaks().'</b> feet dan kecepatan maksimum <b>'.$pesawat->bacaKecepatanMaks().'</b> km/jam adalah <b>Rp. '.$pesawat->biayaOperasional().'</b>';

$pesawat2 = new pesawat('Boeing 747',350000000);
$pesawat2->setTinggiMaks(5800);
$pesawat2->setKecepatanMaks(750);
echo '<br>';
echo 'Biaya operasional pesawat <b>'.$pesawat2->bacaMerek().'</b> dengan 
	harga <b>Rp '.$pesawat2->bacaHarga().'</b> yang memiliki tinggi
	maksimum <b>'.$pesawat2->bacaTinggiMaks().'</b> feet dan 
	kecepatan maksimum <b>'.$pesawat2->bacaKecepatanMaks().'</b> km/jam 
	adalah <b>Rp. '.$pesawat2->biayaOperasional().'</b>';

$pesawat3 = new pesawat('Cassa',750000000);
$pesawat3->setTinggiMaks(3500);
$pesawat3->setKecepatanMaks(500);
echo '<br>';
echo 'Biaya operasional pesawat <b>'.$pesawat3->bacaMerek().'</b> dengan 
	harga <b>Rp '.$pesawat3->bacaHarga().'</b> yang memiliki tinggi
	maksimum <b>'.$pesawat3->bacaTinggiMaks().'</b> feet dan 
	kecepatan maksimum <b>'.$pesawat3->bacaKecepatanMaks().'</b> km/jam 
	adalah <b>Rp. '.$pesawat3->biayaOperasional().'</b>';



?>
