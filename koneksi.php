<?php

$host ='localhost';
$user = 'root';
$pass = 'hadi12345';
$mydb = 'katalog';

$db = new database($host,$user,$pass,$mydb);
$db->connectMysql();
?>
