<?php
class operasiBilangan{
	private $bilangan1;
	private $bilangan2;
	
	function __construct($x, $y){
		$this->bilangan1 = $x;
		$this->bilangan2 = $y;
		
		}
	function bacaBilangan1(){
		return $this->bilangan1;
		
		}
	function bacaBilangan2(){
		return $this->bilangan2;
		
		}
	function jumlahkan(){
		$hasil = $this->bilangan1 + $this->bilangan2;
		return $hasil;
		}
	function kalikan(){
		$hasil = $this->bilangan1 * $this->bilangan2;
		return $hasil;
		}
	function kurangkan(){
		$hasil = $this->bilangan1 - $this->bilangan2;
		return $hasil;
		}
	function bagikan(){
		$hasil = $this->bilangan1 / $this->bilangan2;
		return $hasil;
		}
	function modulo(){
		$hasil = $this->bilangan1 % $this->bilangan2;
		return $hasil;
		}
	function pangkat(){
		$hasil = $this->bilangan1 ** $this->bilangan2;
		return $hasil;
		}
	}
	

?>
