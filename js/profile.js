function validateForm2() {
	var email = document.getElementById("email").value;
	var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var dob = document.getElementById("dob").value;
    var age = document.getElementById("age").value;
    var contact = document.getElementById("contact").value;

	if (email == "" || fname == "" || lname == "" || dob == "" || age == "" || contact == "") {
		alert("All fields are required.");
		return false;
	} else {
		return true;
	}
}

