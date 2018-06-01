<HTML> 
<link href="bookingform_layout.css" rel="stylesheet" type="text/css">
<HEAD>
<TITLE>Add User</TITLE>
</HEAD> 
<BODY>
 


<FORM name="form1" method="POST" action="insert_data_user.php" > 
<FIELDSET>
<LEGEND align="center">User Form</LEGEND>

<TABLE border="0">  
		
	<TR>
		<TD>Name</TD>         
		<TD><INPUT class="input" type="text" name="name" size="10" value=""></TD> 		
	</TR>
	
	<TR>
		<TD>TelNo</TD>         
		<TD><INPUT type="text" name="telno" size="10"></TD>     
	</TR>  
    <TR>
		<TD>Email</TD>         
		<TD><INPUT class="input" type="text" name="email" size="10" value=""></TD>  		
	</TR>    
    <TR>
		<TD>UserName</TD>         
		<TD><INPUT type="text" name="userName" size="10"></TD>     
	</TR>	
	<TR>  
		<TD>Password</TD>   	
		<TD><INPUT type="text" name="password" size="15"></TD>  
	</TR>  
	<TR>   
		<TD>Role</TD>   
		<TD><INPUT type="text" name="role" size="9"></TD>  
	</TR> 
	<TR>   
		<TD></TD>
		<TD align="left"><BR><INPUT type="submit" name="button1" value="Submit"></TD>  
	</TR> 
</TABLE> 
</LEGEND>
</FIELDSET>
</FORM> 
<br><br>
<a href="view_user.php">Click here to view user list</a>
</BODY> 
</HTML> 