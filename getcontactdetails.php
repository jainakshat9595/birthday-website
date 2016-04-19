<?php

require 'db_connect.php';

$message = $_POST['message'];

$db -> query("INSERT INTO contact_us (messg) VALUES ('$message')");
//send mail script to bee added
header('Location: thanks.php?msg=send#q10');

?>
