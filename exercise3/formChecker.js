function checkQuantity (inputValue, inputField) {
	if (inputValue == "") {
		alert("Error: a quantity must be entered for the " + inputField + " amount (greater than or equal to 0).");
		return false;
	}
	
	else if (inputValue < 0) {
		alert("Error: the " + inputField + " amount cannot be negative. Please enter 0 or a positive number.");
		return false;
	}
	
	return true;
}
function checkShipSelection (selection) {
	if (selection == "") {
		alert ("Error: a shipping method must be selected");
		return false;
	}
	
	return true;
}

function checkUsername(username) {
	//source for email address format RegEx: https://www.w3resource.com/javascript/form/email-validation.php
	let format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if (username == "") {
		alert ("Error: an email address must be entered in the username field (ex: name@domain.com).");
		return false;
	}
	
	else if (!username.match(format)) {
		alert ("Error: username must match a valid email address format (ex: name@domain.com).");
		return false;
	}
	
	return true;
}

function checkPassword(pass) {
	if (pass == "") {
		alert ("Error: password input field must be filled (can be anything).");
		return false;
	}
	
	return true;
}

function validate() {
	let isValid = true;
	let form = document.forms["storeForm"];
	
	if (!checkQuantity(form["jelly-legs"].value, "Jelly-Legs Jinx"))
		isValid = false;
	
	if (!checkQuantity(form["trip"].value, "Trip Jinx"))
		isValid = false;
	
	if (!checkQuantity(form["pepper-breath"].value, "Pepper Breath Hex"))
		isValid = false;
	
	if (!checkShipSelection(form["shipSelect"].value))
		isValid = false;
	
	if (!checkUsername(form["username"].value))
		isValid = false;
	
	if (!checkPassword(form["pass"].value))
		isValid = false;

	return isValid;
}