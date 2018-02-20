<html>
<head>
</head>
<body>
	<form name="form" method="GET" action="">
	<div>Judul Buku &nbsp;&nbsp;<input type="text" name="cari" size="50px" placeholder="Pencarian buku">
	<input type="submit" name="page" value="Cari"></div></form><br>
	<?php
	if(isset($_GET['page']))
	echo $_GET['cari'];
	
	
	
	?>
</body>
</html>
