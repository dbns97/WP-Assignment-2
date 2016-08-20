<?php $title = 'Contact'; include("header.php");?>

<main>

	<div id="contact-form-container">
		<div id="contact-form-wrapper" class="center">
			<h2 id="contact-heading"class="center">Book Josh for <br>a private event...</h2>
			<form id="contact-form">
				<div class="contact-form-input-wrapper"><label>First Name *</label><input class="form-input" type="text" name="submitted[first_name]"></div>
				<div class="contact-form-input-wrapper"><label>Last Name *</label><input class="form-input" type="text" name="submitted[last_name]"></div>
				<div class="contact-form-input-wrapper"><label>Email Address *</label><input class="form-input" type="text" name="submitted[email_address]"></div>
				<div class="contact-form-input-wrapper"><label>Phone Number *</label><input class="form-input" type="text" name="submitted[phone_number]"></div>
				<div class="contact-form-input-wrapper"><label>Event Date *</label><input class="form-input" type="text" name="submitted[event_date]"></div>
				<div class="contact-form-input-wrapper"><label>Event Time</label><input class="form-input" type="text" name="submitted[event_time]"></div>
				<div class="contact-form-input-wrapper"><label>Event Location</label><input class="form-input" type="text" name="submitted[event_location]"></div>
				<div class="contact-form-input-wrapper"><label>Event Description</label><textarea class="form-input" cols="60" rows="5" name="submitted[event_description]"></textarea></div>
				<div class="contact-form-input-wrapper"><label>Performance Required</label><select class="form-input" name="submitted[performance_required]">
					<option value="" selected="selected">- None -</option>
					<option value="mc">MC</option>
					<option value="comedy_spot">Comedy Spot</option>
					<option value="full_show">Full Show</option>
					<option value="other">Other</option>
				</select></div>
				<div id="contact-form-submit-wrapper" class="form-submit-wrapper center">
					<input class="center" type="submit" value="Submit" name="op">
				</div>
			</form>
		</div>
	</div>

</main>

<?php include("footer.php");?>
