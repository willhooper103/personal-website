

<!-- Create a program that prompts for a quote and an author. Display the quotation and author as shown in the example output.

example output:

What is the quote? These aren't the droids you're looking for. Who said it? Obi-Wan Kenobi
Obi-Wan Kenobi says, "These aren't the droids you're looking for."

 This needs a form for an answer to the question, "What is the quote?" Then respondant gives answer. 
 This then meeds a form for the answer to, "Who said it?' 

So two forms, then once the answers are given it needs to echo Obi-Wan Kedobi says, "These aren't the droids you're looking for."-->



<style>
	form * {
		font-family: sans-serif;
		
	}
	form {
		outline: 2px solid black;
		background-color: floralwhite;
		max-width: 200px;
		border-radius: 8px;
		padding: 1rem;
	}

	p {
		font-size: 1.5rem;
	}

	input, button {
		border-radius: 8px;
	}

	input {
		margin-bottom: .5rem;
	}
</style>

<?php

function showCode($data) {
 	echo '<pre><code>' .
 	print_r($data, true) . '</code></pre>';
 }

 echo $_SERVER["QUERY_STRING"];
 showCode($_POST);


$name = "";
$quote = "";

$nounHelper = "";

function stateQuote($n, $q) {
	return "Obi-Wan Kenobi says, These aren't the droids you're looking for.";
}

$formSubmitted = isset($_POST['buttonPushed']);

if ($formSubmitted) {
	if (!empty($_POST['quote'])) {
			$quote = $_POST['quote'];
			$message = stateQuote($name, $quote);
		} else {
			$nounHelper = "Please enter the quote.";
	}
}	
	

if ($formSubmitted) {
	if (!empty($_POST['name'])) {
			$name = $_POST['name'];
			$message = stateQuote($name, $quote);
		} else {
			$nounHelper = "Please enter the name.";
	}
}	

?>

<form method="POST">
	<p>String with quotations</p>

	<input-field>
		<label for='q'>What is the quote?<span title='(Something to do with drones'>(i)</span>
			<?php if ($nounHelper) { ?>
				<span class='warning'><?=$nounHelper?></span>
			<?php } ?>
		</label>
		<input type="text" name='quote' value='<?=$name?>'>
	</input-field>


	<input-field>
		<label for='name'>Who said it?</label>
		<input type="text" name='name' value='<?=$quote?>'>
	</input-field>

	<button type='submit' name='buttonPushed'>Enter</button>

	<output>
		<p><?=$message?></p>
	</output>

</form>




