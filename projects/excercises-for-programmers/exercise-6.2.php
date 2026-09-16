

// Create a program that determines how many years you have left until retirement and the year you can retire. It should prompt for your current age and the age you want to retire and display the output as shown in the example that follows.

Example output:

What is your current age 25
At what age would you like to retire? 65
You have 40 years left until you can retire.
It's 2026, so you can retire in 2066.


The program needs to prompt for current age and retirement age.
It need to subtract current age from retirement age.
It needs to add the age entered for retirement to the current year to give the year of retirement.


<?php

// Initialize variables to prevent undefined variables notices
$currentAge = '';
$retirementAge = '';
$yearsLeft = '';
$year = date('Y');
$futureYear = '';
$error = '';
$outputMessage = '';
$outputMessage2 = '';

if (isset($_POST['buttonPushed'])) {
	$currentAge = $_POST["currentAge"] ?? '';
	$retirementAge = $_POST["retirementAge"] ?? '';


	// Make sure inputs are numeric with !is_numeric
	if (!is_numeric($currentAge) || floatval($currentAge) < 0) {
		$error = "Please enter current age.";
	} elseif (!is_numeric($retirementAge) || floatval($retirementAge) < 0) {
		$error = "Please enter a retirement age.";
	} elseif (floatval($retirementAge) < floatval($currentAge)) {
		$error - "Your retirment age cannot be less than your current age";
	} else {
		// Calculate years left and the future retirement year.
		// So, functions are not needed? 
		$currentYear = intval(date('Y'));
		$yearsLeft = floatval($retirementAge) - floatval($currentAge);
		$futureYear = $currentYear + $yearsLeft;

		//Build the output message matching the example format
		$outputMessage = "You have " . $yearsLeft . " years left until you can retire<br>";
		$outputMessage2 = "It's " . $currentYear . ", so you can retire in " . $futureYear . ".";
	}	//It looks like each output message needs to have its own name.
}

?>

<form method='POST'>

	<input-field>
		<label>Current Age</label>
		<input type="text" name='currentAge' value='<?=$currentAge?>'>
	</input-field>

	<input-field>
		<label>Retirement Age</label>
		<input type="text" name='retirementAge' value='<?=$retirementAge?>'>
	</input-field>

	<div class='actions'>
		<button type='submit' name='buttonPushed'>Enter</button>
		
	</div>

	<output>
		<?php 
			// Display validation errors
			if (!empty($error)) {
				echo "<span style='color: red;'>" . $error . "</span>";
			}
			// Otherwise, display the calculation results
			else if (!empty($outputMessage)) {
				echo $outputMessage;
				echo $outputMessage2;
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