function validateForm1() {
	var username = document.getElementById("username").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var confirm_password = document.getElementById("confirm_password").value;

	if (username == "" || email == "" || password == "" || confirm_password == "") {
		alert("All fields are required.");
		return false;
	} else if (password != confirm_password) {
		alert("Passwords do not match.");
		return false;
	} else {
		return true;
	}
}