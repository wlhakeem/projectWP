
	<HTML>
	<link href="view_layout.css" rel="stylesheet" type="text/css">
	<HEAD><TITLE>User's view Data</TITLE><HEAD>
	<BODY>
	<br><br><br><br>
	<h1><center>Your Profile Page</center></h1>
	<br>
	 
	 
		<?php
		
	     include ("config.php");
		
		 $ID = $_GET['id'];
		 
	     // Retrieve data from database
	$sql="SELECT * FROM user WHERE id='$ID'"; 
	$result=mysql_query($sql);
	$rows=mysql_fetch_array($result);

?>
		 
		 <!-- Start table tag -->
		<center><table width="1000" border="1" cellspacing="0" cellpadding="3">
		 
		
		<!-- Print table heading -->
		<tr>
		<td align="center"><strong>Id</strong></td>
		<td align="center"><strong>Name</strong></td>
		<td align="center"><strong>TelNo</strong></td>
		<td align="center"><strong>Email</strong></td>
		<td align="center"><strong>Username</strong></td>
		<td align="center"><strong>Password</strong></td>
		<td align="center"><strong>Role</strong></td>
		<td align="center"><strong>Update</strong></td>
		
		</tr>

		
		
	     <tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['telNo']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><?php echo $rows['level']; ?></td>
			<td align="center"> <a href="update_user_profile_form.php?id=<?php echo $rows['id']; ?>">update</a> </td>
			
		</tr>
		</center>

<?php

	     
	     mysql_close($conn);
	   ?>
	    
	   
	   

	</TABLE>
	
	
   <br><br>
   <?php
  // Start up your PHP Session
 session_start();
   if ($_SESSION["LEVEL"] == 2) { ?>
   <a href='lect_level.php'>Go to Homepage</a>
   <?php
   }
   else if ($_SESSION["LEVEL"] == 3) { ?>
	<a href='manager_level.php'>Go to Homepage</a>
   <?php }?>
	
	</BODY>
	</HTML>