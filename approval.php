<html>
<link href="view_layout.css" rel="stylesheet" type="text/css">
<head>
<title> Space Approvement Page </title>
<style>
.button {
    display: block;
    width: 115px;
    height: 25px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
font-weight: bold;}
</style>
</head>
<body>
<center>
<h2> Space Approvement </h2>
<?php
 require_once("config.php");
 
 $query = mysql_query("select * from booking");
 
 if(!$query) die ("SQL query error encountered:".mysql_error());
 
 
 ?>
 
 <table border="5" cellspacing="0" cellpadding="3">
	<tr>
		<td align="center"> <strong> Id </strong> </td>
		<td align="center"> <strong> Lecturer's Name </strong> </td>
		<td align="center"> <strong> Date </strong> </td>
		<td align="center"> <strong> Start time </strong> </td>
		<td align="center"> <strong> End Time </strong> </td>
		<td align="center"> <strong> Room No </strong> </td>
		<td align="center"> <strong> Status </strong> </td>
		<td colspan="2" align="center"> <strong> Approvement </strong> </td>
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
		<td><p><a href='approve_booking.php?id=<?php echo $row['id']; ?>' class='button'>Approve</a></td>
		<td><p><a href='reject_booking.php?id=<?php echo $row['id']; ?>' class='button'>Reject</a></td>
		
		
		
<?php
         
		  
	}

	     mysql_close($conn);

	   ?>
       </FORM>
	   </table>
       <br><br>
<?php
  // Start up your PHP Session
 session_start();
   if ($_SESSION["LEVEL"] == 1) { ?>
   <a href='admin_level.php'>Go to Homepage</a>
   <?php
   }
   else if ($_SESSION["LEVEL"] == 3) { ?>
	<a href='manager_level.php'>Go to Homepage</a>
   <?php }?>

	
<?php
  echo "<p><a href='logout.php'>LOGOUT</a></p>";
  
 ?>
  <BR><BR>
	   <a href="sort_approval.php">Click here to use view by sort Room No in alphabetical order</a>
	   <BR><BR>
	   <a href="search_approval.php">Click here to search by Lecturer's name</a>
       <BR><BR>
	   </center>
 </body>
 </html>