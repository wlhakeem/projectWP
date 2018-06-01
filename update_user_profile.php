<HTML>
	<HEAD><TITLE>Update User Profile</TITLE></HEAD>
	<BODY>
	 
	  <?php	    
	     
	     $name = $_POST["name"];
	     $telNo = $_POST["telno"];
	     $email = $_POST["email"];
		 $username = $_POST["username"];
		 $password = $_POST["password"];
		 $ID = $_POST["id"];
 
	     require_once ("config.php");

	     $sql = "update user set name = '$name', telNo = '$telNo', email = '$email', username = '$username', password = '$password' where id = '$ID'" ;

	     $query = mysql_query( $sql );

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>
	   
	   <B> Update was successful</B>
	   <BR><BR>
	  
    <a href='view_user_profile.php?id=<?php echo $ID; ?>'>Click here to view your profile</a>
	</BODY>
	</HTML>