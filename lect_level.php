<html>
<link href="layout.css" rel="stylesheet" type="text/css">
<head><title>Lecturer Page</title><style>
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
$name = $_SESSION["NAME"];

if ($_SESSION["LEVEL"] == 2) { ?>

<center>
<h1>Space Booking System</h1>
 <p>Welcome, <?php echo $_SESSION['USER']?>
 <p>You are user level <?php echo $_SESSION['LEVEL']?>
 <p> Only user level 2 can view this page</a></p>
 
 <img class="img-circle" src="profile pic.jpg" width=120px height=130px>
 <br><br>
 <p><a href='view_user_profile.php?id=<?php echo $_SESSION['id']; ?>' class='button'>Profile</a>
 <p><a href='bookingform.php' class='button'>Booking</a>
 <p><a href='view_booking.php?name=<?php echo $name;?>' class='button'>Report</a>
</center>
 <?php } 
  
// If the user is not logged in send him/her to the login form
else if ($_SESSION["LEVEL"] == 3) {
	
  echo "<p>Wrong User Level! You are not authorized to view this page</p>";
	 
  
 }
 
  echo "<p><a href='logout.php'><font color='white'><center>LOGOUT</center></a></p>";
 ?>