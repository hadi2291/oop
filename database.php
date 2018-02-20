<?php


class database{
	private $dbHost,$dbUser,$dbPass,$dbName;
	
	function __construct($a,$b,$c,$d){
		$this->dbHost = $a;
		$this->dbUser = $b;
		$this->dbPass = $c;
		$this->dbName = $d;
		
		}
	function connectMysql(){
			$s=mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass);
			var_dump($s);
			if(!$s) echo 'Koneksi Modar';
			else
			$db=mysqli_select_db($s,$this->dbName);	
			var_dump($db);
			if(!$db) echo 'Database Gak bisa dibuka';
			else echo 'Database sukses';
		}
	function addBuku($judul,$pengarang,$penerbit,$thnTerbit){
			$query = "INSERT INTO buku2 (judul,pengarang,penerbit,tahunTerbit)
					VALUES('$judul','$pengarang','$penerbit','$thnTerbit')";
			$hasil =mysql_query($query);
			if ($hasil) {
			  echo 'Data buku berhasil ditambahkan';
			 // header('Location: http://localhost/oop/buku.php');
			}else {
			  echo 'Data gagal ditambahkan';
			  header('Location: http://localhost/oop/buku.php');
			}
			header('Location: http://localhost/oop/buku.php');
			exit;
		}
	function tampilBuku(){
		//$s=mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass);
		$query = 'select * from buku';
		$hasil = mysqli_query($s,$query);
		$data[]= mysqli_fetch_array($hasil);
		
		$i=1;
		echo '<table border=1>';
		while($data = mysqli_fetch_array($hasil)){
			echo '<tr><td>'.$i.'</td>
					<td>'.$data['judul'].'</td>
					<td>'.$data['pengarang'].'</td>
					<td>'.$data['penerbit'].'</td>
					<td>'.$data['tahunTerbit'].'</td>
					<td><a href='.$_SERVER['PHP_SELF'].'?page=edit&id='.$data['id'].'>EDIT</a>|
					<a href='.$_SERVER['PHP_SELF'].'?page=del&id='.$data['id'].'>DELETE</a></td></tr>';
			$i++;
			}
		echo '</table>';
		
		}
	function hapusBuku($id){
		$query = 'DELETE FROM buku2 WHERE id='.$id.'';
		//var_dump($query);
		mysql_query($query);
		echo 'Data buku ID '.$id.' sudah dihapus';
				
		}
	function bacaDataBuku($type,$id){
		$query = 'select * from buku2 where id='.$id.'';
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if($type == 'judul') return $data('judul');
		else if($type =='pengarang') return $data('pengarang');
		else if($type =='penerbit') return $data('penerbit');
		else if($type =='thnTerbit') return $data('tahunTerbit');
		
		}
	function updateDataBuku($judul,$pengarang,$penerbit,$thnTerbit){
		$query = 'UPDATE buku2 set judul='.$judul.',pengarang ='.$pengarang.',
			penerbit ='.$penerbit.',tahunTerbit='.$thnTerbit.'';
		mysql_query($query);
		echo 'Data sudah di UPDATE';
		}
	function cariBuku($cari){
		$query = "select * FROM buku2 WHERE judul like '%".$cari."%'";
		var_dump($query);
		$hasil=mysql_query($query);
		$jml=mysql_num_rows($hasil);
		echo 'Pencarian Data buku <b>" '.$cari.' "</b> ada <b>'.$jml.'</b>';
		$i=1;
		echo '<table border=1>';
		while($data = mysql_fetch_array($hasil)){
			echo '<tr><td>'.$i.'</td>
					<td>'.$data['judul'].'</td>
					<td>'.$data['pengarang'].'</td>
					<td>'.$data['penerbit'].'</td>
					<td>'.$data['tahunTerbit'].'</td>
					<td><a href='.$_SERVER['PHP_SELF'].'?page=edit&id='.$data['id'].'>EDIT</a>|
					<a href='.$_SERVER['PHP_SELF'].'?page=del&id='.$data['id'].'>DELETE</a></td></tr>';
			$i++;
			}
		echo '</table>';
		}
		
	}


?>
