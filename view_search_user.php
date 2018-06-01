<HTML>
	<link href="view_layout.css" rel="stylesheet" type="text/css">
	<HEAD><TITLE>User List</TITLE><HEAD>
	<br><br><br><br><br>
	<BODY><center>
	<TABLE BORDER="1">
	   <TR><TH>Id</TH><TH>Name</TH><TH>TelNo</TH><TH>Email</TH><TH>Username</TH><TH>Password</TH><TH>Role</TH></TR>
	  <?php
	     require_once ("config.php");
		 
		 $find=$_POST['name'];

	     $query = mysql_query("SELECT * FROM user WHERE  name LIKE '%$find%'");


	     if (!$query) die("SQL query error encountered :".mysql_error() );

	     while ($record = mysql_fetch_array($query))
	     {
	       echo "<TR align=center>\n";
	       echo "<TD align=left>", $record["id"], "</TD>",
		        "<TD>",    $record["name"],"</TD>",
		        "<TD>",    $record["telNo"],"</TD>",
				"<TD>",    $record["email"],"</TD>",
	            "<TD>",    $record["username"],"</TD>",
				"<TD>",    $record["password"],"</TD>",
	            "<TD>", $record["level"], "</TD>\n";
	       echo "</TR>\n";
	     }

	     mysql_close($conn);
	   ?>
	    
	   
	   

	</TABLE>
	

	
	   <BR><BR>
		<a href="view_user.php"><font color='black'>Click here to view all students</a>
	   <BR><BR>
	   <a href="sort_user.php"><font color='black'>Click here to use view by sort in alphabetical order</a>
	   <BR><BR>
	   <a href="search_user.php"><font color='black'>Click here to use view by search</a>
	</center>
	</BODY>
	</HTML>