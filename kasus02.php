<?php
include 'database.php';

$host ='localhost';
$user = 'root';
$pass = '';
$mydb = 'buku';

$database = new database($host,$user,$pass,$mydb);
$database->connectMysql();
echo '<br>';
//$database->addBuku('Pemrograman OOP di PHP','Rosihan','CV. Rosihan',2016);
echo '<br>';/*
if(isset($_GET['op'])){
	if($_GET['op']=='del'){
		$id=$_GET['id'];
		$database->hapusBuku($id);
		
		}
	
	}*/
$database->tampilBuku();
echo $data[1];

//$database->bacaDataBuku('judul','3');
?>
