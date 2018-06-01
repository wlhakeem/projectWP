<?php


$db = 'db_wenm';

$conn = mysql_connect('localhost', 'wenm', 'a15cs0212');
if(!$conn)die("Error! Cannot connect to server: " . mysql_error());
$selected = mysql_select_db($db,$conn);
if(!$selected) die("Cannot use database: " . mysql_error());
	?>