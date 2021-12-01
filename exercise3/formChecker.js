function checkQuantity (inputValue) {
	if (inputValue == "") {
		alert("Error: a quantity must be entered for each store item (greater than or equal to 0).");
		return false;
	}
	
	else if (inputValue < 0) {
		alert("Error: store item quantities cannot be negative. Please enter 0 or a positive number.");
		return false;
	}
	
	return true;
}

function validate() {
	let isValid = true;
	
	if (!checkQuantity(document.forms["storeForm"]["jelly-legs"].value))
		isValid = false;
	
	if (!checkQuantity(document.forms["storeForm"]["trip"].value))
		isValid = false;
	
	if (!checkQuantity(document.forms["storeForm"]["pepper-breath"].value))
		isValid = false;
	
	alert("isValid = " + isValid);
	return isValid;
}