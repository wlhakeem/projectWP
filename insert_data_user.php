	<HTML>
	<HEAD><TITLE>Insert User</TITLE></HEAD>
	<BODY>

	  <?php


		 require_once ("config.php");
		 
		 $name = $_POST["name"]; 
		 $telno = $_POST["telno"]; 
		 $email = $_POST["email"];
		 $userName = $_POST["userName"];       
	     $password = $_POST["password"];      
	     $role = $_POST["role"];  
		 
	     $sql = "INSERT INTO user (id, name, telno, email, username, password, level)VALUES('null', '$name', '$telno', '$email', '$userName', '$password', '$role')";
		 $query = mysql_query($sql);

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>

	<BR><BR>
	<B> Insertion was successful</B>
	<br><br>
	<a href="view_user.php">Click here to view user list</a>
	<BR><BR>
	   

	</BODY>
	</HTML>
