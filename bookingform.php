<HTML>
<link href="bookingform.css" rel="stylesheet" type="text/css">
<HEAD>
<TITLE> Room Booking Form </TITLE>
<script type="text/javascript" src="booking_validation.js"></script>
</HEAD>
<BODY>
<FORM name="form2" method="POST" action="insert_booking_form.php" onsubmit="return checkdate(this.DateBook) && checkdate(this.Date) && validate()">
	<FIELDSET>
		<LEGEND align="center">Room Booking Form </LEGEND>
			<TABLE border="0">
				<TR>
					<TD>Lecturer Name:</TD>
					<TD><?php session_start();
							  echo $_SESSION['NAME'];?></TD>
				</TR>
				<TR>
					<TD>Date of Booking: </TD>
					<TD><INPUT type="text" name="DateBook" id="DateBook" size="10"></TD>
				</TR>
				<TR>
					<TD>Date(dd/mm/yyyy):</TD>
					<TD><INPUT type="text" name="Date" id="Date" size="10"></TD>
				</TR>
				<TR>
					<TD>Room No : </TD>
					<TD><INPUT type="text" name="Room" id="Room" size="10" style="text-transform:uppercase;"></TD>
				</TR>
				<TR>
					<TD>Starting Time (in 24 Hours format):</TD>
					<TD><INPUT type="text" name="stTime" id="stTime" size="5"></TD>
				</TR>
				<TR>
					<TD>End Time (in 24 Hours format): </TD>
					<TD><INPUT type="text" name="endTime" id="endTime" size="5"></TD>
				</TR>
				
				<TR>
					<TD></TD>
					<TD align="left"><BR><INPUT type="submit" name="button2" value="Submit"></TD>
				</TR> 
			</TABLE>
		</LEGEND>
	</FIELDSET>
</FORM>
</BODY>
</HTML>