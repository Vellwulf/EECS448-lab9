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
function checkShipSelection (selection) {
	if (selection == "") {
		alert ("Error: a shipping method must be selected");
		return false;
	}
	
	return true;
}

function validate() {
	let isValid = true;
	let form = document.forms["storeForm"];
	
	if (!checkQuantity(form["jelly-legs"].value))
		isValid = false;
	
	if (!checkQuantity(form["trip"].value))
		isValid = false;
	
	if (!checkQuantity(form["pepper-breath"].value))
		isValid = false;
	
	if (!checkShipSelection(form["shipSelect"].value))
		isValid = false;
	
	alert("isValid = " + isValid);
	return isValid;
}