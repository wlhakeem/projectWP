<HTML>
<link href="view_layout.css" rel="stylesheet" type="text/css">
	<HEAD><TITLE>Approve Booking</TITLE></HEAD>
	<BODY>
	 
	  <?php	    
	     
	     
 
	     require_once ("config.php");
         $ID = $_GET['id'];
		 $status = "Approved";
	     $sql = "update booking set status = '$status' where id='$ID'";

	     $query = mysql_query( $sql );

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>
	   
	   <B> Update was successful</B>
	   <BR><BR>
	   
	   <a href='approval.php?name=<?php session_start();
	                                        echo $_SESSION["NAME"];?>'>Click here to list the table</a>

	</BODY>
	</HTML>
	  