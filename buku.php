<!DOCTYPE html>
<?php include 'koneksi.php';
	include 'database.php'; ?>
<html>
<head>
	<title>Buku</title>
	<style>
	body{
		
		}
	#container{
		width:80%;
		margin: 0 auto;
		background-color: LightGoldenRodYellow ;
		padding-top:10%;
		
		}
	.font{
		font-weight: bold;
		}
	</style>	
</head>
<body>
<div id="container">
	<div><a href="<?php echo $_SERVER['PHP_SELF'].'?page=tambah';?>"><input type="button" name="add" value="ADD"></a></div><br>
	<form name="form" method="GET" action="">
	<div>Judul Buku &nbsp;&nbsp;<input type="text" name="cari" size="50px" placeholder="Pencarian buku">
	<input type="submit" name="page" value="cari"></div></form><br>
	<?php
	$page = (isset($_GET['page'])) ? $_GET['page']:"main";
	switch($page){
		case 'tambah' : $db->addBuku('Pemrograman AJAX di PHP','Rosihan','CV. Rosihan',2015); break;
		case 'edit' : include "edit.php";break;
		case 'cari' : if(isset($_GET['page'])){
						
						$cari=$_GET['cari'];
						//echo 'gfhf'.$judul;
						$db->cariBuku($cari);
						
					 };break;
		case 'del' : if(isset($_GET['page'])){
							if($_GET['page']=='del'){
								$id=$_GET['id'];
								$db->hapusBuku($id);
								}							
							};
		case 'main': $db->tampilBuku();
		}
	
	?>

</div>
</body>
</html>
