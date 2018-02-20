<?php
include 'class_kendaraan.php';

$kereta = new kereta('KA Lokomotif Malang',1500000000);
$kereta->setGerbong(30);
echo 'Jumlah gerbong dari <b>'.$kereta->bacaMerek().
	'</b> yang seharga <b>'.$kereta->bacaHarga().
	'</b> adalah <b>'.$kereta->bacaGerbong().'</b>';



?>
