
function checkdate(input){
	var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
	var returnval=false
	
	if (!validformat.test(input.value))
		alert("Invalid Date Format. Please correct and submit again.")
	else{ //Detailed check for valid date ranges
		var dayfield=input.value.split("/")[0]
		var monthfield=input.value.split("/")[1]
		var yearfield=input.value.split("/")[2]
		var dayobj = new Date(yearfield, monthfield-1, dayfield)
		
			if ((dayobj.getDate()!=dayfield)||(dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield))
				alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
			else
				returnval=true;
	}	
		if (returnval==false) input.select()
		return returnval;
}

function validate(){
	var room = document.getElementById("Room");
	var stTime = document.getElementById("stTime");
	var endTime = document.getElementById("endTime");
	
	if(room.value == ""){
		alert('Please enter the room number.');
		room.focus();
		return false;
	}
	
	if(stTime.value == ""){
		alert('Please enter a correct start time.');
		stTime.focus();
		return false;
	}
	
	if(endTime.value == ""){
		alert('Please enter a correct endtime.');
		endTime.focus();
		return false;
	}
	return true;
}