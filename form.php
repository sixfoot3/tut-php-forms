<form action="form_handler.php" method="get"> <?php //get or post ?>
	<div class="form-group">
		<label for="form_Name">Your Name</label>
		<input type="text" name="personalinfo[name]" class="form-control" id="form_Name" placeholder="Enter Name Here">
	</div>
	<div class="form-group">
		<label for="form_email">Email</label>
		<input type="text" name="personalinfo[email]" class="form-control" id="form_email" placeholder="Enter Email">
	</div>
	<div class="form-group">
		<label for="form_phone">Phone</label>
		<input type="text" name="personalinfo[phone]" class="form-control" id="form_phone" placeholder="E.g. 999-000-8877">
	</div>
	<div class="form-group">
		<label for="form_radio">Can you read HTML?</label>
		<div class="radio">
			<label><input type="radio" value="yes" name="optradio">Yes</label>
		</div>
		<div class="radio">
			<label><input type="radio" value="no" name="optradio">No</label>
		</div>
	</div>
	<div class="form-group">
		<label for="checkbox">Choose multiple options below:</label>
		<div class="checkbox">
			<label><input name="checkbox[]" type="checkbox" value="option_1">Option 1</label>
		</div>
		<div class="checkbox">
			<label><input name="checkbox[]" type="checkbox" value="option_2">Option 2</label>
		</div>
		<div class="checkbox ">
			<label><input name="checkbox[]" type="checkbox" value="option_3">Option 3</label>
		</div>
	</div>
	<div class="form-group">
		<label for="search_engine">What search engine do you use?</label>
		<select class="form-control" name="search_engine" id="search_engine">
			<option value="-1">Please Select...</option>
			<option value="google.com">Google.com</option>
			<option value="yahoo.com">Yahoo.com</option>
			<option value="bing.com">Bing.com</option>
			<option value="ask.com">Ask.com</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" value="Submit Form" class="btn btn-primary"/>
	</div>
</form>