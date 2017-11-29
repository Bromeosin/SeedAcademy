// Pop-up enquiry window //

	function div_show() {
	document.getElementById('abc').style.display = "block";
	}

// Validating Empty Field

	function check_empty() {
	if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
	alert("Please fill in all fields!");
	} else {
	document.getElementById('form').submit();
	alert("Thanks! A member of our team will contact you within the next 24 hours!");
	}
	}
	//Function To Display Popup
	function div_show() {
	document.getElementById('abc').style.display = "block";
	}
	//Function to Hide Popup
	function div_hide(){
	document.getElementById('abc').style.display = "none";
	}