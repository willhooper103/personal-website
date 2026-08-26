exercise-2.php


<!-- Create a program that prompts for an input string and displays output that shows the input string and the number of characters the string contains. 

 example output: 

 What is the input string? Homer
 Homer has 5 characters.

 This needs a form to enter 'Homer'

 It needs a button to submit the string.

 The program will need to count the letters in 'Homer', or any other string entered.

 So maybe, $Homer = [
				"characters" => 5
				"name" => $Homer

 It will need to echo 'Homer has 5 characters.'
 Or, echo " . name . " has " . characters . ".-->

<style>
 	label, input, button {
/* 		border: 1px solid red;*/
 	}

 	p {
 		font-size: 18px;
 	}

 	form {
 		max-width: 400px;
 		border: 1px solid black;
 		border-radius: 8px;
 		padding: 0rem 1rem 1rem 1rem;
 	}

 	.field {
/* 		border: 1px solid blue;*/
 		display: flex;
 		flex-direction: column;
 	}

 	.field label {
 		font-size: 18px;
 		magin-bottom: 4px;
 	}

 	button[type='submit'] {
 		margin-top: 20px;
 	}
</style>


<?php

function showCode($data) {
 	echo '<pre><code>' .
 	print_r($data, true) . '</code></pre>';
 }

$name = isset($_POST['user_name']) ? trim($_POST['user_name']) : '';
$lettersOnly = str_replace('','', $name);
$count = mb_strlen($lettersOnly, 'UTF-8');

	
if (isset($_POST["submitted"])) {
	if (isset($_POST['user_name']) && !empty($_POST['user_name'])) {
		if ($_POST['user_name']) {
			$name= $_POST['user_name'];
			//if so, count number of letters in name.
		}
	}
}

?>

<form method='POST'>
 	<p>Returning a string</p>

 	<div class='field'>
 		<label>What is the input string?</label>
 		<input type="name" name='user_name' value=''>
 	</div>

 	<?php 
 	echo "The name <strong>" . htmlspecialchars($name) . "</strong> has " . $count . " letters.";
?>

 	<button type='submit' name='submitted'>Push me</button>
 
</form>





