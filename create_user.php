<?php
 
	  include('config.php');


$sql = "CREATE TABLE user
        (
		id int auto_increment,
		name varchar(100),
		telNo varchar(16),
		email varchar(100),
 		username varchar(100),
 		password varchar(12),
		level int(3),
		
		primary key (id)
        )";

if (mysql_query($sql,$conn))
{
  echo "<br />Table User created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($conn);
?>