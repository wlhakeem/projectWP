<HTML>
	<HEAD><TITLE>Insert Booking Info</TITLE></HEAD>
	<BODY>

	  <?php

      session_start();
		 require_once ("config.php");
		 $name = $_SESSION['name'];
		 $DateBook = $_POST["DateBook"]; 
		 $Date = $_POST["Date"];
		 $Room = $_POST["Room"];       
	     $stTime = $_POST["stTime"];      
	     $endTime = $_POST["endTime"];  
		 
	     $sql = "INSERT INTO booking (id, name, DateofBooking, Date, RoomNo, startTime, endTime)VALUES('null', '$name', '$DateBook', '$Date', '$Room', '$stTime', '$endTime')";
		 $query = mysql_query($sql);

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>

	<BR><BR>
	<B> Insertion was successful</B>
	<BR><BR>
	
	<a href="view_booking.php?name=<?php $name;?>"> Click here view your booking list </a>
	   

	</BODY>
	</HTML>
