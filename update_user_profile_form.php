<HTML>
	<link href="view_layout.css" rel="stylesheet" type="text/css">
	<HEAD><TITLE>Updating User Data</TITLE><HEAD>
	<BODY>
	<center>
	<br><br><br>
	<h1>Update User Data Form</h1>
	</center>
	 
	
	<?php
	     include ("config.php");
		
		 $ID = $_GET['id'];
		 
	     // Retrieve data from database
	$sql="SELECT * FROM user WHERE id='$ID'"; 
	$result=mysql_query($sql);
	$rows=mysql_fetch_array($result);

?>

		 
	 
<center>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_user_profile.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
 
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
		
		<td align="center"><strong>Name</strong></td>
		<td align="center"><strong>TelNo</strong></td>
		<td align="center"><strong>Email</strong></td>
		<td align="center"><strong>Username</strong></td>
		<td align="center"><strong>Password</strong></td>
	
</tr>

<tr>
<td>&nbsp;</td>
<td align="center"><input name="name" type="text" id="name" value="<?php echo $rows['name']; ?>"></td>
<td align="center"><input name="telno" type="text" id="telno" value="<?php echo $rows['telNo']; ?>" size="15"></td>
<td><input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>" size="15"></td>
<td><input name="username" type="text" id="username" value="<?php echo $rows['username']; ?>" size="15"></td>
<td><input name="password" type="text" id="password" value="<?php echo $rows['password']; ?>" size="15"></td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr>
<td><input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"></td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="Submit" value="Submit"></td></tr>
</table>

</form>
</center>
</BODY>
	</HTML>
