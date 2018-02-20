<?php
class kendaraan
{
	protected $jumlahRoda;
	public $warna;
	public $bahanBakar;
	public $harga;
	private $merek;
	
	private function statusHarga()
	{
		if ($this->harga > 50000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;

	}
	
	function setMerek($x)
	{
		$this->merek = $x;
	}
	
	function setHarga($x)
	{
		$this->harga = $x;
	}
	function bacaMerek(){
		return $this->merek;
		
		}
	function bacaHarga(){
		return $this->harga;
		
		}
	function __construct($x,$y){
		$this->merek = $x;
		$this->harga = $y;
		
		}
}
class kereta extends kendaraan{
	public $jmlGerbong;
	
	function setGerbong($x){
			$this->jmlGerbong = $x;
		
		}
	function bacaGerbong(){
			return $this->jmlGerbong;
		}
	
	}
	
class pesawat extends kendaraan{
	private $tinggiMaks;
	private $kecepatanMaks;
	
	function setTinggiMaks($x){
			$this->tinggiMaks = $x;
		}
	function setKecepatanMaks($x){
			$this->kecepatanMaks = $x;
		}
	function bacaTinggiMaks(){
			return $this->tinggiMaks;
		}
	function bacaKecepatanMaks(){
			return $this->kecepatanMaks;
		}
	function biayaOperasional(){
			if($this->tinggiMaks > 5000 && $this->kecepatanMaks >800){
				$biaya=$this->harga*(30/100);
				}elseif($this->tinggiMaks > 3000 || $this->tinggiMaks < 5000 && $this->kecepatanMaks >400 || $this->kecepatanMaks < 800){
					$biaya=$this->harga*(20/100);
					}elseif($this->tinggiMaks < 3000 && $this->kecepatanMaks <500)
					$biaya=$this->harga*(10/100);
					else $biaya=$this->harga*(5/100);
					return $biaya;
		}
	
	}

?>
