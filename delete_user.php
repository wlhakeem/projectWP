<HTML>
	<HEAD><TITLE>Delete User</TITLE></HEAD>
	<BODY>
	 
	  <?php	    
	     
	     
		 $ID = $_GET["id"];
 
	     require_once ("config.php");

	     $sql = "delete from user where id = $ID" ;

	     $query = mysql_query( $sql );

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>
	   <B> Delete was successful</B>
	   <BR><BR>
	   <a href="view_user.php">Click here to list the table</a>

	</BODY>
	</HTML>