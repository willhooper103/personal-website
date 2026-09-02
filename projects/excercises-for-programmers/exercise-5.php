
// Write a program that prompts for two numbers. Print the sum, difference, product, and 
quotient of those numbers as shown in the example output:

Example output

What is the first number? 10
What is the second number? 5
10 + 5 = 15
10 - 5 = 5
10 * 5 = 50
10 / 5 = 2 

There needs to be two inputs, one that prompts for the first number, 'What is the first number?'  and the second number, 'What is the second number? 5'

The program needs to add, subtract, multiply and divide.




<style>
	form {
		display: grid;
		gap: 16px;
		max-width: 300px;
		outline: 1px solid black;
		border-radius: 8px;
		padding: 1rem;
		background-color: ghostwhite;
	}

	input-field {
		display: grid;
	}
</style>


<?php

$firstNumber = 0;
$secondNumber = 0;
$totalAdd = 0;
$totalSub = 0;
$totalMult = 0;
$totalDivide = 0;
$error = "";

function calculate($firstNumber, $secondNumber) {
	return ("$firstNumber + $secondNumber = $total,

		    $firstNumber - $secondNumber = $total,

		    $firstNumber * $secondNumber = $total,

			$secondNumber != 0 ? $firstNumber / $secondNumber");
}


if (isset($_POST['submitted'])) {
	$firstNumber = $_POST["firstNumber"] ?? '';
	$secondNumber = $_POST["secondNumber"] ?? '';

}
		// Check that both fields are numbers and not empty
		if (!is_numeric($firstNumber)) {
			$error = "Please enter the first number.";
		} elseif  (!is_numeric($secondNumber)) {
			$error = "Please enter the second number.";
		}	else {
				$totalAdd = floatval($firstNumber) + floatval($secondNumber);
				$totalSub = floatval($firstNumber) - floatval($secondNumber);
				$totalMult = floatval($firstNumber) * floatval($secondNumber);
				$totalDivide = floatval($firstNumber) / floatval($secondNumber);
}			

 ?>


<form method="POST">
	<p>Simple Math</p>

	<input-field>
		<label>What is the first number?</label>
		<input type="text" name="firstNumber" value="<?=$firstNumber?>"> 
	</input-field>

	<input-field>
		<label>What is the second number?</label>
		<input type="text" name="secondNumber" value="<?=$secondNumber?>"> 
	</input-field>

	<button type='submit' name='submitted'>Submit</button>

	<output>
		<?=$totalAdd?> <br> <?=$totalSub?> <br> <?=$totalMult?> <br> <?=$totalDivide?>
	</output>
	
</form>