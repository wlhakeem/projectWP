<html>
	<link href="layout.css" rel="stylesheet" type="text/css">
<head><title>Space Manager Page</title><style>
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
	font-family:Arial;

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
if ($_SESSION["LEVEL"] == 3) { ?>
 <br><br>
 <h1><center>Space Booking System<center></h1>
 
 <p><center>Welcome, <?php echo $_SESSION['USER']?>
 <p>You are user level <?php $_SESSION['LEVEL']?>
 <p> Only user level 3 can view this page</a></p><br><br>
 <center><img class="img-circle" src="profile pic.jpg" width=120px height=130px>
 <br><br>
 <p><a href='view_user_profile.php?id=<?php echo $_SESSION['id']; ?>' class='button'>Profile</a>
 <p><a href='approval.php' class='button'>Approval</a>
 <p><a href='user_form.php' class='button'>Report</a>
 </center>
 <?php
 }
  
// If the user is not logged in send him/her to the login form
else if ($_SESSION["LEVEL"] == 2 ) {
	
  echo "<p>Wrong User Level! You are not authorized to view this page</p>";
	 
  
 }
 
  echo "<p><a href='logout.php'><font color='white'><center>LOGOUT</center></a></p>";
 ?>