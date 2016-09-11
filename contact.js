document.getElementById("contact-form").onload = function() {
	console.log("test1");
	var today = new Date();
	var month = today.getMonth() + 1;
	var day = today.getDate();
	var year = today.getFullYear();

	if(month < 10) month = '0' + month.toString();
	if(day < 10) day = '0' + day.toString();

	var minDate = year + '-' + month + '-' + day;
	document.getElementById("date").setAttribute("min", minDate);
};

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
/*
function validateForm() {
	var phone = document.forms["contactForm"]["phone"].value;
}
*/
function setMinDate() {
	console.log("test1");
	var today = new Date();
	var month = today.getMonth() + 1;
	var day = today.getDate();
	var year = today.getFullYear();

	if(month < 10) month = '0' + month.toString();
	if(day < 10) day = '0' + day.toString();

	var minDate = year + '-' + month + '-' + day;
	document.getElementById("date").setAttribute("min", minDate);
}
