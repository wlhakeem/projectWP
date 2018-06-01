<?php
 
include ("config.php");


$sql = "CREATE TABLE statusbooking
        (
		id int auto_increment,
 		name varchar(100),
 		DateofBooking varchar(12) not null,
		Date varchar (12),
		RoomNo varchar (10),
		startTime varchar(5) not null,
		endTime varchar(5) not null,
		status varchar(10),

 		primary key (id)
        )";

if (mysql_query($sql,$conn))
{
  echo "<br />Table Status created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($conn);
?>