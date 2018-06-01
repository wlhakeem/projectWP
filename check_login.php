<?php 
// Start up your PHP Session
session_start();

include('config.php');
?>


	<div align="center">
		<h2>Login Fail</h2>
	<p>
	
	
<?php
 

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$sql="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";

$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
$user_name=$rows['username'];
$user_id=$rows['password'];
$user_level=$rows['level'];
$user_name1=$rows['name'];
//$get = mysql_fetch_assoc($sql);
$id=$rows['id'];
	
// mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
 
if($count==1){
		
$_SESSION["Login"] = "YES";
 
// Add user information to the session (global session variables)
$_SESSION['USER'] = $user_name;
$_SESSION['ID'] = $user_id;
$_SESSION['LEVEL'] =$user_level;
$_SESSION['id'] =$id;
$_SESSION['NAME'] = $user_name1;

$expire = time()+60*60*24*30;

setcookie("id",$userID, $expire);

		if($_SESSION["LEVEL"]==1)
		{	header("Location: admin_level.php");	}
		if($_SESSION["LEVEL"]==2)
		{	header("Location: lect_level.php");	}
		if($_SESSION["LEVEL"]==3)
		{	header("Location: manager_level.php");	}
//echo "<h1>You are now correctly logged in</h1>";
//echo "<p><a href='document.php'>Proceed to site</a></p>";
 

}
//if wrong username and password
else {

$_SESSION["Login"] = "NO";
 
echo "<h1>You are NOT correctly logged in </h1>";
echo "<p><a href='document.php'>Link to protected file</a></p>";
}

?>
		 
	  

 
