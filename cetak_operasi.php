<?php
include 'operasi_bilangan.php';

$operasi = new operasiBilangan(2,9);
	
	echo '<p>Hasil Penjumlahan <b>'.$operasi->bacaBilangan1().'</b> dan <b>'.$operasi->bacaBilangan2().'</b> 
		adalah <b>'.$operasi->jumlahkan().'</b></p>';
	echo '<p>Hasil Perkalian <b>'.$operasi->bacaBilangan1().'</b> dan <b>'.$operasi->bacaBilangan2().'</b> 
			adalah <b>'.$operasi->kalikan().'</b></p>';
	echo '<p>Hasil Pengurangan <b>'.$operasi->bacaBilangan1().'</b> dan <b>'.$operasi->bacaBilangan2().'</b> 
			adalah <b>'.$operasi->kurangkan().'</b></p>';
	echo '<p>Hasil Pembagian <b>'.$operasi->bacaBilangan1().'</b> dan <b>'.$operasi->bacaBilangan2().'</b> 
			adalah <b>'.$operasi->bagikan().'</b></p>';
			
	echo '<p>Hasil Modulo <b>'.$operasi->bacaBilangan1().'</b> dan <b>'.$operasi->bacaBilangan2().'</b> 
			adalah <b>'.$operasi->modulo().'</b></p>';
			
	echo '<p>Hasil Pangkat <b>'.$operasi->bacaBilangan1().'</b> dan <b>'.$operasi->bacaBilangan2().'</b> 
			adalah <b>'.$operasi->pangkat().'</b></p>';

?>
