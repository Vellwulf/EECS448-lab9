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
	if (username == "") {
		alert("Error: an email address must be entered in the username field (ex: name@domain.com)");
		return false;
	}
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
	
	alert("isValid = " + isValid);
	return isValid;
}