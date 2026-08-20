

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



	if (isset($_POST['submitted'])) {
	if (isset($_POST['quoteInput']) && !empty($_POST['user_name'])) {
		if($_POST['quoteInput']) {
			$quote= $_POST['quoteInput'];
			$quote = "These aren't the droids you're looking for";
		}else
			$quote = "Please enter correct quote.";
	}	
}

	$quote = "";

	if (isset($_POST['submitted'])) {
	if (isset($_POST['nameInput']) && !empty($_POST['user_name'])) {
		if($_POST['nameInput']) {
			$name= $_POST['nameInput'];
			$answer = "$name + $quote";
		}else
			$answer = "Please enter a name.";
	}	
}


	$name = "Obi-Wan Kenobi";
	$quote = "\"These aren't the droids you're looking for.\"";

	$answer = "";

	$answer = "$name + $quote";
	

?>



<form method="POST">
	<p>String with quotations</p>

	<div class="field">
		<label>What is the quote?</label>
		<input type="text" name='quoteInput'>
	</div>


	<div class="field">
		<label>Who said it?</label>
		<input type="text" name='nameInput'>
	</div>

<?php
	echo "" . $name . "  says, " . $quote ."";
?>

	<button type='submit' name='submitted'>Enter</button>

</form>




