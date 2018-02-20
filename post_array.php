<!DOCTYPE html>
<html>
<head><title>POST ARRAY</title>
</head>
<body>
<form name='form' action='' method='GET'>
<input type='text' name=data[] placeholder='data1'><br>
<input type='text' name=data[] placeholder='data2'><br>
<input type='text' name=data[] placeholder='data3'><br>
<input type='submit' name='submit'>

</form>
<?php
if(isset($_GET['submit'])){
	//var_dump($_GET['data']);
	$t=implode(',',$_GET['data']);
	echo $t;
	}


?>
</body></html>
