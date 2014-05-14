<form method="POST" action="/index.php/contact/submit" id="contact">
	<h3>Contact me, even if you have to just say "HI".</h3>

	<div class="line-entry">
		<label for="name">Name</label><input type="text" name="name" id="name" required>
	</div>
	<div class="line-entry">
		<label for="email">Email</label><input type="email" name="email" id="email" required>
	</div>
	<div class="line-entry">
		<label for="message">Message</label>
		<textarea name="message" id="message"></textarea>
	</div>
	<div class="line-entry">
		<input type="submit" value="Submit">
	</div>	

</form>