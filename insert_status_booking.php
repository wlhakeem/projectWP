<HTML>
	<HEAD><TITLE>Insert Status Booking</TITLE></HEAD>
	<BODY>

	  <?php

      session_start();
		 require_once ("config.php");
		 $name = $_SESSION['NAME'];
		 $DateBook = $_POST["DateBook"]; 
		 $Date = $_POST["Date"];
		 $Room = $_POST["Room"];       
	     $stTime = $_POST["stTime"];      
	     $endTime = $_POST["endTime"];
		 $status = $_POST["status"];
		 
	     $sql = "INSERT INTO statusbooking (id, name, DateofBooking, Date, RoomNo, startTime, endTime, status)VALUES('null', '$name', '$DateBook', '$Date', '$Room', '$stTime', '$endTime', '$status')";
		 $query = mysql_query($sql);

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>

	<BR><BR>
	<B> Insertion was successful</B>
	<BR><BR>
	   

	</BODY>
	</HTML>