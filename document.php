<?php
// Start up your PHP Session
session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") {
header("Location: login.php");
 
 }
?>
<html>
<head>
<title>Document</title>
</head>
<body>
 
 <div align="center">
		<h2>All Logged In User Can View This Page</h2>
	<p>
	
 <?php
 echo '<p>Welcome, '.$_SESSION['USER']; 
 echo '<p>You are user level '.$_SESSION['LEVEL'];
 echo "<p><a href='admin_level.php'>Click here if you are user level 1</a></p>";
 
 if($_SESSION['LEVEL'] == 2)
 {
	 echo "<p>You are Lecturer</p>";
	 echo "<p><a href='lect_level.php'>Click here to proceed to your site</a></p>";
}
	 else if($_SESSION['LEVEL'] == 3)
	 {
		 echo "<p>You are Space Manager</p>";
		  echo "<p><a href='manager_level.php'>Click here to proceed to your site</a></p>";
	 }

 ?>

</form>
</body>
</html>