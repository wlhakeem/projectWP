<HTML>
	<link href="view_layout.css" rel="stylesheet" type="text/css">
	<HEAD><TITLE>Booking Page</TITLE><HEAD>
	<BODY>
	
	<h1>View Booking Page</h1>
	
	 
	 
		<?php
	     require_once ("config.php");
         
	     $query = mysql_query("select * FROM booking where name='$name'");
         
	     if (!$query) die("SQL query error encountered :".mysql_error() );
		 
		?>
		 
		 <!-- Start table tag -->
		<table width="600" border="1" cellspacing="0" cellpadding="3">
		 
		
		<!-- Print table heading -->
		<tr>
		<td align="center"><strong>id</strong></td>
		<td align="center"><strong>Lecturer Name</strong></td>
		<td align="center"><strong>Date</strong></td>
		<td align="center"><strong>Start Time</strong></td>
		<td align="center"><strong>End Time</strong></td>
		<td align="center"><strong>Room No</strong></td>
		<td align="center"><strong>Status</strong></td>
		</tr>

		<?php
		 while ($rows = mysql_fetch_array($query))
			     {
		?>
	     <tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['Date']; ?></td>
			<td><?php echo $rows['startTime']; ?></td>
			<td><?php echo $rows['endTime']; ?></td>
			<td><?php echo $rows['RoomNo']; ?></td>
			<td><?php echo 'Pending'; ?></td>
		</tr>

<?php
	     mysql_close($conn);
	   ?>
	    
		<table>
		
<?php
  echo "<p><a href='logout.php'>LOGOUT</a></p>";
 ?>
 </body>
 </html>