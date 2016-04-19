<?php
$msg = ''; // To store any error message produced by php
//Host Name : LocalHost
//Username : root
//Password : < blank >
//Database name : frends_db
//$db = new MySQLi('localhost','root','','birth');
$db = new MySQLi('mysql.hostinger.in','u354515825_ad','jain1995','u354515825_birth');
if($db -> connect_error)
{
	$msg = $db -> connect_error;
}
if($msg) { echo "<h>$msg</h>"; }
?>