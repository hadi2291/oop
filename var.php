<?php
class aku{
	// properties dari class
	private $bilangan1;
	private $bilangan2;
	// constructor
	function __construct($x, $y)
	{
	$this->bilangan1 = $x;
	$this->bilangan2 = $y;
	}
	// method untuk membaca properti bilangan1
	function bacaBilangan1()
	{
	return $this->bilangan1;
	}
	// method untuk membaca properti bilangan2
	function bacaBilangan2()
	{
	return $this->bilangan2;
	}
	// method untuk menjumlahkan bilangan1 dan bilangan2
	function jumlahkan()
	{
	$hasil = $this->bilangan1 + $this->bilangan2;
	return $hasil;
	}
	// method untuk mengalikan bilangan1 dan bilangan2
	function kalikan()
	{
	$hasil = $this->bilangan1 * $this->bilangan2;
	return $hasil;
	}
}
// instantisasi dan setting properties
$operasi1 = new aku(4, 5);
// menampilkan hasil penjumlahan
echo '<p>Hasil penjumlahan '.$operasi1->bacaBilangan1().' dan 
'.$operasi1->bacaBilangan2().' adalah '.$operasi1->jumlahkan().'</p>';
// menampilkan hasil perkalian
// menampilkan hasil perkalian
echo '<p>Hasil perkalian '.$operasi1->bacaBilangan1().' dan 
'.$operasi1->bacaBilangan2().' adalah '.$operasi1->kalikan().'</p>';

?>
