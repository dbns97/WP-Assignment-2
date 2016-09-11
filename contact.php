<?php $title = 'Contact'; include("header.php");?>

<main>

	<div id="contact-form-container" class="row">
		<div id="contact-form-wrapper" class="center">
			<h2 id="contact-heading"class="center">Book Josh for <br>a private event...</h2>
			<form id="contact-form" name="contactForm" action="/~e54061/wp/processing.php" onsubmit="return validateForm()" method="post">
				<div class="contact-form-input-wrapper"><label>First Name *</label><input class="form-input" type="text" name="firstName" placeholder="Joe" pattern="[A-Za-z -]{1,20}" required></div>
				<div class="contact-form-input-wrapper"><label>Last Name *</label><input class="form-input" type="text" name="lastName" placeholder="Bloggs" pattern="[A-Za-z -]{1,20}" required></div>
				<div class="contact-form-input-wrapper"><label>Email Address *</label><input class="form-input" type="email" name="email" placeholder="jbloggs@gmail.com" required></div>
				<div class="contact-form-input-wrapper"><label>Phone Number *</label><input class="form-input" type="text" name="phone" placeholder="+61 123 456 789 (please use this format)" pattern="\+[0-9]{2}( [0-9]{3}){3}" required></div>
				<div class="contact-form-input-wrapper"><label>Event Date *</label><input id="date" class="form-input" type="date" name="eventDate" required></div>
				<div class="contact-form-input-wrapper"><label>Event Flexibilty *</label><div id="flexibilityWrapper"><input id="eventFlexibility" class="form-input" type="range" min="1" max="3" name="eventFlexibility" oninput="displayEventFlexibility(this.value)" required><p name="eventFlexibilityOutput" class="center" id="eventFlexibilityOutput">Somewhat Flexible</p></div></div>
				<div class="contact-form-input-wrapper"><label>Event Time</label><input class="form-input" type="time" name="eventTime"></div>
				<div class="contact-form-input-wrapper"><label>Event Location</label><input class="form-input" type="text" name="eventLocation" placeholder="Prahran, Melbourne" pattern="[a-zA-Z0-9 ,.-()/'\r\n]"></div>
				<div class="contact-form-input-wrapper"><label>Event Description</label><textarea class="form-input" cols="60" rows="5" name="eventDescription" placeholder="Briefly describe the event you would like to book Josh for..." pattern="[a-zA-Z0-9 ,.-()/$'\r'$'\n']"></textarea></div>
				<div class="contact-form-input-wrapper"><label>Performance Required</label><select class="form-input" name="performance">
					<option value="" selected="selected">- None -</option>
					<option value="mc">MC</option>
					<option value="comedy_spot">Comedy Spot</option>
					<option value="full_show">Full Show</option>
					<option value="other">Other</option>
				</select></div>
				<div id="contact-form-submit-wrapper" class="form-submit-wrapper center">
					<input class="center" type="submit" value="Submit">
				</div>
			</form>
		</div>
	</div>

</main>

<script src="contact.js"></script>
<?php include("footer.php");?>
