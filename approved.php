<html>
<link href="view_layout.css" rel="stylesheet" type="text/css">
<head>
<title> Space Manager Page </title>
</head>
<body>

<h2> Space Booking Management System </h2>
<?php
// Start up your PHP Session
session_start();
if ($_SESSION["LEVEL"] != "Space Manager") { 
 
 echo "<p>Wrong User Level! You are not authorized to view this page</p>";
// echo '<p>Welcome, '.$_SESSION['NAME']; 
// echo '<p>You are '.$_SESSION['LEVEL'];
// echo "<p> Only space manager can view this page</a></p>";
}

else if ($_SESSION["LEVEL"] == "Space Manager"){

 require_once("config.php");
 
 $query = mysql_query("select * from booking");
 
 if(!$query) die ("SQL query error encountered:".mysql_error());
 
 
 ?>
 
 <table border="5" cellspacing="0" cellpadding="3">
	<tr>
		<td align="center"> <strong> No </strong> </td>
		<td align="center"> <strong> Lecturer's Name </strong> </td>
		<td align="center"> <strong> Date </strong> </td>
		<td align="center"> <strong> Start time </strong> </td>
		<td align="center"> <strong> End Time </strong> </td>
		<td align="center"> <strong> Room No </strong> </td>
		<td align="center"> <strong> Status </strong> </td>
	</tr>

<?php
	while($row = mysql_fetch_array($query))
	{
?>
 
	<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['name']; ?> </td>
		<td><?php echo $row['Date']; ?> </td>
		<td><?php echo $row['startTime']; ?> </td>
		<td><?php echo $row['endTime']; ?> </td>
		<td><?php echo $row['RoomNo']; ?></td>
		<td><?php echo $row['status']; ?> </td>
<?php
	     }

	     mysql_close($conn);
}
	   ?>

	   </table>

<?php
// If the user is not logged in send him/her to the login form
//else if ($_SESSION["LEVEL"] != "Space Manager") {
	
//  echo "<p>Wrong User Level! You are not authorized to view this page</p>";
// } 
?>

	
<?php
  echo "<p><a href='logout.php'>LOGOUT</a></p>";
 ?>
 </body>
 </html>