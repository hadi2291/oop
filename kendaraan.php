<?php
class kendaraan{
	var $jmlRoda;
	var $warna;
	var $harga;
	var $bahan_bakar;
	var $merk;
	var $tahun_pembuatan;
	//var $status;
	
	function dapatSubsidi(){
		if($this->bahan_bakar=='premium' && $this->tahun_pembuatan <= 2005) $status='Ya';
		else $status='Tidak';
		return $status;
		
		} 
	function hargaSecond(){
		if($this->tahun_pembuatan > 2005){
			$status=$this->harga - ($this->harga *(20/100));
			}elseif($this->tahun_pembuatan >=2000 && $this->tahun_pembuatan <=2005) 
			$status = $this->harga - ($this->harga*(30/100));
			else $status=$this->harga - ($this->harga*(40/100));
			return $status;
		}
	function setHarga($x){
		$harga=$this->harga=$x;
		return $harga;
		
		}
	function setBakar($x){
		$bakar=$this->bahan_bakar=$x;
		return $bakar;
		}
	function setTahun($x){
		$tahun=$this->tahun_pembuatan=$x;
		return $tahun;
		}
	function setMerk($x){
		$merk=$this->merk=$x;
		return $merk;
		}
	function setWarna($x){
		$warna=$this->warna=$x;
		return $warna;
		}
	function setJmlRoda($x){
		$roda=$this->jmlRoda=$x;
		return $roda;
		}
	
	}
	
	$kendaraan=new kendaraan;
	
	//Alternative recomdasi oop
	$kendaraan->setHarga(50000000);
	$kendaraan->setBakar('premium');
	$kendaraan->setTahun(2012);
	echo 'Subsidi : <b>'.$kendaraan->dapatSubsidi().'</b><br>';
	echo 'Harga Kendaraan : <b>'.$kendaraan->hargaSecond().'</b>';
	echo '<br>--------------------------------------------------<br>';

	
	$kendaraan2= new kendaraan();
	/*
	$kendaraan->harga=30000000;
	$kendaraan->bahan_bakar='premium';
	$kendaraan->tahun_pembuatan=2008;
	*/
	// Alternative recomdasi oop
	
	echo 'Merk = <b>'.$kendaraan2->setMerk('Toyota Yaris').'</b><br>Jumlah Roda : <b>'.$kendaraan2->setJmlRoda(4).'</b><br>
			Harga : <b>'.$kendaraan2->setHarga(160000000).'</b><br>Warna : <b>'.$kendaraan2->setWarna('Merah').'</b><br>
			Bahan Bakar : <b>'.$kendaraan2->setBakar('Premium').'</b><br>Tahun : <b>'.$kendaraan2->setTahun(2012).'</b><br>';
	echo 'Subsidi : <b>'.$kendaraan2->dapatSubsidi().'</b><br>';
	echo 'Harga Kendaraan : <b>'.$kendaraan2->hargaSecond().'</b>';
	echo '<br>--------------------------------------------------<br>';
	
	$kendaraan3=new kendaraan;
	
	//Alternative recomdasi oop
	$a='Honda Scoopy';
	$b=2;
	$c=130000000;
	$d='Putih';
	$e='Premium';
	$f=2010;
	$kendaraan3->setMerk($a);
	$kendaraan3->setJmlRoda($b);
	$kendaraan3->setHarga($c);
	$kendaraan3->setWarna($d);
	$kendaraan3->setBakar($e);
	$kendaraan3->setTahun($f);
	echo 'Merk = <b>'.$a.'</b><br>Jumlah Roda : <b>'.$b.'</b><br>
			Harga : <b>'.$c.'</b><br>Warna : <b>'.$d.'</b><br>
			Bahan Bakar : <b>'.$e.'</b><br>Tahun : <b>'.$f.'</b><br>';
	
	echo 'Subsidi : <b>'.$kendaraan3->dapatSubsidi().'</b><br>';
	echo 'Harga Kendaraan : <b>'.$kendaraan3->hargaSecond().'</b>';
	echo '<br>--------------------------------------------------<br>';

	$kendaraan4=new kendaraan;
	
	//Alternative recomdasi oop
	$kendaraan4->setMerk('Isuzu Panther');
	$kendaraan4->setJmlRoda(4);
	$kendaraan4->setHarga(170000000);
	$kendaraan4->setWarna('Hitam');
	$kendaraan4->setBakar('Pertamax');
	$kendaraan4->setTahun(2012);

	echo 'Subsidi : <b>'.$kendaraan4->dapatSubsidi().'</b><br>';
	echo 'Harga Kendaraan : <b>'.$kendaraan4->hargaSecond().'</b>';
	echo '<br>--------------------------------------------------<br>';
?>
