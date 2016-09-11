// Set the earliest date for the date input to the current date
window.onload = function() {
	var today = new Date(); // Date object for current date
	var month = today.getMonth() + 1; // Month is 0 indexed so must add 1
	var day = today.getDate();
	var year = today.getFullYear();
	var minDate; // String to hold minimum date parameter to be assigned to date input

	if (month < 10) month = "0" + month.toString(); // Prepend "0" to month if necessary
	if (day < 10) day = "0" + day.toString(); // Prepend "0" to day if necessary

	minDate = year + "-" + month + "-" + day;
	document.getElementById("date").setAttribute("min", minDate);
};

// Display the current event flexibility value under the slider
function displayEventFlexibility(val) {
	switch (val) {
		case "1":
			document.getElementById("eventFlexibilityOutput").innerHTML = "Not Flexible";
			break;
		case "2":
			document.getElementById("eventFlexibilityOutput").innerHTML = "Somewhat Flexible";
			break;
		case "3":
			document.getElementById("eventFlexibilityOutput").innerHTML = "Very Flexible";
			break;
	}
}
