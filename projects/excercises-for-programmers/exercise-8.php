

//Write a program to evenly divide pizzas. Prompt for the number of people, the number of pizzas, and the number of slices per pizza. Ensure that the number of pieces comes out even. Display the number of pieces of pizza each person should get. If there are leftovers, show the number of leftover pieces.

Example output 

How many people? 8
How many pizzas do you have? 2
8 people with 2 pizzas
Each person gets 2 pieces of pizza.
There are 0 lefover pieces.

Prompt for - name, number of pizzas.
I think there needs to be a value for number of pieces per pizza (usually 8).
The pizzas need to be divided into 8 pieces per pizza.
So, 1 pizza = 8
	2 pizzas = 16
	3 pizzas = 24
Number of pizzas (x) * 8 

<?php

$people = '';
$pizza = '';
$piecesperpizza = '';
$piecesperperson = '';
$outputMessage = ''; 

if (isset($_POST['submitted'])) {
	$people = $_POST['people'] ?? '';
	$pizza = $_POST['pizza'] ?? '';
	$piecesperpizza = $_POST['piecesperpizza'] ?? '';

	if (!is_numeric($people) || floatval($people) < 0) {
		$error = "Please enter the number of people.";
	} elseif (!is_numeric($pizza) || floatval($pizza) < 0) {
		$error = "Please enter the number of pizzas.";
	} elseif (!is_numeric($piecesperpizza) || floatval($piecesperpizza) < 0) {
		$error = "Please enter the number of pieces per pizza.";
	} else {
		$piecesperpizza = (floatval($pizza) * 8) / 2;
		$piecesperperson = floatval($piecesperpizza) / floatval($people);

		$outputMessage = "Each person gets " . $piecesperperson . " piece.";
	}
}

?>

<form method="POST">

 	<p>Pizza Party</p>

 	<inputfield>
 		<label for="">How many people?</label><br>
 		<input type="text" name='people' value='<?=$people?>'>
 	</inputfield>

 	<inputfield>
 		<label for="">How many pizzas do you have?</label>
 		<input type="text" name='pizza' value='<?=$pizza?>'>
 	</inputfield>

 	<inputfield>
 		<label for="">How many pieces per pizza?</label>
 		<input type="text" name='piecesperpizza' value='<?=$piecesperpizza?>'>
 	</inputfield>

 	<div class='actions'>
 		<button type='submit' name='submitted'>Enter</button>
 	</div>
 

 	<output>
 		<?php 

 			if (!empty($error)) {
 				echo $error;
 			}
 			else if (!empty($outputMessage)) {
 				echo $outputMessage;
 			}
 		?>
 	</output>
 	
 </form>

<style>
	form {
		display: block;
		display: grid;
		outline: 1px solid black;
		border-radius: 8px;
		max-width: 300px;
		background-color: ghostwhite;
		padding: 1rem;
		gap: 1rem;
	}

	input-field {
		display: grid;
	}
</style>