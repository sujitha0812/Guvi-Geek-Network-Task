function validateForm() {
	var username = document.getElementById("email").value;
	var password = document.getElementById("upassword").value;

	if (username == "" || password == "") {
		alert("All fields are required.");
		return false;
	} else {
		return true;
	}
}

