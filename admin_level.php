<html>
<link href="layout.css" rel="stylesheet" type="text/css">
<head><title>Admin Page</title>
<style>
a{
	display:inline;
}

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

	button:hover,
    .button:hover {
		color: #14c5f5!important;
		box-shadow: inset 0 0 0 2px #14c5f5;
	}
</style>
</head>
</html>
<?php
// Start up your PHP Session
session_start();
if ($_SESSION["LEVEL"] == 1) { 
 
 echo '<p>Welcome, '.$_SESSION['USER']; 
 echo '<p>You are user level '.$_SESSION['LEVEL'];
 echo "<p> Only user level 1 can view this page</a></p>";
 echo "<h1>Space Booking System</h1>";
 echo '<img class="img-circle" src="profile pic.jpg" width=120px height=130px>';
 echo "<br><br>";
 echo "<p><a href='user_form.php' class='button'>Add User</a>";
 echo "<p><a href='approval.php' class='button'>Approval</a>";
 echo "<p><a href='report.php' class='button'>Report</a>";

 }
  
// If the user is not logged in send him/her to the login form
else if ($_SESSION["LEVEL"] != 1) {
	
  echo "<p>Wrong User Level! You are not authorized to view this page</p>";
	 
  
 }
 
  echo "<p><a href='logout.php' class='btn_out'>LOGOUT</a></p>";
 ?>



 
 
 