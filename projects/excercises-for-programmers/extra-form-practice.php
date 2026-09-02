


// a variable is a named container used to store data values that can change during the execution of a script.
It must start with a dollar sign $. Ex. $name

PHP reads from top to bottom, so:

check if form is submitted: 
if (isset($_POST['buttonPushed'])) THEN, assign POST values(name, quote) immediately
$name = trim($_POST['name'] ?? '');
$quote = trim($_POST['quote'] ?? '');


THEN: 
//validate both fields
	if (empty($quote)) {
		$nounHelper = "please enter the quote.";
	} elseif (empty($name)) {
		$nounHelper = "please enter the name.";
	} else {
	//success: build the message
		$message = stateQuote($name, $quote);
	}

<?php
$name = "";
$quote = "";
$message = "";
$nounHelper = "";

function stateQuote($n, $q) {
	return ("$n says, $q.");
}


// check if form is submitted
if (isset($_POST['buttonPushed'])) {
//assign POST values immediately
	$name = trim($_POST['name'] ?? '');
	$quote = trim($_POST['quote'] ?? '');


	//validate both fields
	if (empty($quote)) {
		$nounHelper = "please enter the quote.";
	} elseif (empty($name)) {
		$nounHelper = "please enter the name.";
	} else {
	//success: build the message
		$message = stateQuote($name, $quote);
	}
}

?>

<form method="POST">
	<heading><strong>String with quotations</strong></heading>

	<!-- display validation errors if they exist -->
	<?php if (!empty($nounHelper));?>
		<p style="color: red;"><?=$nounHelper?></p>
	

	<input-field>
		<label for="quote" class=''>What is the quote?</label>
		<input type="text" name='quote' value='<?=$quote?>'>
	</input-field>
	
	<input-field>
		<label for="name" class=''>Who said it?</label>
		<input type="text" name='name' value='<?=$name?>'>
	</input-field>

	<button type='submit' name ='buttonPushed'>Enter</button>

	<output>
		<?php echo $message; ?>
	</output>
</form>







// a variable is a named container used to store data values that can change during the execution of a script.
It must start with a dollar sign $. Ex. $name

PHP reads from top to bottom, so:

check if form is submitted: 
if (isset($_POST['buttonPushed'])) THEN, assign POST values(name, quote) immediately
$name = trim($_POST['name'] ?? '');
$quote = trim($_POST['quote'] ?? '');


THEN: 
//validate both fields
	if (empty($quote)) {
		$nounHelper = "please enter the quote.";
	} elseif (empty($name)) {
		$nounHelper = "please enter the name.";
	} else {
	//success: build the message
		$message = stateQuote($name, $quote);
	}

<?php

$name = "";
$state = "";
$city = "";
$message = "";
$error = "";

function statement($n, $c, $s) {
	return ("$n has lived in $c, $s.");
}

if (isset($_POST['buttonPushed'])) { 
	$name = trim($_POST['name'] ?? '');
	$city = trim($_POST['city'] ?? '');
	$state = trim($_POST['state'] ?? '');
}

	if (empty($name)) {
		$error = "Please enter a name.";
	} elseif (empty($city)) {
		$error = "Please enter a city.";
	} elseif (empty($state)) {
		$error = "Plese enter a state.";
	} else {
		$message = statement($name, $city, $state);
}


?>

<form method="POST">
	<heading><strong>Places I've lived</strong></heading>

	<?php if (!empty($error));?>
		<p style="color: red;"><?=$error?></p>

	<input-field>
		<label for="city">Name</label>
		<input type="text" name='name' value='<?=$name?>'>	
	</input-field>


	<input-field>
		<label for="city">City</label>
		<input type="text" name='city' value='<?=$city?>'>	
	</input-field>

	<input-field>
		<label for="state">State</label>
		<input type="text" name='state' value='<?=$state?>'>	
	</input-field>
	
	<button type='submit' name='buttonPushed'>Enter</button>

	<output>
		<?=$message?>
	</output>
</form>


<style>

	heading {
		font-size: 1.2rem;
	}

	form {
		display: grid;
		max-width: 300px;
		gap: 16px;
		border: 1px solid black;
		border-radius: 8px;
		background-color: rgb(227 227);
		padding: 1rem;
	}

	input-field {
		display: grid;
	}

</style>























