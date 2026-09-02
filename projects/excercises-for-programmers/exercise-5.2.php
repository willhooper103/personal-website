
<style>

	header {
		font-size: 1.2rem;
	}

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
// These are blank so that any value can be entered.
$firstNumber = ''; 
$secondNumber = '';
$additionResult = '';
$subtractionResult = '';
$multiplicationResult = '';
$divisionResult = '';
$error = '';

// Define the function to format the equation
function generateEquation($num1, $num2, $operator) { // It looks like the variables in the function
	$val1 = floatval($num1);						// don't have to match the ones listed above.
	$val2 = floatval($num2); //$val1 and $val2 now equal $num1 and $num2

	if ($operator === '+') {
		$ans = $val1 + $val2; //$ans is 'answer' answer equals $val1 + $val2
	}  elseif ($operator === '-') {
		$ans = $val1 - $val2;
	}  elseif ($operator === '*') {
		$ans = $val1 * $val2;
	}  elseif ($operator === '/') {
		$ans = $val1 / $val2; 
	}	else {
		return "Invalid operator";
	}

	return "$val1 $operator $val2 = $ans";
}

// Process form submission - Think of this a setting up the form to work properly.
if (isset($_POST['submitted'])) {
	$firstNumber = $_POST["firstNumber"] ?? '';
	$secondNumber = $_POST["secondNumber"] ?? '';    // Remember, $firstNumber, $secondNumber are the
													// values set for the inputs down below.
	if (!is_numeric($firstNumber)) {
			$error = "Please enter the first number.";
		} elseif  (!is_numeric($secondNumber)) {
			$error = "Please enter the second number.";
		}	else {
				// Call the function for each operation
			$additionResult = generateEquation($firstNumber, $secondNumber, '+'); 
			$subtractionResult = generateEquation($firstNumber, $secondNumber, '-');
			$multiplicationResult = generateEquation($firstNumber, $secondNumber, '*');
			$divisionResult = generateEquation($firstNumber, $secondNumber, '/');
		}

}

?>



<form method="POST">
	<header><strong>Simple Math</strong></header>

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
		<?=$additionResult?> <br> <?=$subtractionResult?> <br> <?=$multiplicationResult?> <br> <?=$divisionResult?>
	</output>
	
</form>
