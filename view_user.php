<HTML>
<link href="view_layout.css" rel="stylesheet" type="text/css">
	<HEAD><TITLE>Viewing User Data</TITLE><HEAD>
	<BODY>
	<br><br>
	<center><h1>View User Data</h1></center>
	
	 
	 
		<?php
	     require_once ("config.php");

	     $query = mysql_query("select * FROM user");

	     if (!$query) die("SQL query error encountered :".mysql_error() );
		 
		?>
		
<center>		
		 <!-- Start table tag -->
		<table width="1000" border="1" cellspacing="0" cellpadding="3">
		 
		
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
		<td align="center"><strong>Delete</strong></td>
		</tr>

		<?php
	     while ($rows = mysql_fetch_array($query))
	     {
		?>
		
	     <tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['telNo']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><?php echo $rows['level']; ?></td>
			<td align="center"> <a href="update_user_form.php?id=<?php echo $rows['id']; ?>">update</a> </td>
			<td align="center"> <a href="delete_user.php?id=<?php echo $rows['id']; ?>">delete</a> </td>
		</tr>

<?php

	     }

	     mysql_close($conn);
	   ?>
	    
	   
	   

	</TABLE>
	
	<BR><BR>
		<a href="user_form.php"><font color='black'>Click here to insert more</a>
		  <BR><BR>
	   <a href="sort_user.php"><font color='black'>Click here to use view by sort in alphabetical order</a>
	   <BR><BR>
	   <a href="search_user.php"><font color='black'>Click here to use view by search</a>
       <BR><BR>
	   <a href="admin_level.php"><font color='black'>Go to homepage</a>
	
	
	</BODY>
	</HTML>
